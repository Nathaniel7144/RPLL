<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
// // use Illuminate\Foundation\Bus\DispatchesJobs;
// // use Illuminate\Routing\Controller as BaseController;
// // use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    private function login(Request $request)
    {
        

    }

    public function getUserFromEmail(Request $request)
    {
        $email = $request->input('email');

        $employee = (array) json_decode(DB::table('employee')->where(['email'=>$email])->get());
        $employee = (array) $employee[0];
        
        if(count($employee) > 0)
        {
            //     echo "login success";
            $person = (array) json_decode(DB::table('person')->select(
                "name", "gender"
            )->where(['id'=>$employee["person_id"]])->get());
            $person = (array) $person[0];

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
    public function getUserFromPassword(Request $request)
    {
        $email=$request->input('email');
        $password=$request->input('password');

        $checkemail=DB::table('employee')->where(['email'=>$email])->get();
        $checkpass=DB::table('employee')->select("password")->where(['email'=>$email])->get();

        if(count($checkemail) > 0 )
        {
            if($password==$checkpass){
                echo "berhasil";
            }else{
                echo "gagal";
            }
        }else
        {
            echo "gagal";
        }
    }
}
?>