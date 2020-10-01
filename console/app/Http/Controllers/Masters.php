<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Models\Introvideo;
use App\Models\Liveevent;
use App\Models\Newscategory;


class Masters extends Controller
{
    function app_intro_video(){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
          $data=Introvideo::where('id','1')->get();
          return view('admin.masters.app_intro_video',compact('data'));
        }else{
          return redirect('/admin/login');
        }

    }



    function save_intro_video(Request $request){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
        $validate_data=$request->validate([
        'video_title'=>'required|max:80',
        'video_details'=>'required|max:240',
        'video_url'=>'required',
      ],[
        'video_title.required'=>'Video title  is required',
        'video_details.required'=>'Video details  is required',
        'video_url.required'=>'Video link  is required',
      ]);
      $data = Introvideo::where('id', 1)->update([
        'video_title' =>$request->video_title,
        'video_details'=>$request->video_details,
        "video_url"=>$request->video_url,
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


    function app_live_events(){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
          $data=Liveevent::orderBy('id', 'desc')->paginate(10);
          return view('admin.masters.app_live_events')->with('res',$data);
        }else{
          return redirect('/admin/login');
        }
    }


    function save_live_events(Request $request){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
        $validate_data=$request->validate([
        'title_ta'=>'required|unique:live_events|max:120',
        'title_en'=>'required|unique:live_events|max:120',
        'live_url'=>'required',
        'status'=>'required',
      ],[
        'title_ta.required'=>'title tamil is required',
        'title_en.required'=>'title english is required',
        'live_url.required'=>'link  is required',
        'status.required'=>'status  is required',
        'title_ta.unique'=>'Title tamil is already exists!',
        'title_en.unique'=>'Title english is already exists!',
      ]);
      $data = Liveevent::create([
        'title_ta' =>$request->title_ta,
        'title_en'=>$request->title_en,
        "live_url"=>$request->live_url,
        "status"=>$request->status,
        "created_at"=>NOW(),
        "created_by"=>session('user_session')->id,
      ]);
      if($data){
        return redirect('/admin/app_live_events#list')->with(array('status'=>'success','msg'=>"Live event updated Successfully!."));

      }else{
        return redirect()->back()->with(array('status'=>'danger','msg'=>"Something went wrong!."));
      }
      }else{
        return redirect('/admin/login');
      }
    }



    #### Live Events #####
    function get_live_events_edit($live_id){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
          $id = Crypt::decrypt($live_id);
          $data=Liveevent::find($id);
          return view('admin.masters.app_live_events_edit')->with('res',$data);
        }else{
          return redirect('/admin/login');
        }
    }

    function update_live_events(Request $request){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){

        $id = Crypt::decrypt($request->live_id);
        $validate_data=$request->validate([
        'title_ta'=>'required|max:120|unique:live_events,title_ta,'.$id,
        'title_en'=>'required|max:120|unique:live_events,title_en,'.$id,
        'live_url'=>'required',
        'status'=>'required',
      ],[
        'title_ta.required'=>'title tamil is required',
        'title_en.required'=>'title english is required',
        'live_url.required'=>'link  is required',
        'status.required'=>'status  is required',
        'title_ta.unique'=>'Title tamil is already exists!',
        'title_en.unique'=>'Title english is already exists!',
      ]);
      $data = Liveevent::where('id', $id)->update([
        'title_ta' =>$request->title_ta,
        'title_en'=>$request->title_en,
        "live_url"=>$request->live_url,
        "status"=>$request->status,
        "updated_at"=>NOW(),
        "updated_by"=>session('user_session')->id,
      ]);
      if($data){
        // return redirect()->back()->with(array('status'=>'success','msg'=>"Live event updated Successfully!."));
        return redirect('/admin/app_live_events#list')->with(array('status'=>'success','msg'=>"Live event updated Successfully!."));

      }else{
        return redirect()->back()->with(array('status'=>'danger','msg'=>"Something went wrong!."));
      }
      }else{
        return redirect('/admin/login');
      }
    }

    #### Live Events #####

    #### News Category #####

    function news_category(){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
        $data=Newscategory::all();
        return view('admin.masters.news_category')->with('res',$data);
      }else{
        return redirect('/admin/login');

      }
    }

    #### News Category #####



}
