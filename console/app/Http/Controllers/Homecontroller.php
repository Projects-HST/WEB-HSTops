<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Adminlogin;
use App\Mail\Forgotpasswordmail;
use Auth;
use Session;


class Homecontroller extends Controller
{

    function login(){
      return view('login');
    }

    function dashboard(){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
          return view('admin.dashboard');
        }else{
          echo "subadmin";
        }
    }

    function checklogin(Request $request)
    {
        $email=$request->post('email');
        $password=md5($request->post('password'));
        $user = Adminlogin::where('email_id', $email)
                  ->where('password',md5($request->password))
                  ->first();
        if($user){
            Auth::login($user);
            $request->session()->put('user_session', $user);
            return redirect('admin/dashboard');
        }else{
            return redirect()->back()->with(array('status'=>'danger','msg'=>"Invalid login credentials!."));

        }
    }


    function rand_string( $length ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);
    }


    function forgotpassword(Request $request){
       // echo "1";exit;

       $email=$request->post('email');
       $user = Adminlogin::where('email_id', $email)
                 ->first();
         if($user){
          $resetpassword=$this->rand_string(8);
           $data = Adminlogin::where('email_id', $email)->update([
             'password' =>md5($resetpassword),
             "updated_at"=>NOW(),
           ]);
           $details=[
             'title'=>'Password reset Successfully',
             'body'=>'New Password is '.$resetpassword,
           ];
           Mail::to('kamal.happysanz@gmail.com')->send(new Forgotpasswordmail($details));
           return redirect()->back()->with(array('status'=>'success','msg'=>"Reset Password sent to the Mail ID!."));
         }else{
           return redirect()->back()->with(array('status'=>'danger','msg'=>"Email not registered!."));
         }


     }

     function logout(){
       // Session::flush();
       Session::forget('user_session');

       return redirect('admin/login');

     }

}
