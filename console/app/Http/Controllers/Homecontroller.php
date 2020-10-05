<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

use App\Models\Adminlogin;
use App\Models\Usermastermodel;
use App\Models\Newsfeed;

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
          $totalcount=Usermastermodel::count();
          $malecount = Usermastermodel::where('Gender', 'Male')->count();
          $femalecount = Usermastermodel::where('Gender', 'Female')->count();
          $otherscount = Usermastermodel::where('Gender', 'Others')->count();
          $post=Newsfeed::where('nf_category_id','2')->orderBy('news_date', 'desc')->take(10)->get();
          $events=Newsfeed::where('nf_category_id','3')->orderBy('news_date', 'desc')->take(5)->get();
          $postcount=Newsfeed::where('nf_category_id','2')->count();
          $eventcount=Newsfeed::where('nf_category_id','3')->count();
          return view('admin.dashboard',compact('totalcount','malecount','femalecount','otherscount','post','postcount','events','eventcount'));
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

     function profile(){
       $id = session('user_session')->id;
       $data=Adminlogin::find($id);
       return view('admin.profile',compact('data'));
     }

     function changepassword(){
       $id = session('user_session')->id;
       $data=Adminlogin::find($id);
       return view('admin.change_password',compact('data'));
     }


     function update_passsword(Request $request){
       $id=$request->input('pf_id');
       $user = Adminlogin::findOrFail($id);
       $this->validate($request, [
         'old_password' => 'required',
         'new_password' => 'required|min:6|max:8',
         'retype_password' => 'required_with:new_password|same:new_password|min:6',
          ]);


          if (md5($request->old_password)==$user->password) {
             $user->fill([
              'password' => md5($request->new_password)
              ])->save();
              return redirect()->back()->with(array('status'=>'success','msg'=>"password updated successfully"));
          } else {
            return redirect()->back()->with(array('status'=>'danger','msg'=>"old password does not match!"));
          }
     }

     function update_profile(Request $request){
       $pf_id=$request->input('pf_id');
       $validate_data=$request->validate([
       'email_id'=>'required|max:80|unique:admin_user_master,email_id,'.$pf_id,
       'full_name'=>'required|max:40',
       'qualification'=>'required|max:40',
       'gender'=>'required',
       'phone_number'=>'required|max:10|min:10|unique:admin_user_master,phone_number,'.$pf_id,
       'address'=>'required|max:240',
       'profile_pic'=>'image|mimes:jpeg,png,jpg|max:1024',
     ],[
       'email_id.required'=>'Email id is required',
       'address.required'=>'Address is required',
       'qualification.required'=>'Qualification is required',
       'gender.required'=>'Gender is required',
       'full_name.required'=>'Full name is required',
       'profile_pic.image'=>'Profile picture is should be image',
       'profile_pic.mimes'=>'Profile picture is should JPG,PNG',
     ]);
     $image = $request->file('profile_pic');
     $nf_old_img=$request->input('old_profile_pic');
     if(empty($image)){
       $img=$nf_old_img;
     }else{
     $nfimage = time().'.'.$image->getClientOriginalExtension();
     $destinationPath = storage_path('profile/');
     $image->move($destinationPath, $nfimage);
     $img=$nfimage;
     }
     $data = Adminlogin::where('id', $pf_id)->update([
       'full_name' =>$request->full_name,
       'email_id' =>$request->email_id,
       'qualification' =>$request->qualification,
       'gender' =>$request->gender,
       'phone_number' =>$request->phone_number,
       'address' =>$request->address,
       'profile_pic' =>$img,
       "updated_at"=>NOW(),
       "updated_by"=>session('user_session')->id,
     ]);
     if($data){
       return redirect()->back()->with(array('status'=>'success','msg'=>"Profile updated successfully"));
     }else{
       return redirect()->back()->with(array('status'=>'danger','msg'=>"Something went wrong!."));

     }

     }


     function user_list(){
       $data=Usermastermodel::orderBy('id', 'desc')->paginate(10);
       return view('admin.users.user_list',compact('data'));
     }

     function search_data(){
       $search_val=request('search_text');
       $data=Usermastermodel::where('full_name','LIKE','%'.$search_val.'%')->orWhere('phone_number','LIKE','%'.$search_val.'%')->orderBy('id', 'desc')->paginate(10);
       return view('admin.users.user_list',compact('data','search_val'));
     }

     function change_status(Request $request){
         $en_id=request('id');
         $id = Crypt::decrypt($en_id);
          $data=Usermastermodel::find($id);
          if($data->status=='Active'){
            $status='Inactive';
          }else{
            $status='Active';
          }
          $res = Usermastermodel::where('id', $id)->update([
            'status' =>$status,
            "updated_at"=>NOW(),
            "updated_by"=>session('user_session')->id,
          ]);
          if($res){
            echo "Status updated successfully!.";
          }else{
            echo "Something weent wrong!.";
          }


     }



     function logout(){
       // Session::flush();
       Session::forget('user_session');
       return redirect('admin/login');

     }

}
