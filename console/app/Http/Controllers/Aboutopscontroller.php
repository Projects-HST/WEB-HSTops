<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;



use App\Models\Aboutops;
use App\Models\Aboutparty;
use App\Models\Socialmedia;
use App\Models\Awards;
use App\Models\Partyelectionlist;
use App\Models\Partystatelist;



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

    function aboutops_political_career(){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
          $data=Aboutops::where('id','1')->get();
          return view('admin.aboutops.update_political_career',compact('data'));
        }else{
          return redirect('/admin/login');
        }
    }


    function save_political_career_info(Request $request){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
        $validate_data=$request->validate([
        'political_career_text_ta'=>'required',
        'political_career_text_en'=>'required',
      ],[
        'political_career_text_ta.required'=>'Political career info tamil text is required',
        'political_career_text_en.required'=>'Political career info english text is required',
      ]);
      $data = Aboutops::where('id', 1)->update([
        'political_career_text_ta' =>$request->political_career_text_ta,
        'political_career_text_en'=>$request->political_career_text_en,
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


    function aboutparty(){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
          $data=Aboutparty::where('id','1')->get();
          return view('admin.aboutops.update_party_info',compact('data'));
        }else{
          return redirect('/admin/login');
        }
    }


    function save_party_info(Request $request){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
        $validate_data=$request->validate([
        'party_text_ta'=>'required',
        'party_text_en'=>'required',
      ],[
        'party_text_ta.required'=>'Personal info tamil text is required',
        'party_text_en.required'=>'Personal info english text is required',
      ]);
      $data = Aboutparty::where('id', 1)->update([
        'party_text_ta' =>$request->party_text_ta,
        'party_text_en'=>$request->party_text_en,
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


    function awards(){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
          $data=Awards::orderBy('id', 'desc')->paginate(10);
          return view('admin.aboutops.awards',compact('data'));
        }else{
          return redirect('/admin/login');
        }
    }

    function get_edit_awards($nf_id){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
          $id = Crypt::decrypt($nf_id);
          $data=Awards::find($id);
          return view('admin.aboutops.edit_awards',compact('data'));
        }else{
          return redirect('/admin/login');
        }
    }


    function create_awards(Request $request){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
        $validate_data=$request->validate([
          'achievement_title_ta'=>'required|unique:ops_achievements|max:80',
          'achievement_title_en'=>'required|unique:ops_achievements|max:80',
          'achievement_text_en'=>'required|max:240',
          'achievement_text_ta'=>'required|max:240',
          'status'=>'required',
          'achievement_image'=>'required|image|mimes:jpeg,png,jpg|max:1024',
          'achievement_date'=>'required',
      ],[
        'achievement_title_ta.required'=>'Title tamil is required',
        'achievement_title_en.required'=>'Title english is required',
        'achievement_text_en.required'=>'Details english is required',
        'achievement_text_ta.required'=>'Details tamil is required',
        'achievement_image.required'=>'Cover image is required',
        'achievement_image.max'=>'Maximum file size is 1MB',
        'status.required'=>'Status  is required',
        'achievement_date.required'=>'Date is required',
        'achievement_title_ta.unique'=>'Title tamil is already exists!',
        'achievement_title_en.unique'=>'Title english is already exists!',
      ]);
      $image = $request->file('achievement_image');
      $nfimage = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = storage_path('awards/');
      $image->move($destinationPath, $nfimage);
      $newDate = date("Y-m-d", strtotime($request->input('achievement_date')));

      $data = Awards::create([
        'achievement_title_ta' =>$request->achievement_title_ta,
        'achievement_title_en'=>$request->achievement_title_en,
        'achievement_text_en' =>$request->achievement_text_en,
        'achievement_text_ta'=>$request->achievement_text_ta,
        "achievement_image"=>$nfimage,
        "achievement_date"=>$newDate,
        "status"=>$request->status,
        "created_at"=>NOW(),
        "created_by"=>session('user_session')->id,
      ]);
      if($data){
        return redirect('/admin/awards#list')->with(array('status'=>'success','msg'=>"Awards and achievements are created Successfully!."));
      }else{
        return redirect()->back()->with(array('status'=>'danger','msg'=>"Something went wrong!."));
      }
        }else{
          return redirect('/admin/login');
        }

    }



    function update_awards(Request $request){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
        $id=$request->input('aw_id');
        $validate_data=$request->validate([
          'achievement_title_ta'=>'required|max:80|unique:ops_achievements,achievement_title_ta,'.$id,
          'achievement_title_en'=>'required|max:80|unique:ops_achievements,achievement_title_en,'.$id,
          'achievement_text_en'=>'required|max:240',
          'achievement_text_ta'=>'required|max:240',
          'status'=>'required',
          'achievement_image'=>'image|mimes:jpeg,png,jpg|max:1024',
          'achievement_date'=>'required',
      ],[
        'achievement_title_ta.required'=>'Title tamil is required',
        'achievement_title_en.required'=>'Title english is required',
        'achievement_text_en.required'=>'Details english is required',
        'achievement_text_ta.required'=>'Details tamil is required',
        'achievement_image.max'=>'Maximum file size is 1MB',
        'achievement_date.required'=>'Date is required',
        'achievement_title_ta.unique'=>'Title tamil is already exists!',
        'achievement_title_en.unique'=>'Title english is already exists!',
      ]);
      $newDate = date("Y-m-d", strtotime($request->input('achievement_date')));
      $old_img=$request->input('old_achievement_image');
      $image=$request->file('achievement_image');
      if(empty($image)){
        $img=$old_img;
      }else{
      $nfimage = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = storage_path('awards/');
      $image->move($destinationPath, $nfimage);
      $img=$nfimage;
      }

      $data = Awards::where('id',$id)->update([
        'achievement_title_ta' =>$request->achievement_title_ta,
        'achievement_title_en'=>$request->achievement_title_en,
        'achievement_text_en' =>$request->achievement_text_en,
        'achievement_text_ta'=>$request->achievement_text_ta,
        "achievement_image"=>$img,
        "achievement_date"=>$newDate,
        "status"=>$request->status,
        "updated_at"=>NOW(),
        "updated_by"=>session('user_session')->id,
      ]);
      if($data){
        return redirect('/admin/awards#list')->with(array('status'=>'success','msg'=>"Awards and achievements are updated Successfully!."));
      }else{
        return redirect()->back()->with(array('status'=>'danger','msg'=>"Something went wrong!."));
      }


      }else{
        return redirect('/admin/login');
      }
    }



    function party_state_list(){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
          $data=Partystatelist::orderBy('id', 'desc')->paginate(10);
          return view('admin.aboutops.party_state_list',compact('data'));
        }else{
          return redirect('/admin/login');
        }
    }

    function create_state_list(Request $request){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
        $validate_data=$request->validate([
          'state_name_ta'=>'required|unique:party_state_info|max:80',
          'state_name_en'=>'required|unique:party_state_info|max:80',
          'status'=>'required',
          'state_logo'=>'required|image|mimes:jpeg,png,jpg|max:1024',
      ],[
        'state_name_ta.required'=>'State name tamil is required',
        'state_name_en.required'=>'State name english is required',
        'state_logo.required'=>'Cover image is required',
        'state_logo.max'=>'Maximum file size is 1MB',
        'status.required'=>'Status  is required',
        'state_name_ta.unique'=>'State name tamil is already exists!',
        'state_name_en.unique'=>'State name english is already exists!',
      ]);
      $image = $request->file('state_logo');
      $nfimage = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = storage_path('state/');
      $image->move($destinationPath, $nfimage);

      $data = Partystatelist::create([
        'state_name_ta' =>$request->state_name_ta,
        'state_name_en'=>$request->state_name_en,
        "state_logo"=>$nfimage,
        "status"=>$request->status,
        "created_at"=>NOW(),
        "created_by"=>session('user_session')->id,
      ]);
      if($data){
        return redirect('/admin/party_state_list#list')->with(array('status'=>'success','msg'=>"Party state created Successfully!."));
      }else{
        return redirect()->back()->with(array('status'=>'danger','msg'=>"Something went wrong!."));
      }
        }else{
          return redirect('/admin/login');
        }
    }

    function update_state_list(Request $request){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
        $id=$request->input('st_id');
        $validate_data=$request->validate([
          'state_name_ta'=>'required|max:80|unique:party_state_info,state_name_ta,'.$id,
          'state_name_en'=>'required|max:80|unique:party_state_info,state_name_en,'.$id,
          'status'=>'required',
          'state_logo'=>'image|mimes:jpeg,png,jpg|max:1024',
      ],[
        'state_name_ta.required'=>'State name tamil is required',
        'state_name_en.required'=>'State name english is required',
        'state_logo.required'=>'Cover image is required',
        'state_logo.max'=>'Maximum file size is 1MB',
        'status.required'=>'Status  is required',
        'state_name_ta.unique'=>'State name tamil is already exists!',
        'state_name_en.unique'=>'State name english is already exists!',
      ]);
      $image = $request->file('state_logo');
      $old_img=$request->input('old_state_logo');
      if(empty($image)){
        $img=$old_img;
      }else{
      $nfimage = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = storage_path('state/');
      $image->move($destinationPath, $nfimage);
      $img=$nfimage;
      }


      $data = Partystatelist::where('id',$id)->update([
        'state_name_ta' =>$request->state_name_ta,
        'state_name_en'=>$request->state_name_en,
        "state_logo"=>$img,
        "status"=>$request->status,
        "updated_at"=>NOW(),
        "updated_by"=>session('user_session')->id,
      ]);
      if($data){
        return redirect('/admin/party_state_list#list')->with(array('status'=>'success','msg'=>"Party state created Successfully!."));
      }else{
        return redirect()->back()->with(array('status'=>'danger','msg'=>"Something went wrong!."));
      }
        }else{
          return redirect('/admin/login');
        }
    }


    function get_edit_state($nf_id){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
          $id = Crypt::decrypt($nf_id);
          $data=Partystatelist::find($id);
          return view('admin.aboutops.edit_state',compact('data'));
        }else{
          return redirect('/admin/login');
        }
    }


    function party_election_list(){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
          $data=Partyelectionlist::orderBy('id', 'desc')->paginate(10);
          $res=Partystatelist::where('status','Active')->get();
          return view('admin.aboutops.party_election_list',compact('data','res'));
        }else{
          return redirect('/admin/login');
        }
    }

    function get_edit_party_election($nf_id){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
          $id = Crypt::decrypt($nf_id);
          $data=Partyelectionlist::find($id);
          $res=Partystatelist::where('status','Active')->get();
          return view('admin.aboutops.edit_party_election',compact('data','res'));
        }else{
          return redirect('/admin/login');
        }
    }


    function create_party_election_list(Request $request){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
        $validate_data=$request->validate([
          'party_leader_ta'=>'required',
          'party_leader_en'=>'required',
          'status'=>'required',
          'seats_won'=>'required|digits_between:1,3',
          'election_type'=>'required',
          // 'election_year' => 'required|unique:party_election_info,election_year,NULL,id,election_type,' . $request->input('election_type'),
          'election_year'=>'required',
          'state_info_id'=>'required',
      ],[
        'party_leader_en.required'=>'State name tamil is required',
        'party_leader_ta.required'=>'State name english is required',
        'status.required'=>'Status  is required',
        'seats_won.digits_between'=>'Seats digit not more than 3 digits',

        'seats_won.required'=>'Enter the no seats won',
        'election_type.required'=>'Select the type',
        'election_year.required'=>'Select the election year',
        'state_info_id.required'=>'select the state ',

      ]);
      $data = Partyelectionlist::create([
        'party_leader_en' =>$request->party_leader_en,
        'party_leader_ta'=>$request->party_leader_ta,
        "election_year"=>$request->election_year,
        "state_info_id"=>$request->state_info_id,
        "election_type"=>$request->election_type,
        "seats_won"=>$request->seats_won,
        "status"=>$request->status,
        "created_at"=>NOW(),
        "created_by"=>session('user_session')->id,
      ]);
      if($data){
        return redirect('/admin/party_election_list#list')->with(array('status'=>'success','msg'=>"Party election list created Successfully!."));
      }else{
        return redirect()->back()->with(array('status'=>'danger','msg'=>"Something went wrong!."));
      }


        }else{
          return redirect('/admin/login');
        }
    }


    function update_party_election_list(Request $request){
      $role_type = session('user_session')->admin_role_type;
      if($role_type=='1'){
        $id=$request->input('el_id');
        $election_type=$request->input('election_type');
        $election_year=$request->input('election_year');

        $validate_data=$request->validate([
          'party_leader_ta'=>'required',
          'party_leader_en'=>'required',
          'status'=>'required',
          'seats_won'=>'required|digits_between:1,3',
          'election_type'=>'required',
          'election_year'=>'required',
          // 'election_year' => [
          //                   'required',
          //                    Rule::unique('party_election_info')->where(function ($query) use($election_type,$election_year) {
          //                      return $query->where('election_type', $election_type)->where('election_year', $election_year);
          //                    })->ignore($id)
          //               ],
          'state_info_id'=>'required',
      ],[
        'party_leader_en.required'=>'State name tamil is required',
        'party_leader_ta.required'=>'State name english is required',
        'status.required'=>'Status  is required',
        'seats_won.required'=>'Enter the no seats won',
        'seats_won.digits_between'=>'Seats digit not more than 3 digits',
        'election_type.required'=>'Select the type',
        'election_year.required'=>'Select the election year',
        'state_info_id.required'=>'select the state ',

      ]);
      $data = Partyelectionlist::where('id',$id)->update([
        'party_leader_en' =>$request->party_leader_en,
        'party_leader_ta'=>$request->party_leader_ta,
        "election_year"=>$request->election_year,
        "state_info_id"=>$request->state_info_id,
        "election_type"=>$request->election_type,
        "seats_won"=>$request->seats_won,
        "status"=>$request->status,
        "created_at"=>NOW(),
        "created_by"=>session('user_session')->id,
      ]);
      if($data){
        return redirect('/admin/party_election_list#list')->with(array('status'=>'success','msg'=>"Party election list updated Successfully!."));
      }else{
        return redirect()->back()->with(array('status'=>'danger','msg'=>"Something went wrong!."));
      }


        }else{
          return redirect('/admin/login');
        }
    }



}
