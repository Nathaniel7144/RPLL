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
    public function login(Request $request)
    {
        
        $email = $request->input('email');

        $checklogin = DB::table('employee')->where(['email'=>$email])->get();
        
        if(count($checklogin) > 0)
        {
            //     echo "login success";
            $idperson = DB::tables('employee')->where(['email'=>$email])->value('person_id');
            $position = DB::tables('employee')->where(['email'=>$email])->value('position');
            $name = DB::table('person')->where(['id'=>$idperson])->value('name');
            $gender = DB::table('person')->where(['id'=>$idperson])->value('gender');
            $result = [
                "name"=>$name,
                "gender"=>$gender,
                "email"=>$email,
                "position"=>$position
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
}
?>