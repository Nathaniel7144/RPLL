<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
// // use Illuminate\Foundation\Bus\DispatchesJobs;
// // use Illuminate\Routing\Controller as BaseController;
// // use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;

class UserController extends Controller
{
    //
    public function login(Request $request)
    {
        
        $email = $request->input('email');

        $checklogin = DB::table('employee')->where(['email'=>$email])->get();
        $result = [];
        
        if(count($checklogin) > 0)
        {
            //     echo "login success";
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