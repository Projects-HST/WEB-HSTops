<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apiios extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	function __construct()
    {
        parent::__construct();
		$this->load->model("apiiosmodel");
		$this->load->helper("url");
    }

	public function checkMethod()
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
		{
			$res = array();
			$res["scode"] = 203;
			$res["message"] = "Request Method not supported";

			echo json_encode($res);
			return FALSE;
		}
		return TRUE;
	}

//-----------------------------------------------//

	public function version_check()
	{
		$_POST = json_decode(file_get_contents("php://input"), TRUE);
		
		if(!$this->checkMethod())
		{
			return FALSE;
		}
		
		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Generate OTP";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$version_code = '';
		$version_code = $this->input->post("version_code");
		$data['result']=$this->apiiosmodel->Version_check($version_code);
		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function intro_video()
	{
		$_POST = json_decode(file_get_contents("php://input"), TRUE);
		
		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Generate OTP";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}
		
		$version_code = '';
		$version_code = $this->input->post("version_code");
		$data['result']=$this->apiiosmodel->Intro_video($version_code);
		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function generate_otp()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Generate OTP";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}


		$mobile_number = '';
		$mobile_number = $this->input->post("mobile_number");

		$data['result']=$this->apiiosmodel->Generate_otp($mobile_number);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//


//-----------------------------------------------//

	public function resend_otp()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Resend OTP";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}


		$mobile_number = '';
		$mobile_number = $this->input->post("mobile_number");

		$data['result']=$this->apiiosmodel->Resend_otp($mobile_number);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function login()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Login";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}


		$mobile_number = '';
		$otp = '';
		$device_token = '';
		$device_type ='';

		$mobile_number = $this->input->post("mobile_number");
		$otp = $this->input->post("otp");
		$device_token = $this->input->post("device_token");
		$device_type = $this->input->post("device_type");

		$data['result']=$this->apiiosmodel->Login($mobile_number,$otp,$device_token,$device_type);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//


//-----------------------------------------------//

	public function profile_update()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Profile update";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';
		$full_name = '';
		$phone_number = '';
		$email_id = '';
		$gender ='';
		$dob ='';
		
		$user_id = $this->input->post("user_id");
		$full_name = $this->input->post("full_name");
		$phone_number = $this->input->post("phone_number");
		$email_id = $this->input->post("email_id");
		$gender = $this->input->post("gender");
		$dob = $this->input->post("dob");

		$data['result']=$this->apiiosmodel->Profile_update($user_id,$full_name,$phone_number,$email_id,$gender,$dob);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

    public function profilepic_update()
	{
	  	$_POST = json_decode(file_get_contents("php://input"), TRUE);

		$user_id = $this->uri->segment(3);
		$profile = $_FILES["user_pic"]["name"];
		$temp = pathinfo($profile, PATHINFO_EXTENSION);
		$userFileName = round(microtime(true)) . '.' . $temp;
		$uploadPicdir = 'assets/users/';
		$profilepic = $uploadPicdir.$userFileName;
		move_uploaded_file($_FILES['user_pic']['tmp_name'], $profilepic);

		$data['result']=$this->apiiosmodel->Profilepic_update($user_id,$userFileName);
		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//


//-----------------------------------------------//

	public function profile_details()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Login";
			$res["scode"] = 204;
			$res["message"] = "Profile details";

			echo json_encode($res);
			return;
		}

		$user_id = '';	
		$user_id = $this->input->post("user_id");

		$data['result']=$this->apiiosmodel->Profile_details($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//



//-----------------------------------------------//

	public function list_language()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "List language";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';	
		$user_id = $this->input->post("user_id");

		$data['result']=$this->apiiosmodel->List_language($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//


//-----------------------------------------------//

	public function language_update()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Language update";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';
		$language_id = '';
		
		$user_id = $this->input->post("user_id");
		$language_id = $this->input->post("language_id");

		$data['result']=$this->apiiosmodel->Language_update($user_id,$language_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function subscription_update()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Subscription update";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';
		$status = '';
		
		$user_id = $this->input->post("user_id");
		$status = $this->input->post("status");

		$data['result']=$this->apiiosmodel->Subscription_update($user_id,$status);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function notification_update()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Notification update";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';
		$status = '';
		
		$user_id = $this->input->post("user_id");
		$status = $this->input->post("status");

		$data['result']=$this->apiiosmodel->Notification_update($user_id,$status);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function newsfeeds_category()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Newsfeed Categories";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';
		$user_id = $this->input->post("user_id");

		$data['result']=$this->apiiosmodel->Newsfeeds_category($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

/* //-----------------------------------------------//

	public function newsfeed_stories()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Newsfeeds Stories";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$nf_category_id = '';
		$nf_category_id = $this->input->post("nf_category_id");

		$data['result']=$this->apiiosmodel->Newsfeed_stories($nf_category_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------// */

//-----------------------------------------------//

	public function newsfeeds_categoryid()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Newsfeeds by categoryid";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$offset = '';
		$rowcount = '';
		$nf_category_id = '';
		$user_id = '';
		
		$user_id = $this->input->post("user_id");
		$nf_category_id = $this->input->post("nf_category_id");
		$offset = $this->input->post("offset");
		$rowcount = $this->input->post("rowcount");

		$data['result']=$this->apiiosmodel->Newsfeeds_categoryid($user_id,$nf_category_id,$offset,$rowcount);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//


//-----------------------------------------------//

	public function newsfeed_details()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Newsfeed details";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$newsfeed_id = '';
		$user_id = '';
		
		$user_id = $this->input->post("user_id");
		$newsfeed_id = $this->input->post("newsfeed_id");

		$data['result']=$this->apiiosmodel->Newsfeed_details($user_id,$newsfeed_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function update_share_count()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Share Count";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$newsfeed_id = '';
	
		$newsfeed_id = $this->input->post("newsfeed_id");

		$data['result']=$this->apiiosmodel->Update_share_count($newsfeed_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//


//-----------------------------------------------//

	public function add_like_count()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Like Count";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$newsfeed_id = '';
		$user_id = '';
	
		$user_id = $this->input->post("user_id");
		$newsfeed_id = $this->input->post("newsfeed_id");

		$data['result']=$this->apiiosmodel->Add_like_count($user_id,$newsfeed_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//


//-----------------------------------------------//

	public function update_like_count()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Like Count";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$newsfeed_id = '';
		$user_id = '';
	
		$user_id = $this->input->post("user_id");
		$newsfeed_id = $this->input->post("newsfeed_id");

		$data['result']=$this->apiiosmodel->Update_like_count($user_id,$newsfeed_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//


//-----------------------------------------------//

	public function comments_history()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Enquiry details";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$newsfeed_id = '';
		$user_id = '';

		$newsfeed_id = $this->input->post("newsfeed_id");
		$user_id = $this->input->post("user_id");
		
		$data['result']=$this->apiiosmodel->Comments_history($user_id,$newsfeed_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function newsfeed_search()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Newsfeed search";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';
		$search_text = '';
		$offset = '';
		$rowcount = '';
		
		$user_id = $this->input->post("user_id");
		$search_text = $this->input->post("search_text");
		$offset = $this->input->post("offset");
		$rowcount = $this->input->post("rowcount");

		$data['result']=$this->apiiosmodel->Newsfeed_search($user_id,$search_text,$offset,$rowcount);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//


//-----------------------------------------------//

	public function gallery()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Gallery";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';	
		$user_id = $this->input->post("user_id");


		$data['result']=$this->apiiosmodel->Gallery($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function images_all()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Gallery Images";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';	
		$user_id = $this->input->post("user_id");

		$data['result']=$this->apiiosmodel->Images_all($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//


//-----------------------------------------------//

	public function videos_all()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Gallery Videos";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';	
		$user_id = $this->input->post("user_id");


		$data['result']=$this->apiiosmodel->Videos_all($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function live_events()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "OPS Social media";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';
		$user_id = $this->input->post("user_id");
		
		$data['result']=$this->apiiosmodel->Live_events($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//


//-----------------------------------------------//

	public function socialmedia()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "OPS Social media";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';

		$user_id = $this->input->post("user_id");
		
		$data['result']=$this->apiiosmodel->Socialmedia($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//






























//-----------------------------------------------//

	public function spv_personal()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "SPV Personal";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';

		$user_id = $this->input->post("user_id");
		
		$data['result']=$this->apiiosmodel->Spv_personal($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function spv_political()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "SPV Political";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';

		$user_id = $this->input->post("user_id");
		
		$data['result']=$this->apiiosmodel->Spv_political($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function spv_positionheld()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "SPV Position held";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';

		$user_id = $this->input->post("user_id");
		
		$data['result']=$this->apiiosmodel->Spv_positionheld($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function spv_awards()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "SPV awards";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';

		$user_id = $this->input->post("user_id");
		
		$data['result']=$this->apiiosmodel->Spv_awards($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function spv_notable()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "SPV notable";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';

		$user_id = $this->input->post("user_id");
		
		$data['result']=$this->apiiosmodel->Spv_notable($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function spv_namakkaga()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "SPV namakkaga";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';

		$user_id = $this->input->post("user_id");
		
		$data['result']=$this->apiiosmodel->Spv_namakkaga($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function spv_ias_academy()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "SPV IAS academy";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';

		$user_id = $this->input->post("user_id");
		
		$data['result']=$this->apiiosmodel->Spv_ias_academy($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//



//-----------------------------------------------//

	public function about_party()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "About Party";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';

		$user_id = $this->input->post("user_id");
		
		$data['result']=$this->apiiosmodel->About_party($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

//-----------------------------------------------//

	public function party_elections()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		if($_POST == FALSE)
		{
			$res = array();
			$res["opn"] = "Party Election";
			$res["scode"] = 204;
			$res["message"] = "Input error";

			echo json_encode($res);
			return;
		}

		$user_id = '';

		$user_id = $this->input->post("user_id");
		
		$data['result']=$this->apiiosmodel->Party_elections($user_id);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

}
