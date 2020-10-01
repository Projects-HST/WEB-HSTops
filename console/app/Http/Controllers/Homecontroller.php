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
    function forgot(){
      return view('forgot');
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
      $validate_data=$request->validate([
      'email'=>'required',
      'password'=>'required',
    ],[
      'email.required'=>'Email id is required',
      'password.required'=>'Password is required',
    ]);
        $email=$request->post('email');
        $password=md5($request->post('password'));
        $check = Adminlogin::where('email_id', $email)
                  ->where('password',md5($request->password))
                  ->first();
        if($check){
          $user = Adminlogin::where('email_id', $email)
                    ->where('password',md5($request->password))
                    ->where('status','Active')
                    ->first();
            if($user){
              Auth::login($user);
              $request->session()->put('user_session', $user);
              return redirect('admin/dashboard');
            }else{
              return redirect()->back()->with(array('status'=>'danger','msg'=>"Account is Inactive.Please contact the support!."));
            }
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
       $validate_data=$request->validate([
       'email_id'=>'required',
     ],[
       'email_id.required'=>'Email id is required',
     ]);
       $email=$request->post('email_id');
       $user = Adminlogin::where('email_id', $email)
                 ->where('status','Active')
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
           $mailto=array('kamal.happysanz@gmail.com','happysanzqa@gmail.com');
           Mail::to($mailto)->send(new Forgotpasswordmail($details));
           return redirect('/admin/login')->with(array('status'=>'success','msg'=>"Reset Password sent to the Mail ID!."));
         }else{
            return redirect(url()->previous() .'.login-forgot')->with(array('status'=>'danger','msg'=>"Email not registered!."));
         }


     }

     function logout(){
       // Session::flush();
       Session::forget('user_session');

       return redirect('admin/login');

     }

}
