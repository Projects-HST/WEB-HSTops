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
	 function getPostcount($search_text = '') {

		$this->db->select('count(*) as allcount');
		$this->db->from('news_feed');

		if($search_text != ''){
				 $this->db->like('title_ta', $search_text,'after');
				 $this->db->like('title_en', $search_text);
		}
		$this->db->where('nf_category_id', '2');
		$this->db->where('status', 'Active');
		
		//echo $this->db->get_compiled_select(); exit;
		$query = $this->db->get();
		$result = $query->result_array();

		return $result[0]['allcount'];
  }
  
	// Fetch records
	function getPost($rowno,$rowperpage,$search_text="") {

	$this->db->select ('id,news_date,title_en,description_en,nf_cover_image');
	$this->db->from('news_feed');

	if($search_text != ''){

		
			 $this->db->like('title_ta', $search_text,'after');
			 $this->db->like('title_en', $search_text);
	}
	$this->db->where('nf_category_id', '2');
	$this->db->where('status', 'Active');
	$this->db->order_by("id", "desc");
	$this->db->limit($rowperpage,$rowno);
	// echo $this->db->get_compiled_select();	 exit;
	$query = $this->db->get();

	return $query->result_array();
}

  
	
}
?>
