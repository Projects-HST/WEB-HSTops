<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct() {
		 parent::__construct();
			$this->load->helper("url");
			$this->load->library('session');
	}

	public function index()
	{
			$this->load->view('home');
	}
	
	public function about_ops()
	{
			$this->load->view('about_ops');
	}

	public function about_party()
	{
			$this->load->view('about_party');
	}
	
	public function posts()
	{
			$this->load->view('posts');
	}
	
	public function post_details()
	{
			$this->load->view('post_details');
	}
	
	public function events()
	{
			$this->load->view('events');
	}
	
	public function photos()
	{
			$this->load->view('photos');
	}
	
	public function videos()
	{
			$this->load->view('videos');
	}
}
