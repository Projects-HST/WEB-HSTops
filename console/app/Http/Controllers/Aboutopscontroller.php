<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


use App\Models\Aboutops;
use App\Models\Socialmedia;


class Aboutopscontroller extends Controller
{

    function aboutops(){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
          $data=Aboutops::where('id','1')->get();
          return view('admin.aboutops.update_personal_info',compact('data'));
        }else{
          return redirect('/admin/login');
        }
    }


    function save_personal_info(Request $request){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
        $validate_data=$request->validate([
        'personal_life_text_ta'=>'required',
        'personal_life_text_en'=>'required',
      ],[
        'personal_life_text_ta.required'=>'Personal info tamil text is required',
        'personal_life_text_en.required'=>'Personal info english text is required',
      ]);
      $data = Aboutops::where('id', 1)->update([
        'personal_life_text_ta' =>$request->personal_life_text_ta,
        'personal_life_text_en'=>$request->personal_life_text_en,
        "updated_at"=>NOW(),
        "updated_by"=>session('user_session')->id,
      ]);
      if($data){
        return redirect()->back()->with(array('status'=>'success','msg'=>"Updated Successfully!."));
      }else{
        return redirect()->back()->with(array('status'=>'danger','msg'=>"Something went wrong!."));
      }
      }else{
        return redirect('/admin/login');
      }
    }


    function socialmedia(){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
          $data=Socialmedia::orderBy('id', 'desc')->paginate(10);
          return view('admin.aboutops.social_media_info',compact('data'));
        }else{
          return redirect('/admin/login');
        }
    }


    function create_social_media_link(Request $request){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
        $validate_data=$request->validate([
            'sm_url' => 'required',
            'sm_title' => 'required|unique:social_media|max:40',
            ],[
            'sm_url.required' => 'Enter the link',
            'sm_title.required' => 'Enter the title',
            'sm_title.unique' => 'Title already exists!',
            ]);
            $data = socialmedia::create([
              'sm_title' =>$request->sm_title,
              'sm_url'=>$request->sm_url,
              "status"=>$request->status,
              "created_at"=>NOW(),
              "created_by"=>session('user_session')->id,
            ]);
            if($data){
              return redirect()->to(url()->previous() . '#list')->with(array('status'=>'success','msg'=>"Social media created Successfully!."));

            }else{
              return redirect()->back()->with(array('status'=>'danger','msg'=>"Something went wrong!."));
            }
        }else{
          return redirect('/admin/login');
        }
    }
    function update_social_media_link(Request $request){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
        $id=$request->input('sm_id');
        $validate_data=$request->validate([
            'sm_url' => 'required',
            'sm_title' => 'required|max:40|unique:social_media,sm_title,'.$id,
            ],[
            'sm_url.required' => 'Enter the link',
            'sm_title.required' => 'Enter the title',
            'sm_title.unique' => 'Title already exists!',
            ]);
            $data = Socialmedia::where('id',$id)->update([
              'sm_title' =>$request->sm_title,
              'sm_url'=>$request->sm_url,
              "status"=>$request->status,
              "updated_at"=>NOW(),
              "updated_by"=>session('user_session')->id,
            ]);
            if($data){
              return redirect('/admin/socialmedia#list')->with(array('status'=>'success','msg'=>"Social media link updated Successfully!."));
            }else{
              return redirect()->back()->with(array('status'=>'danger','msg'=>"Something went wrong!."));
            }

        }else{
          return redirect('/admin/login');
        }
    }


    function get_edit_socialmedia($nf_id){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
          $id = Crypt::decrypt($nf_id);
          $data=Socialmedia::find($id);
          return view('admin.aboutops.edit_socialmedia',compact('data'));
        }else{
          return redirect('/admin/login');
        }
    }

}
