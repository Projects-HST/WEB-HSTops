<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct() {
		 parent::__construct();
			$this->load->helper("url");
			$this->load->library('session');
			$this->load->helper("url");
			$this->load->library('pagination');
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
		$datas['achievements'] = $this->websitemodel->get_home_achievements();
		$datas['eventlist_single'] = $this->websitemodel->home_get_event_list_single();
		$datas['eventlist_double'] = $this->websitemodel->home_get_event_list_doubles();
		$datas['postlist'] = $this->websitemodel->home_get_post_list();
		$datas['introvideo'] = $this->websitemodel->home_get_intro_video();

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
	
	public function posts_old()
	{
		$datas['socialmedia'] = $this->websitemodel->get_socialmedia();
		
		$this->load->view('header',$datas);
		$this->load->view('posts',$datas);
		$this->load->view('footer',$datas);
	}
	

	
	public function events_old()
	{
		$this->load->view('header');
		$this->load->view('events');
		$this->load->view('footer');
	}
	
	public function photos_old()
	{
		$this->load->view('header');
		$this->load->view('photos');
		$this->load->view('footer');
	}
	

	
	public function videos_old()
	{
		$this->load->view('header');
		$this->load->view('videos');
		$this->load->view('footer');
	}
	
	public function posts($rowno=0)
	{
			$datas['socialmedia'] = $this->websitemodel->get_socialmedia();
	
			// Row per page
			$rowperpage = 10;
			// Row position
			if($rowno != 0){
			  $rowno = ($rowno-1) * $rowperpage;
			}

			// All records count
			$allcount = $this->websitemodel->getPostcount();

			// Get records
			$post_list = $this->websitemodel->getPost($rowno,$rowperpage);

			// Pagination Configuration
			$config['base_url'] = base_url().'index/posts';
			$config['use_page_numbers'] = TRUE;
			$config['total_rows'] = $allcount;
			$config['per_page'] = $rowperpage;


			//Pagination Container tag
			$config['full_tag_open'] = '<ul>';
			$config['full_tag_close'] = '</ul>';

			//First and last Link Text
			$config['first_link'] = '<i class="fa fa-angle-double-left">';
			$config['last_link'] = '<i class="fa fa-angle-double-right">';

			//First tag
			$config['first_tag_open'] = '<li><span class="page-bumber">';
			$config['first_tag_close'] = '</i></li></span>';

			//Last tag
			$config['last_tag_open'] = '<li><span class="page-bumber">';
			$config['last_tag_close'] = '</i></li></span>';

			//Next and Prev Link
			$config['next_link'] = '<i class="fa fa-angle-right">';
			$config['prev_link'] = '<i class="fa fa-angle-left">';

			//Next and Prev Link Styling
			$config['next_tag_open'] = '<li><span class="page-bumber">';
			$config['next_tag_close'] = '</i></span></li>';

			$config['prev_tag_open'] = '<li><span class="page-bumber">';
			$config['prev_tag_close'] = '</i></span></li>';

			//Current page tag
			$config['cur_tag_open'] = '<li><span class="page-bumber current">';
			$config['cur_tag_close'] = '</span></li>';

			$config['num_tag_open'] = '<li><span class="page-bumber">';
			$config['num_tag_close'] = '</span></li>';

		// Initialize
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $post_list;
		$data['row'] = $rowno;
		$data['allcount'] = $allcount;

		// Load view
			$this->load->view('header',$datas);
			$this->load->view('posts',$data);
			$this->load->view('footer',$datas);

	}
	
	public function events($rowno=0)
	{
			$datas['socialmedia'] = $this->websitemodel->get_socialmedia();
	
			// Row per page
			$rowperpage = 10;
			// Row position
			if($rowno != 0){
			  $rowno = ($rowno-1) * $rowperpage;
			}

			// All records count
			$allcount = $this->websitemodel->getEventscount();

			// Get records
			$post_list = $this->websitemodel->getEvents($rowno,$rowperpage);

			// Pagination Configuration
			$config['base_url'] = base_url().'index/events';
			$config['use_page_numbers'] = TRUE;
			$config['total_rows'] = $allcount;
			$config['per_page'] = $rowperpage;


			//Pagination Container tag
			$config['full_tag_open'] = '<ul>';
			$config['full_tag_close'] = '</ul>';

			//First and last Link Text
			$config['first_link'] = '<i class="fa fa-angle-double-left">';
			$config['last_link'] = '<i class="fa fa-angle-double-right">';

			//First tag
			$config['first_tag_open'] = '<li><span class="page-bumber">';
			$config['first_tag_close'] = '</i></li></span>';

			//Last tag
			$config['last_tag_open'] = '<li><span class="page-bumber">';
			$config['last_tag_close'] = '</i></li></span>';

			//Next and Prev Link
			$config['next_link'] = '<i class="fa fa-angle-right">';
			$config['prev_link'] = '<i class="fa fa-angle-left">';

			//Next and Prev Link Styling
			$config['next_tag_open'] = '<li><span class="page-bumber">';
			$config['next_tag_close'] = '</i></span></li>';

			$config['prev_tag_open'] = '<li><span class="page-bumber">';
			$config['prev_tag_close'] = '</i></span></li>';

			//Current page tag
			$config['cur_tag_open'] = '<li><span class="page-bumber current">';
			$config['cur_tag_close'] = '</span></li>';

			$config['num_tag_open'] = '<li><span class="page-bumber">';
			$config['num_tag_close'] = '</span></li>';

		// Initialize
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $post_list;
		$data['row'] = $rowno;
		$data['allcount'] = $allcount;

		// Load view
			$this->load->view('header',$datas);
			$this->load->view('events',$data);
			$this->load->view('footer',$datas);

	}
	
	public function post_details($post_id)
	{
		$id=base64_decode($post_id)/98765;
		
		$datas['socialmedia'] = $this->websitemodel->get_socialmedia();
		$datas['postdetails'] = $this->websitemodel->get_postdetails($id);
		$datas['postgallery'] = $this->websitemodel->get_postgallery($id);
		
		$this->load->view('header',$datas);
		$this->load->view('post_details',$datas);
		$this->load->view('footer',$datas);
	}
	
	
	public function photos($rowno=0)
	{
			$datas['socialmedia'] = $this->websitemodel->get_socialmedia();
	
			// Row per page
			$rowperpage = 10;
			// Row position
			if($rowno != 0){
			  $rowno = ($rowno-1) * $rowperpage;
			}

			// All records count
			$allcount = $this->websitemodel->getPhotocount();

			// Get records
			$post_list = $this->websitemodel->getPhoto($rowno,$rowperpage);

			// Pagination Configuration
			$config['base_url'] = base_url().'index/photos';
			$config['use_page_numbers'] = TRUE;
			$config['total_rows'] = $allcount;
			$config['per_page'] = $rowperpage;


			//Pagination Container tag
			$config['full_tag_open'] = '<ul>';
			$config['full_tag_close'] = '</ul>';

			//First and last Link Text
			$config['first_link'] = '<i class="fa fa-angle-double-left">';
			$config['last_link'] = '<i class="fa fa-angle-double-right">';

			//First tag
			$config['first_tag_open'] = '<li><span class="page-bumber">';
			$config['first_tag_close'] = '</i></li></span>';

			//Last tag
			$config['last_tag_open'] = '<li><span class="page-bumber">';
			$config['last_tag_close'] = '</i></li></span>';

			//Next and Prev Link
			$config['next_link'] = '<i class="fa fa-angle-right">';
			$config['prev_link'] = '<i class="fa fa-angle-left">';

			//Next and Prev Link Styling
			$config['next_tag_open'] = '<li><span class="page-bumber">';
			$config['next_tag_close'] = '</i></span></li>';

			$config['prev_tag_open'] = '<li><span class="page-bumber">';
			$config['prev_tag_close'] = '</i></span></li>';

			//Current page tag
			$config['cur_tag_open'] = '<li><span class="page-bumber current">';
			$config['cur_tag_close'] = '</span></li>';

			$config['num_tag_open'] = '<li><span class="page-bumber">';
			$config['num_tag_close'] = '</span></li>';

		// Initialize
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $post_list;
		$data['row'] = $rowno;
		$data['allcount'] = $allcount;

		// Load view
			$this->load->view('header',$datas);
			$this->load->view('photos',$data);
			$this->load->view('footer',$datas);

	}
	
	public function videos($rowno=0)
	{
			$datas['socialmedia'] = $this->websitemodel->get_socialmedia();
	
			// Row per page
			$rowperpage = 10;
			// Row position
			if($rowno != 0){
			  $rowno = ($rowno-1) * $rowperpage;
			}

			// All records count
			$allcount = $this->websitemodel->getVideocount();

			// Get records
			$post_list = $this->websitemodel->getVideo($rowno,$rowperpage);

			// Pagination Configuration
			$config['base_url'] = base_url().'index/photos';
			$config['use_page_numbers'] = TRUE;
			$config['total_rows'] = $allcount;
			$config['per_page'] = $rowperpage;


			//Pagination Container tag
			$config['full_tag_open'] = '<ul>';
			$config['full_tag_close'] = '</ul>';

			//First and last Link Text
			$config['first_link'] = '<i class="fa fa-angle-double-left">';
			$config['last_link'] = '<i class="fa fa-angle-double-right">';

			//First tag
			$config['first_tag_open'] = '<li><span class="page-bumber">';
			$config['first_tag_close'] = '</i></li></span>';

			//Last tag
			$config['last_tag_open'] = '<li><span class="page-bumber">';
			$config['last_tag_close'] = '</i></li></span>';

			//Next and Prev Link
			$config['next_link'] = '<i class="fa fa-angle-right">';
			$config['prev_link'] = '<i class="fa fa-angle-left">';

			//Next and Prev Link Styling
			$config['next_tag_open'] = '<li><span class="page-bumber">';
			$config['next_tag_close'] = '</i></span></li>';

			$config['prev_tag_open'] = '<li><span class="page-bumber">';
			$config['prev_tag_close'] = '</i></span></li>';

			//Current page tag
			$config['cur_tag_open'] = '<li><span class="page-bumber current">';
			$config['cur_tag_close'] = '</span></li>';

			$config['num_tag_open'] = '<li><span class="page-bumber">';
			$config['num_tag_close'] = '</span></li>';

		// Initialize
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $post_list;
		$data['row'] = $rowno;
		$data['allcount'] = $allcount;

		// Load view
			$this->load->view('header',$datas);
			$this->load->view('videos',$data);
			$this->load->view('footer',$datas);

	}
	
	
	public function photos_gallery($post_id)
	{
		$id=base64_decode($post_id)/98765;
		
		$datas['socialmedia'] = $this->websitemodel->get_socialmedia();
		$datas['postgallery'] = $this->websitemodel->get_postgallery($id);

		$this->load->view('header',$datas);
		$this->load->view('photos_gallery',$datas);
		$this->load->view('footer',$datas);
	}
	

	public function search_posts($rowno=0)
	{
		$datas['socialmedia'] = $this->websitemodel->get_socialmedia();
		
			// Search text
			$search_text = "";
			if($this->input->post('submit') != NULL ){
			  $search_text = $this->db->escape_str($this->input->post('search'));
			  $this->session->set_userdata(array("search"=>$search_text));
			}else{
			  if($this->session->userdata('search') != NULL){
				$search_text = $this->session->userdata('search');
			  }
			}
			
			// Row per page
			$rowperpage = 10;
			// Row position
			if($rowno != 0){
			  $rowno = ($rowno-1) * $rowperpage;
			}

			// All records count
			$allcount = $this->websitemodel->searchPostcount($search_text);

			// Get records
			$users_record = $this->websitemodel->searchPost($rowno,$rowperpage,$search_text);

			// Pagination Configuration
			$config['base_url'] = base_url().'index/search_posts';
			$config['use_page_numbers'] = TRUE;
			$config['total_rows'] = $allcount;
			$config['per_page'] = $rowperpage;


			//Pagination Container tag
			$config['full_tag_open'] = '<ul>';
			$config['full_tag_close'] = '</ul>';

			//First and last Link Text
			$config['first_link'] = '<i class="fa fa-angle-double-left">';
			$config['last_link'] = '<i class="fa fa-angle-double-right">';

			//First tag
			$config['first_tag_open'] = '<li><span class="page-bumber">';
			$config['first_tag_close'] = '</i></li></span>';

			//Last tag
			$config['last_tag_open'] = '<li><span class="page-bumber">';
			$config['last_tag_close'] = '</i></li></span>';

			//Next and Prev Link
			$config['next_link'] = '<i class="fa fa-angle-right">';
			$config['prev_link'] = '<i class="fa fa-angle-left">';

			//Next and Prev Link Styling
			$config['next_tag_open'] = '<li><span class="page-bumber">';
			$config['next_tag_close'] = '</i></span></li>';

			$config['prev_tag_open'] = '<li><span class="page-bumber">';
			$config['prev_tag_close'] = '</i></span></li>';

			//Current page tag
			$config['cur_tag_open'] = '<li><span class="page-bumber current">';
			$config['cur_tag_close'] = '</span></li>';

			$config['num_tag_open'] = '<li><span class="page-bumber">';
			$config['num_tag_close'] = '</span></li>';

		// Initialize
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $users_record;
		//print_r ($data['result']); exit;
		$data['row'] = $rowno;
		$data['search'] = $search_text;
		$data['allcount'] = $allcount;

		// Load view
			$this->load->view('header',$datas);
			$this->load->view('search_result',$data);
			$this->load->view('footer',$datas);

	}
}
