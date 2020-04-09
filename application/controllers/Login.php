<?php 

/**
* 
*/
class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('site');
		$this->load->helper('sidebar');
		$this->load->helper('content_site');
	}

	public function index()
	{
		$data['site_info_data'] = siteInfo();	
		$data['sidebar_data'] = sidebarData();
		$data['content_site'] = contentSite();
		$this->load->view('register', $data);
	}
}
