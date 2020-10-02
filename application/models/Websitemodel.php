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
}
?>
