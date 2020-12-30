<?php
Class Websitemodel extends CI_Model
{
	public function __construct()
	{
	  parent::__construct();
		$this->load->model('mailmodel');
		$this->load->model('smsmodel');
	}

	function get_opslife(){
		$query="SELECT * FROM `ops_personal_life` WHERE `id` = '1'";
		$res=$this->db->query($query);
		return $result=$res->result();
	}
	
	function get_party_history(){
		$query="SELECT * FROM `about_party` WHERE `id` = '1'";
		$res=$this->db->query($query);
		return $result=$res->result();
	}

	function get_socialmedia(){
		$query="SELECT * FROM social_media WHERE status = 'Active' AND sm_url!=''";
		$res=$this->db->query($query);
		return $result=$res->result();
	}
	
	function home_get_event_list_single(){
		$query="SELECT * FROM news_feed WHERE status = 'Active' AND nf_category_id ='3' ORDER BY id DESC LIMIT 1";
		$res=$this->db->query($query);
		return $result=$res->result();
	}
	
	function home_get_event_list_doubles(){
		$query="SELECT * FROM news_feed WHERE status = 'Active' AND nf_category_id ='3' ORDER BY id DESC LIMIT 1,2";
		$res=$this->db->query($query);
		return $result=$res->result();
	}
	
	function home_get_post_list(){
		$query="SELECT * FROM news_feed WHERE status = 'Active' AND nf_category_id ='2' ORDER BY id DESC LIMIT 5";
		$res=$this->db->query($query);
		return $result=$res->result();
	}
	
	function home_live_event(){
		$query="SELECT * FROM live_events WHERE status = 'Active' ORDER BY id DESC LIMIT 1";
		$res=$this->db->query($query);
		return $result=$res->result();
	}
	
	function get_home_achievements(){
		$query="SELECT * FROM `ops_achievements` WHERE `status` = 'Active' ORDER BY id DESC LIMIT 3";
		$res=$this->db->query($query);
		return $result=$res->result();
	}
	
		function home_get_intro_video(){
		$query="SELECT * FROM `intro_video` WHERE `status` = 'Active' ORDER BY id DESC LIMIT 1";
		$res=$this->db->query($query);
		return $result=$res->result();
	}
	
	function get_opsachievements(){
		$query="SELECT * FROM `ops_achievements` WHERE `status` = 'Active' ORDER BY id DESC";
		$res=$this->db->query($query);
		return $result=$res->result();
	}
	
	function party_election_info_1(){
		$query="SELECT * FROM `party_election_info` WHERE `state_info_id` = '1' ORDER BY election_year, election_type";
		$res=$this->db->query($query);
		return $result=$res->result();
	}
	
	function party_election_info_2(){
		$query="SELECT * FROM `party_election_info` WHERE `state_info_id` = '2' ORDER BY election_year, election_type";
		$res=$this->db->query($query);
		return $result=$res->result();
	}
	
	function party_election_info_3(){
		$query="SELECT * FROM `party_election_info` WHERE `state_info_id` = '3' ORDER BY election_year, election_type";
		$res=$this->db->query($query);
		return $result=$res->result();
	}
	
	
// Select total records
	 function getPostcount() {

		$this->db->select('count(*) as allcount');
		$this->db->from('news_feed');
		$this->db->where('nf_category_id', '2');
		$this->db->where('status', 'Active');
		
		//echo $this->db->get_compiled_select(); exit;
		$query = $this->db->get();
		$result = $query->result_array();
		return $result[0]['allcount'];
  }
  
	// Fetch records
	function getPost($rowno,$rowperpage) {

	$this->db->select ('id,news_date,title_en,description_en,title_ta,description_ta,nf_cover_image');
	$this->db->from('news_feed');
	$this->db->where('nf_category_id', '2');
	$this->db->where('status', 'Active');
	$this->db->order_by("id", "desc");
	$this->db->limit($rowperpage,$rowno);
	
	// echo $this->db->get_compiled_select();	 exit;
	$query = $this->db->get();
	return $query->result_array();
}

// Select total records
	 function getEventscount() {

		$this->db->select('count(*) as allcount');
		$this->db->from('news_feed');
		$this->db->where('nf_category_id', '3');
		$this->db->where('status', 'Active');
		
		//echo $this->db->get_compiled_select(); exit;
		$query = $this->db->get();
		$result = $query->result_array();
		return $result[0]['allcount'];
  }
  
// Fetch records
	function getEvents($rowno,$rowperpage) {

		$this->db->select ('id,news_date,title_en,description_en,title_ta,description_ta,nf_cover_image');
		$this->db->from('news_feed');
		$this->db->where('nf_category_id', '3');
		$this->db->where('status', 'Active');
		$this->db->order_by("id", "desc");
		$this->db->limit($rowperpage,$rowno);
		
		// echo $this->db->get_compiled_select();	 exit;
		$query = $this->db->get();
		return $query->result_array();
	}
	
	function get_postdetails($id){
		$query="SELECT * FROM `news_feed` WHERE `id` = '$id'";
		$res=$this->db->query($query);
		return $result=$res->result();
	}
	
	function get_postgallery($id){
		$query="SELECT * FROM `nf_image_gallery` WHERE `nf_id` = '$id'";
		$res=$this->db->query($query);
		return $result=$res->result();
	}
	
	// Select total records
	 function getPhotocount() {

		$this->db->select('count(*) as allcount');
		$this->db->from('news_feed');
		$this->db->where('nf_profile_type', 'I');
		$this->db->where('gallery_status', '1');
		$this->db->where('status', 'Active');
		
		//echo $this->db->get_compiled_select(); exit;
		$query = $this->db->get();
		$result = $query->result_array();
		return $result[0]['allcount'];
  }
  
	// Fetch records
	function getPhoto($rowno,$rowperpage) {

		$this->db->select ('id,news_date,title_en,description_en,title_ta,description_ta,nf_cover_image');
		$this->db->from('news_feed');
		$this->db->where('nf_profile_type', 'I');
		$this->db->where('gallery_status', '1');
		$this->db->where('status', 'Active');
		$this->db->order_by("id", "desc");
		$this->db->limit($rowperpage,$rowno);
		
		 //echo $this->db->get_compiled_select();	 exit;
		$query = $this->db->get();
		return $query->result_array();
	}
	
	// Select total records
	 function getVideocount() {

		$this->db->select('count(*) as allcount');
		$this->db->from('news_feed');
		$this->db->where('nf_profile_type', 'I');
		$this->db->where('gallery_status', '1');
		$this->db->where('status', 'Active');
		
		//echo $this->db->get_compiled_select(); exit;
		$query = $this->db->get();
		$result = $query->result_array();
		return $result[0]['allcount'];
  }
  
	// Fetch records
	function getVideo($rowno,$rowperpage) {

		$this->db->select ('id,news_date,title_en,nf_video_token_id,description_en,nf_cover_image');
		$this->db->from('news_feed');
		$this->db->where('nf_profile_type', 'V');
		$this->db->where('status', 'Active');
		$this->db->order_by("id", "desc");
		$this->db->limit($rowperpage,$rowno);
		
		 //echo $this->db->get_compiled_select();	 exit;
		$query = $this->db->get();
		return $query->result_array();
	}
	

// Select total records
	 function searchPostcount($search_text = '') {

		$this->db->select('count(*) as allcount');
		$this->db->from('news_feed');

		if($search_text != ''){
				 $this->db->or_like('title_ta', $search_text,'after');
				 $this->db->or_like('title_en', $search_text);
		}
		$this->db->where('status', 'Active');
		
		//echo $this->db->get_compiled_select(); exit;
		$query = $this->db->get();
		$result = $query->result_array();

		return $result[0]['allcount'];
  }
  
	// Fetch records
	function searchPost($rowno,$rowperpage,$search_text="") {

	$this->db->select ('id,nf_category_id,news_date,title_en,description_en,nf_cover_image');
	$this->db->from('news_feed');

	if($search_text != ''){

			$this->db->or_like('title_ta', $search_text,'after');
			$this->db->or_like('title_en', $search_text);
	}
	$this->db->where('status', 'Active');
	$this->db->order_by("id", "desc");
	$this->db->limit($rowperpage,$rowno);
	 //echo $this->db->get_compiled_select();	 exit;
	$query = $this->db->get();

	return $query->result_array();
}

  
	
}
?>
