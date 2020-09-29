<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Models\Newscategory;
use App\Models\Newsfeed;


class Newsfeedcontroller extends Controller
{

  ### Create Newsfeed ###

  function create_newsfeed(){
    $role_type = session('user_session')->admin_role_type;
    if($role_type=='1'){
        $data=Newscategory::Where(['status'=>'Active'])->get();
        return view('admin.newsfeed.create_news_feed')->with('res',$data);
      }else{
        return redirect('/admin/login');
      }
  }

  function save_newsfeed(Request $request){

    $role_type = session('user_session')->admin_role_type;
    if($role_type=='1'){
      $validate_data=$request->validate([
      'title_ta'=>'required|unique:news_feed|max:120',
      'title_en'=>'required|unique:news_feed|max:120',
      'description_en'=>'required|unique:news_feed|max:120',
      'description_ta'=>'required|unique:news_feed|max:120',
      'nf_video_token_id'=>'sometimes|required',
      'nf_cover_image'=>'required',
      'nf_category_id'=>'required',
      'news_date'=>'required',
    ],[
      'title_ta.required'=>'Title tamil is required',
      'title_en.required'=>'Title english is required',
      'description_en.required'=>'Description english is required',
      'description_ta.required'=>'Description tamil is required',
      'nf_video_token_id.required'=>'Video token  is required',
      'nf_cover_image.required'=>'Cover image is required',
      'status.required'=>'Status  is required',
      'nf_category_id.required'=>'Category is required',
      'title_ta.unique'=>'Title tamil is already exists!',
      'title_en.unique'=>'Title english is already exists!',
    ]);
    $file=$request->file('nf_cover_image')->store('newsfeed');

    $data = Newsfeed::create([
      'title_ta' =>$request->title_ta,
      'title_en'=>$request->title_en,
      'description_en' =>$request->description_en,
      'description_ta'=>$request->description_ta,
      "nf_video_token_id"=>$request->nf_video_token_id,
      "nf_category_id"=>$request->nf_category_id,
      "nf_cover_image"=>$file,
      "status"=>$request->status,
      "created_at"=>NOW(),
      "created_by"=>session('user_session')->id,
    ]);
    if($data){
      return redirect()->back()->with(array('status'=>'success','msg'=>"Newsfeed created Successfully!."));
    }else{
      return redirect()->back()->with(array('status'=>'danger','msg'=>"Something went wrong!."));
    }
    }else{
      return redirect('/admin/login');
    }





  }


}
