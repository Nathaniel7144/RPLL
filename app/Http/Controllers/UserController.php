<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        //  echo $email;
        $checklogin = DB::table('employee')->where(['email'=>$email])->get();

        if(count($checklogin) > 0)
        {
            echo "login success";
        }
        else
        {
            echo "login failed";
        }
     }
}
?>