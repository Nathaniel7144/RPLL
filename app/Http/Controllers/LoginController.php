<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
// // use Illuminate\Foundation\Bus\DispatchesJobs;
// // use Illuminate\Routing\Controller as BaseController;
// // use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function getUserFromEmail(Request $request)
    {
        $email = $request->input('email');

        $employee = DB::table('employee')->where(['email'=>$email])->get();
        
        if(count($employee) > 0)
        {
            //     echo "login success";
            $employee = self::singleResultToArray($employee);
            $person = self::singleResultToArray(DB::table('person')->select(
                "name", "gender"
            )->where(['id' => $employee["person_id"]])->get());

            $result = [
                "name"=>$person["name"],
                "gender"=>$person["gender"],
                "email"=>$email,
                "position"=>$employee["position"]
            ];
            Log::debug("email login succeeded");
        }
        else
        {
            Log::debug("email login failed");
            $result = (object) ["error" => "Email is not found in database"];
        }
        return json_encode($result);
    }

    public function authenticateUser(Request $request)
    {

        if(self::isPasswordTrue(
            self::singleResultToArray(DB::table('employee')->select("email")->where(
                ['email'=> $request->input('email')]
            )->get()),    
            $request->input('pwd')
        )){
            $result = self::singleResultToArray(DB::table('employee')->select("emp_id")->where(
                ['email'=>$request->input('email')]
            )->get());
        }else{
            $result = (object) ["error" => "Wrong Password!"];
        }
    
        return json_encode($result);
    }
    
    private function isPasswordTrue($email, $password)
    {
        $truePass = self::singleResultToArray(DB::table('employee')->select("pwd")->where(
            ['email'=> $email]
        )->get());

        return $password == $truePass["pwd"];
    }

    private function singleResultToArray($result)
    {
        return (array) ((array) json_decode($result))[0];
    }

}

?>