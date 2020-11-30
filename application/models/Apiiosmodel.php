<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');class Apiiosmodel extends CI_Model {    function __construct()    {        parent::__construct();    }//#################### Email ####################//	function sendMail($to,$subject,$email_message)	{		// Set content-type header for sending HTML email		$headers = "MIME-Version: 1.0" . "\r\n";		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";		// Additional headers		$headers .= 'From: ENSYFI<admin@spv.com>' . "\r\n";		mail($to,$subject,$email_message,$headers);	}//#################### Email End ####################////#################### SMS ####################//	function sendSMS($user_mobile,$mobile_message)	{        //Your authentication key          $authKey = "191431AStibz285a4f14b4";          //Multiple mobiles numbers separated by comma          $mobile = "$user_mobile";          //Sender ID,While using route4 sender id should be 6 characters long.          $senderId = "OPSAPP";          //Your message to send, Add URL encoding here.          $message = $mobile_message;          //Define route          $route = "transactional";          //Prepare you post parameters          $postData = array(              'authkey' => $authKey,              'mobiles' => $mobile,              'message' => $message,              'sender' => $senderId,              'route' => $route          );          //API URL          $url="https://control.msg91.com/api/sendhttp.php";          // init the resource          $ch = curl_init();          curl_setopt_array($ch, array(              CURLOPT_URL => $url,              CURLOPT_RETURNTRANSFER => true,              CURLOPT_POST => true,              CURLOPT_POSTFIELDS => $postData              //,CURLOPT_FOLLOWLOCATION => true          ));          //Ignore SSL certificate verification          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);          //get response          $output = curl_exec($ch);          //Print error if any          if(curl_errno($ch))          {              echo 'error:' . curl_error($ch);          }          curl_close($ch);	}//#################### SMS End ####################////#################### Notification ####################//	function sendNotification($gcm_key,$Title,$Message,$mobiletype)	{		if ($mobiletype =='1'){		    require_once 'assets/notification/Firebase.php';            require_once 'assets/notification/Push.php';            $device_token = explode(",", $gcm_key);            $push = null;//        //first check if the push has an image with it		    $push = new Push(					$Title,					$Message,					'http://heylaapp.com/assets/notification/images/events.jpg'				);// 			//if the push don't have an image give null in place of image 			// $push = new Push( 			// 		'HEYLA', 			// 		'Hi Testing from maran', 			// 		null 			// 	);    		//getting the push from push object    		$mPushNotification = $push->getPush();    		//creating firebase class object    		$firebase = new Firebase();    	foreach($device_token as $token) {    		 $firebase->send(array($token),$mPushNotification);    	}		} else {			$device_token = explode(",", $gcm_key);			$passphrase = 'hs123';		    $loction ='assets/notification/heylaapp.pem';			$ctx = stream_context_create();			stream_context_set_option($ctx, 'ssl', 'local_cert', $loction);			stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);			// Open a connection to the APNS server			$fp = stream_socket_client('ssl://gateway.sandbox.push.apple.com:2195', $err, $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);			if (!$fp)				exit("Failed to connect: $err $errstr" . PHP_EOL);			$body['aps'] = array(				'alert' => array(					'body' => $Message,					'action-loc-key' => 'Heyla App',				),				'badge' => 2,				'sound' => 'assets/notification/oven.caf',				);			$payload = json_encode($body);			foreach($device_token as $token) {				// Build the binary notification    			$msg = chr(0) . pack("n", 32) . pack("H*", str_replace(" ", "", $token)) . pack("n", strlen($payload)) . $payload;        		$result = fwrite($fp, $msg, strlen($msg));			}				fclose($fp);		}	}//#################### Notification End ####################//	public function Version_check($version_code)	{	  if($version_code >= 1){		  $response = array("status" => "success","version_code"=>$version_code);	  }else{		$response = array("status" => "error","version_code"=>$version_code);	  }	  return $response;	}	//#################### Intro Video ####################//	public function Intro_video($version_code)	{		$vQuery = "SELECT * FROM intro_video WHERE status='Active'";		$resultset = $this->db->query($vQuery);		$vresult = $resultset->result();		if($resultset->num_rows()>0)		{					$response = array("status" => "Success", "msg" => "Video Details", "video_result" => $vresult);		} else {			$response = array("status" => "Error", "msg" => "Sorry!.. No Videos found.");		}				return $response;	}//#################### Resend otp End ####################////#################### Generate otp ####################//	public function Generate_otp($mobile_number)	{		$digits = 4;		$OTP = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);					$sql = "SELECT * FROM user_master WHERE phone_number='$mobile_number'";		$user_result = $this->db->query($sql);		if($user_result->num_rows()>0)		{			$update_sql = "UPDATE user_master SET otp = '$OTP' WHERE phone_number  ='$mobile_number'";    		$update_otp = $this->db->query($update_sql);			$mobile_message = 'Dear user, Use the OTP '.$OTP.' to login.- Team OPSAPP';			$this->sendSMS($mobile_number,$mobile_message);		} else {			$sQuery = "INSERT INTO user_master (phone_number,otp,language_id,subscription,notification,status,created_at) VALUES ('".$mobile_number. "','".$OTP. "','1','1','1','Active',now())";			$insert_user = $this->db->query($sQuery);			$user_id = $this->db->insert_id();			$mobile_message = 'Dear user, Use the OTP '.$OTP.' to login.- Team OPSAPP';			$this->sendSMS($mobile_number,$mobile_message);		}				$response = array("status" => "Success", "msg" => "OTP Generated", "mobile_number" => $mobile_number,"otp" => $OTP);		return $response;	}//#################### Generate otp End ####################////#################### Resend otp ####################//	public function Resend_otp($mobile_number)	{		$userQuery = "SELECT * FROM user_master WHERE phone_number='$mobile_number'";		$user_result = $this->db->query($userQuery);		if($user_result->num_rows()>0)		{			foreach ($user_result->result() as $rows)			{				$OTP = $rows->otp;			}						$mobile_message = 'Dear user, Use the OTP '.$OTP.' to login.- Team OPSAPP';			$this->sendSMS($mobile_number,$mobile_message);						$response = array("status" => "Success", "msg" => "Resend OTP", "mobile_number" => $mobile_number,"otp" => $OTP);		} else {			$response = array("status" => "Error", "msg" => "Mobile number Error");		}				return $response;	}//#################### Resend otp End ####################////#################### Login ####################//	public function Login($mobile_number,$otp,$device_token,$device_type)	{				$userQuery = "SELECT * FROM user_master WHERE phone_number='$mobile_number' AND otp = $otp AND status = 'Active'";		$user_result = $this->db->query($userQuery);		if($user_result->num_rows()>0)		{			foreach ($user_result->result() as $rows)			{				$user_id = $rows->id;				$full_name  = $rows->full_name ;				$phone_number = $rows->phone_number;				$email_id = $rows->email_id;				$gender = $rows->gender;				$dob = $rows->dob;				$profile_pic = $rows->profile_pic;				$language_id = $rows->language_id;				$subscription = $rows->subscription;				$notification = $rows->notification;				$status = $rows->status;			}			if ($profile_pic != ''){			    $picture_url = base_url().'assets/users/'.$profile_pic;			}else {				$picture_url = '';			}						$userData  = array(							"user_id" => $user_id,							"full_name" => $full_name,							"phone_number" => $phone_number,							"language_id" => $language_id,							"profile_pic" => $picture_url						);							$gcmQuery = "SELECT * FROM notification_master WHERE device_token like '%" .$device_token. "%' LIMIT 1";			$gcm_result = $this->db->query($gcmQuery);			if($gcm_result->num_rows()==0)			{				$sQuery = "INSERT INTO notification_master (user_master_id,device_type,device_token,created_at) VALUES ('". $user_id . "','". $device_type . "','". $device_token . "',now())";				$update_gcm = $this->db->query($sQuery);			}							$response = array("status" => "Success", "msg" => "Login Successfully", "userData" => $userData);		} else {			$response = array("status" => "Error", "msg" => "Account Deactivated");		}		return $response;	}//#################### Login End ####################////#################### Profile update ####################//	public function Profile_update($user_id,$full_name,$phone_number,$email_id,$gender,$dob)	{		$update_sql= "UPDATE user_master SET full_name ='$full_name',phone_number ='$phone_number',email_id ='$email_id',gender ='$gender',dob ='$dob',updated_by='$user_id',updated_at=now() WHERE id='$user_id'";		$update_result = $this->db->query($update_sql);				$response = array("status" => "Success", "msg" => "Profile Updated");		return $response;	}//#################### Profile_update End ####################////#################### Profile Pic Update ####################//	public function Profilepic_update($user_id,$userFileName)	{            $update_sql= "UPDATE user_master SET profile_pic='$userFileName' WHERE id='$user_id'";			$update_result = $this->db->query($update_sql);			$picture_url = base_url().'assets/users/'.$userFileName;			$response = array("status" => "success", "msg" => "Profile Picture Updated","picture_url" =>$picture_url);			return $response;	}//#################### Profile Pic Update End ####################////#################### Profile details ####################//	function Profile_details($user_id)	{		$query = "SELECT * FROM `user_master` WHERE id = '$user_id'";		$resultset = $this->db->query($query);		$user_result = $resultset->result();		if($resultset->num_rows()>0)			{				$response = array("status" => "Success", "msg" => "User Details", "user_details" =>$user_result);			} else {				$response = array("status" => "Error", "msg" => "No records found");			}		return $response;	}//#################### Profile details end ####################////#################### List language ####################//	function List_language($user_id)	{		$query = "SELECT * FROM `language_type_master` WHERE status = 'Active'";		$resultset = $this->db->query($query);		$lang_result = $resultset->result();		if($resultset->num_rows()>0)			{				$response = array("status" => "Success", "msg" => "Language Details", "lang_details" =>$lang_result);			} else {				$response = array("status" => "Error", "msg" => "No records found");			}		return $response;	}//#################### List language  ####################////#################### Language update ####################//	public function Language_update($user_id,$language_id)	{		$update_sql= "UPDATE user_master SET language_id ='$language_id' WHERE id='$user_id'";		$update_result = $this->db->query($update_sql);				$response = array("status" => "Success", "msg" => "Language Updated","language_id" =>$language_id);		return $response;	}//#################### Language update End ####################////#################### Subscription update ####################//	public function Subscription_update($user_id,$status)	{		$update_sql= "UPDATE user_master SET subscription ='$status' WHERE id='$user_id'";		$update_result = $this->db->query($update_sql);				$response = array("status" => "Success", "msg" => "Subscription Updated");		return $response;	}//#################### Subscription update End ####################////#################### Notification update ####################//	public function Notification_update($user_id,$status)	{		$update_sql= "UPDATE user_master SET notification ='$status' WHERE id='$user_id'";		$update_result = $this->db->query($update_sql);				$response = array("status" => "Success", "msg" => "Notification Updated");		return $response;	}//#################### Notification update End ####################////#################### News Feed Categories ####################//	public function Newsfeeds_category($user_id)	{			$query = "SELECT * FROM news_category WHERE status = 'Active'";			$resultset = $this->db->query($query);			$category_result = $resultset->result();			if($resultset->num_rows()>0) {					$response = array("status" => "Success", "msg" => "List All Category", "category_result" =>$category_result);			} else {					$response = array("status" => "Error", "msg" => "No records found");			}				return $response;	}//#################### All News Feed Categories End ####################///* //#################### News feed stories ####################//	public function Newsfeed_stories($nf_category_id)	{			$query = "SELECT * FROM news_feed WHERE nf_category_id ='$nf_category_id' AND expiry_at > NOW() AND status = 'Active' ORDER BY id DESC";			$resultset = $this->db->query($query);			$news_result = $resultset->result();			if($resultset->num_rows()>0) {					$response = array("status" => "Success", "msg" => "List Stories", "story_result" =>$news_result);			} else {					$response = array("status" => "Error", "msg" => "No records found");			}		return $response;	}//#################### News feed stories End ####################// *///#################### News feed by category ####################//	public function Newsfeeds_categoryid($user_id,$nf_category_id,$offset,$rowcount)	{			$assets_url = $this->config->item("assets_url")."newsfeed/";					$news_count = "SELECT * FROM news_feed WHERE nf_category_id ='$nf_category_id' AND status = 'Active'";			$news_count_res = $this->db->query($news_count);			$news_count = $news_count_res->num_rows();								$query = "SELECT * FROM news_feed WHERE nf_category_id ='$nf_category_id' AND status = 'Active' ORDER BY id DESC LIMIT $offset, $rowcount";			$resultset = $this->db->query($query);			if($resultset->num_rows()>0) {				foreach ($resultset->result() as $rows)				{					$newsfeed_id = $rows->id;					$nf_cover_image = $assets_url.$rows->nf_cover_image;											$query1 = "SELECT * FROM nf_likes_history WHERE user_id ='$user_id' AND nf_id = '$newsfeed_id'";						$resultset1 = $this->db->query($query1);						if($resultset1->num_rows()>0) {							$l_status = 'Y';						}else {							$l_status = 'N';						}						 					$news_result[] = array(						"newsfeed_id" => $rows->id,						"nf_profile_type" => $rows->nf_profile_type,						"title_ta" => $rows->title_ta,						"title_en" => $rows->title_en,						"description_ta" => $rows->description_ta,						"description_en" => $rows->description_en,						"news_date" => $rows->news_date,						"nf_cover_image" => $nf_cover_image,						"nf_video_token_id" => $rows->nf_video_token_id,						"gallery_status" => $rows->gallery_status,						"view_count" => $rows->view_count,						"likes_count" => $rows->likes_count,						"share_count" => $rows->share_count,						"comments_count" => $rows->comments_count,						"status"  => $rows->status,						"like_status" => $l_status					);				}					$response = array("status" => "Success", "msg" => "List News by category", "nf_count" =>$news_count, "nf_result" =>$news_result);			} else {					$response = array("status" => "Error", "msg" => "No records found");			}				return $response;	}//#################### News feed by category End ####################////#################### News Details ####################//	public function Newsfeed_details($user_id,$newsfeed_id)	{			$assets_url = $this->config->item("assets_url")."newsfeed/";			$assets_gallery_url = $this->config->item("assets_url")."gallery/";					$update_sql = "UPDATE news_feed SET view_count = view_count+1 WHERE id  ='$newsfeed_id'";    		$update_view_count = $this->db->query($update_sql);						$query = "SELECT * FROM news_feed WHERE id = $newsfeed_id";			$resultset = $this->db->query($query);			if($resultset->num_rows()>0) {				foreach ($resultset->result() as $rows)				{					$newsfeed_id = $rows->id;					$nf_cover_image = $assets_url.$rows->nf_cover_image;											$query1 = "SELECT * FROM nf_likes_history WHERE user_id ='$user_id' AND nf_id = '$newsfeed_id'";						$resultset1 = $this->db->query($query1);						if($resultset1->num_rows()>0) {							$l_status = 'Y';						}else {							$l_status = 'N';						}						 					$news_result[] = array(						"newsfeed_id" => $rows->id,						"nf_profile_type" => $rows->nf_profile_type,						"title_ta" => $rows->title_ta,						"title_en" => $rows->title_en,						"description_ta" => $rows->description_ta,						"description_en" => $rows->description_en,						"news_date" => $rows->news_date,						"nf_cover_image" => $nf_cover_image,						"nf_video_token_id" => $rows->nf_video_token_id,						"gallery_status" => $rows->gallery_status,						"view_count" => $rows->view_count,						"likes_count" => $rows->likes_count,						"share_count" => $rows->share_count,						"comments_count" => $rows->comments_count,						"status"  => $rows->status,						"like_status" => $l_status					);				}			}			$img_query = "SELECT * FROM nf_image_gallery WHERE nf_id = '$newsfeed_id' ";			$img_res = $this->db->query($img_query);			$image_count = $img_res->num_rows();						if($img_res->num_rows()>0) {				foreach ($img_res->result() as $rows)				{					$gallery_url = $assets_gallery_url.$rows->nf_image;										$image_result[] = array(						"gallery_id" => $rows->id,						"gallery_url" => $gallery_url					);				}			}else {				$image_result = array();			}						$response = array("status" => "Success", "msg" => "News Details", "news_result" =>$news_result, "image_count" =>$image_count, "image_result" =>$image_result);							return $response;	}//#################### News Details End ####################////#################### Share Details ####################//	public function Update_share_count($newsfeed_id)	{			$update_sql = "UPDATE news_feed SET share_count = share_count+1 WHERE id  ='$newsfeed_id'";    		$update_share_count = $this->db->query($update_sql);			$response = array("status" => "Success", "msg" => "Share count updated");		return $response;	}//#################### Share Details End ####################////#################### Likes Details ####################//	public function Add_like_count($user_id,$newsfeed_id)	{		$sQuery = "INSERT INTO nf_likes_history(user_id,nf_id,created_at) VALUES ('". $user_id . "','". $newsfeed_id . "',now())";		$ins_like_count = $this->db->query($sQuery);				$update_sql = "UPDATE news_feed SET likes_count = likes_count+1 WHERE id  ='$newsfeed_id'";		$update_like_count = $this->db->query($update_sql);				$response = array("status" => "Success", "msg" => "Added");		return $response;	}//#################### Likes Details End ####################////#################### Likes Details ####################//	public function Update_like_count($user_id,$newsfeed_id)	{		$sQuery = "DELETE FROM nf_likes_history WHERE user_id = '". $user_id . "' AND nf_id = '". $newsfeed_id . "'";		$ins_like_count = $this->db->query($sQuery);				$update_sql = "UPDATE news_feed SET likes_count = likes_count-1 WHERE id  ='$newsfeed_id'";		$update_like_count = $this->db->query($update_sql);				$response = array("status" => "Success", "msg" => "Updated");		return $response;	}//#################### Likes Details End ####################////#################### Comments history ####################//	public function Comments_history($user_id,$newsfeed_id)	{		$Query = "SELECT A.id,A.comments,A.likes_count,A.created_at,B.full_name,B.profile_pic FROM nf_comments A, user_master B WHERE A.user_id = B.id AND A.nf_id ='$newsfeed_id' ";		$comment_result = $this->db->query($Query);		$total_comments = $comment_result->num_rows();		if($comment_result->num_rows()>0)		{			foreach ($comment_result->result() as $rows)			{				$comment_id = $rows->id;				$comments  = $rows->comments ;				$likes_count = $rows->likes_count;				$created_at = $rows->created_at;				$full_name = $rows->full_name;				$profile_pic = base_url().'assets/user/'.$rows->profile_pic;				$query1 = "SELECT * FROM nf_comments_like_history WHERE user_id ='$user_id' AND nf_commments_id = '$comment_id'";				$resultset1 = $this->db->query($query1);				if($resultset1->num_rows()>0) {					$l_status = 'Y';				}else {					$l_status = 'N';				}										$commentData[]  = array(						"comment_id" => $comment_id,						"comments" => $comments,						"likes_count" => $likes_count,												"created_at" => $created_at,						"created_at" => $created_at,						"full_name" => $full_name,						"profile_pic" => $profile_pic,						"like_status" => $l_status				);			}			$response = array("status" => "Success", "msg" => "Comments", "comments_count" =>$total_comments, "comments_result" =>$commentData);		} else {			$response = array("status" => "Error", "msg" => "No Records Found.",);		}										return $response;	}//#################### Comments history End ####################////#################### Newsfeed search ####################//	public function Newsfeed_search($user_id,$search_text,$offset,$rowcount)	{			$assets_url = $this->config->item("assets_url")."newsfeed/";					$news_count = "SELECT * FROM news_feed WHERE title_ta LIKE '%$search_text%' OR title_en LIKE '%$search_text%' AND status = 'Active'";			$news_count_res = $this->db->query($news_count);			$news_count = $news_count_res->num_rows();								$query = "SELECT * FROM news_feed WHERE title_ta LIKE '%$search_text%' OR title_en LIKE '%$search_text%' AND status = 'Active' ORDER BY id DESC LIMIT $offset, $rowcount";			$resultset = $this->db->query($query);			if($resultset->num_rows()>0) {				foreach ($resultset->result() as $rows)				{					$newsfeed_id = $rows->id;					$nf_cover_image = $assets_url.$rows->nf_cover_image;											$query1 = "SELECT * FROM nf_likes_history WHERE user_id ='$user_id' AND nf_id = '$newsfeed_id'";						$resultset1 = $this->db->query($query1);						if($resultset1->num_rows()>0) {							$l_status = 'Y';						}else {							$l_status = 'N';						}					$news_result[] = array(						"newsfeed_id" => $rows->id,						"nf_profile_type" => $rows->nf_profile_type,						"title_ta" => $rows->title_ta,						"title_en" => $rows->title_en,						"description_ta" => $rows->description_ta,						"description_en" => $rows->description_en,						"news_date" => $rows->news_date,						"nf_cover_image" => $nf_cover_image,						"nf_video_token_id" => $rows->nf_video_token_id,						"gallery_status" => $rows->gallery_status,						"view_count" => $rows->view_count,						"likes_count" => $rows->likes_count,						"share_count" => $rows->share_count,						"comments_count" => $rows->comments_count,						"status"  => $rows->status,						"like_status" => $l_status					);				}					$response = array("status" => "Success", "msg" => "Search News feed", "nf_count" =>$news_count, "nf_result" =>$news_result);			} else {					$response = array("status" => "Error", "msg" => "No records found");			}		return $response;	}//#################### Newsfeed search end ####################////#################### Gallery ####################//	public function Gallery($user_id)	{			$assets_url = $this->config->item("assets_url")."newsfeed/";							$query = "SELECT * FROM news_feed WHERE nf_profile_type = 'I' AND gallery_status ='1' AND status = 'Active' ORDER BY id DESC LIMIT 4";			$resultset = $this->db->query($query);			if($resultset->num_rows()>0) {				foreach ($resultset->result() as $rows)				{					$newsfeed_id = $rows->id;					$nf_cover_image = $assets_url.$rows->nf_cover_image;											$query1 = "SELECT * FROM nf_likes_history WHERE user_id ='$user_id' AND nf_id = '$newsfeed_id'";						$resultset1 = $this->db->query($query1);						if($resultset1->num_rows()>0) {							$l_status = 'Y';						}else {							$l_status = 'N';						}					$image_result[] = array(						"newsfeed_id" => $rows->id,						"nf_profile_type" => $rows->nf_profile_type,						"title_ta" => $rows->title_ta,						"title_en" => $rows->title_en,						"description_ta" => $rows->description_ta,						"description_en" => $rows->description_en,						"news_date" => $rows->news_date,						"nf_cover_image" => $nf_cover_image,						"nf_video_token_id" => $rows->nf_video_token_id,						"gallery_status" => $rows->gallery_status,						"view_count" => $rows->view_count,						"likes_count" => $rows->likes_count,						"share_count" => $rows->share_count,						"comments_count" => $rows->comments_count,						"status"  => $rows->status,						"like_status" => $l_status					);				}			} else {				$image_result = array();			}								$query = "SELECT * FROM news_feed WHERE nf_profile_type = 'V' AND status = 'Active' ORDER BY id DESC LIMIT 4";				$resultset = $this->db->query($query);				if($resultset->num_rows()>0) {				foreach ($resultset->result() as $rows)				{					$newsfeed_id = $rows->id;					$nf_cover_image = $assets_url.$rows->nf_cover_image;											$query1 = "SELECT * FROM nf_likes_history WHERE user_id ='$user_id' AND nf_id = '$newsfeed_id'";						$resultset1 = $this->db->query($query1);						if($resultset1->num_rows()>0) {							$l_status = 'Y';						}else {							$l_status = 'N';						}					$video_result[] = array(						"newsfeed_id" => $rows->id,						"nf_profile_type" => $rows->nf_profile_type,						"title_ta" => $rows->title_ta,						"title_en" => $rows->title_en,						"description_ta" => $rows->description_ta,						"description_en" => $rows->description_en,						"news_date" => $rows->news_date,						"nf_cover_image" => $nf_cover_image,						"nf_video_token_id" => $rows->nf_video_token_id,						"gallery_status" => $rows->gallery_status,						"view_count" => $rows->view_count,						"likes_count" => $rows->likes_count,						"share_count" => $rows->share_count,						"comments_count" => $rows->comments_count,						"status"  => $rows->status,						"like_status" => $l_status					);				}			}			else {				$video_result = array();			}			$response = array("status" => "Success", "msg" => "Gallery details", "image_result" =>$image_result, "video_result" =>$video_result);					return $response;	}	//#################### Gallery end ####################////#################### Images all ####################//	public function Images_all($user_id)	{			$assets_url = $this->config->item("assets_url")."newsfeed/";								$query = "SELECT * FROM news_feed WHERE nf_profile_type = 'I' AND gallery_status ='1' AND status = 'Active' ORDER BY id DESC";			$resultset = $this->db->query($query);			if($resultset->num_rows()>0) {				foreach ($resultset->result() as $rows)				{					$newsfeed_id = $rows->id;					$nf_cover_image = $assets_url.$rows->nf_cover_image;											$query1 = "SELECT * FROM nf_likes_history WHERE user_id ='$user_id' AND nf_id = '$newsfeed_id'";						$resultset1 = $this->db->query($query1);						if($resultset1->num_rows()>0) {							$l_status = 'Y';						}else {							$l_status = 'N';						}					$image_result[] = array(						"newsfeed_id" => $rows->id,						"nf_profile_type" => $rows->nf_profile_type,						"title_ta" => $rows->title_ta,						"title_en" => $rows->title_en,						"description_ta" => $rows->description_ta,						"description_en" => $rows->description_en,						"news_date" => $rows->news_date,						"nf_cover_image" => $nf_cover_image,						"nf_video_token_id" => $rows->nf_video_token_id,						"gallery_status" => $rows->gallery_status,						"view_count" => $rows->view_count,						"likes_count" => $rows->likes_count,						"share_count" => $rows->share_count,						"comments_count" => $rows->comments_count,						"status"  => $rows->status,						"like_status" => $l_status					);				}				$response = array("status" => "Success", "msg" => "Image details", "image_result" =>$image_result);			} else {				$response = array("status" => "Error", "msg" => "No records found");			}					return $response;	}	//#################### Images all end ####################////#################### Videos all ####################//	public function Videos_all($user_id)	{			$assets_url = $this->config->item("assets_url")."newsfeed/";							$query = "SELECT * FROM news_feed WHERE nf_profile_type = 'V' AND status = 'Active' ORDER BY id DESC";			$resultset = $this->db->query($query);			if($resultset->num_rows()>0) {				foreach ($resultset->result() as $rows)				{					$newsfeed_id = $rows->id;					$nf_cover_image = $assets_url.$rows->nf_cover_image;											$query1 = "SELECT * FROM nf_likes_history WHERE user_id ='$user_id' AND nf_id = '$newsfeed_id'";						$resultset1 = $this->db->query($query1);						if($resultset1->num_rows()>0) {							$l_status = 'Y';						}else {							$l_status = 'N';						}					$video_result[] = array(						"newsfeed_id" => $rows->id,						"nf_profile_type" => $rows->nf_profile_type,						"title_ta" => $rows->title_ta,						"title_en" => $rows->title_en,						"description_ta" => $rows->description_ta,						"description_en" => $rows->description_en,						"news_date" => $rows->news_date,						"nf_cover_image" => $nf_cover_image,						"nf_video_token_id" => $rows->nf_video_token_id,						"gallery_status" => $rows->gallery_status,						"view_count" => $rows->view_count,						"likes_count" => $rows->likes_count,						"share_count" => $rows->share_count,						"comments_count" => $rows->comments_count,						"status"  => $rows->status,						"like_status" => $l_status					);				}				$response = array("status" => "Success", "msg" => "Image details", "video_result" =>$video_result);			} else {				$response = array("status" => "Error", "msg" => "No records found");			}					return $response;	}	//#################### Videos all end ####################////#################### Live Events Details ####################//	public function Live_events($user_id)	{			$query = "SELECT * FROM live_events WHERE status = 'Active'";			$resultset = $this->db->query($query);			$result = $resultset->result();					if($resultset->num_rows()>0) {				$response = array("status" => "Success", "msg" => "Live Events", "liveevent_result" =>$result);			} else {				$response = array("status" => "Error", "msg" => "No records found!");			}							return $response;	}//#################### Live Events Details End ####################////#################### Social media Details ####################//	public function Socialmedia($user_id)	{			$query = "SELECT * FROM social_media WHERE sm_url != ''";			$resultset = $this->db->query($query);			$result = $resultset->result();					if($resultset->num_rows()>0) {				$response = array("status" => "Success", "msg" => "Social Media Details", "socialmedia_result" =>$result);			} else {				$response = array("status" => "Error", "msg" => "No records found!");			}							return $response;	}//#################### Social media Details End ####################////#################### Biogrphy Details ####################//	public function Ops_biogrphy($user_id)	{			$query = "SELECT * FROM ops_personal_life WHERE id = '1'";			$resultset = $this->db->query($query);			$result = $resultset->result();					$response = array("status" => "Success", "msg" => "Biogrphy Details", "biogrphy_result" =>$result);							return $response;	}//#################### Biogrphy Details End ####################////#################### Achievements Details ####################//	public function Ops_achievements($user_id)	{			$assets_url = $this->config->item("assets_url");								$query = "SELECT * FROM ops_achievements WHERE status = 'Active' ORDER BY id DESC";			$resultset = $this->db->query($query);			if($resultset->num_rows()>0) {				foreach ($resultset->result() as $rows)				{					$achievement_image_url = $assets_url.$rows->achievement_image;					$achievement_result[] = array(						"achievement_id" => $rows->id,						"achievement_date" => $rows->achievement_date,						"achievement_title_ta" => $rows->achievement_title_ta,						"achievement_title_en" => $rows->achievement_title_en,						"achievement_text_ta" => $rows->achievement_text_ta,						"achievement_text_en" => $rows->achievement_text_en,						"achievement_image" => $achievement_image_url,						"status"  => $rows->status					);				}				$response = array("status" => "Success", "msg" => "Achievements detail", "achievement_result" =>$achievement_result);			} else {				$response = array("status" => "Error", "msg" => "No records found");			}							return $response;	}//#################### Achievements Details End ####################////#################### About Party Details ####################//	public function About_party($user_id)	{			$query = "SELECT * FROM about_party WHERE id = '1'";			$resultset = $this->db->query($query);			$result = $resultset->result();					if($resultset->num_rows()>0) {				$response = array("status" => "Success", "msg" => "Party Details", "party_result" =>$result);			} else {				$response = array("status" => "Error", "msg" => "No records found!");			}							return $response;	}//#################### About Party Details End ####################////#################### Party states Details ####################//	public function Party_states($user_id)	{			$assets_url = $this->config->item("assets_url");								$query = "SELECT * FROM party_state_info WHERE status = 'Active' ORDER BY id";			$resultset = $this->db->query($query);			if($resultset->num_rows()>0) {				foreach ($resultset->result() as $rows)				{					$state_logo_url = $assets_url.$rows->state_logo;					$state_result[] = array(						"state_id" => $rows->id,						"state_name_ta" => $rows->state_name_ta,						"state_name_en" => $rows->state_name_en,						"state_logo" => $state_logo_url,						"status"  => $rows->status					);				}				$response = array("status" => "Success", "msg" => "Party state detail", "state_result" =>$state_result);			} else {				$response = array("status" => "Error", "msg" => "No records found");			}							return $response;	}//#################### Party states Details End ####################////#################### About Party Details ####################//	public function Party_elections($state_id)	{			$assets_url = $this->config->item("assets_url");								$query = "SELECT * FROM party_state_info WHERE id = '$state_id'";			$resultset = $this->db->query($query);			if($resultset->num_rows()>0) {				foreach ($resultset->result() as $rows)				{					$state_logo_url = $assets_url.$rows->state_logo;				}			}						$query = "SELECT * FROM party_election_info WHERE state_info_id = '$state_id' AND election_type = 'MLA' AND status = 'Active'";			$resultset = $this->db->query($query);						if($resultset->num_rows()>0) {				$result = $resultset->result();			} else {				$result = array();			}						$query1 = "SELECT * FROM party_election_info WHERE state_info_id = '$state_id' AND election_type = 'MP' AND status = 'Active'";			$resultset1 = $this->db->query($query1);						if($resultset1->num_rows()>0) {				$result1 = $resultset1->result();			} else {				$result1 = array();			}						$response = array("status" => "Success", "msg" => "Party Election Details","state_logo" =>$state_logo_url, "MLA_result" =>$result,"MP_result" =>$result1);		return $response;	}//#################### About Party Details End ####################//}?>