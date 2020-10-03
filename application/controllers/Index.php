<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct() {
		 parent::__construct();
			$this->load->helper("url");
			$this->load->library('session');
			$this->load->helper("url");
			$this->load->model('websitemodel');
	}

	/* public function index()
	{
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
			
		if($user_type==1 || $user_type==2){
			$datas['result'] = $this->spvmodel->get_spvlife();
			$this->load->view('admin/header');
			$this->load->view('admin/spv_life',$datas);
			$this->load->view('admin/footer');
		}else {
			redirect(base_url().'admin/');
		}
	} */
	
	public function index()
	{
		$datas['socialmedia'] = $this->websitemodel->get_socialmedia();
		$datas['personal'] = $this->websitemodel->get_opslife();
		$datas['partyhistory'] = $this->websitemodel->get_party_history();
		$datas['eventlist_single'] = $this->websitemodel->home_get_event_list_single();
		$datas['eventlist_double'] = $this->websitemodel->home_get_event_list_doubles();
		$datas['postlist'] = $this->websitemodel->home_get_post_list();

		$this->load->view('header',$datas);
		$this->load->view('home',$datas);
		$this->load->view('footer',$datas);
	}
	
	public function about_ops()
	{
		$datas['socialmedia'] = $this->websitemodel->get_socialmedia();
		$datas['personal'] = $this->websitemodel->get_opslife();
		$datas['achievements'] = $this->websitemodel->get_opsachievements();
		
		$this->load->view('header',$datas);
		$this->load->view('about_ops',$datas);
		$this->load->view('footer',$datas);
	}

	public function about_party()
	{
		$datas['socialmedia'] = $this->websitemodel->get_socialmedia();
		$datas['partyhistory'] = $this->websitemodel->get_party_history();
		$datas['electioninfo1'] = $this->websitemodel->party_election_info_1();
		$datas['electioninfo2'] = $this->websitemodel->party_election_info_2();
		$datas['electioninfo3'] = $this->websitemodel->party_election_info_3();
		
		$this->load->view('header',$datas);
		$this->load->view('about_party',$datas);
		$this->load->view('footer',$datas);
	}
	
	public function posts()
	{
		$this->load->view('header');
		$this->load->view('posts');
		$this->load->view('footer');
	}
	
	public function post_details()
	{
		$this->load->view('header');
		$this->load->view('post_details');
		$this->load->view('footer');
	}
	
	public function events()
	{
		$this->load->view('header');
		$this->load->view('events');
		$this->load->view('footer');
	}
	
	public function photos()
	{
		$this->load->view('header');
		$this->load->view('photos');
		$this->load->view('footer');
	}
	
	public function photos_gallery()
	{
		$this->load->view('header');
		$this->load->view('photos_gallery');
		$this->load->view('footer');
	}
	
	public function videos()
	{
		$this->load->view('header');
		$this->load->view('videos');
		$this->load->view('footer');
	}
}
