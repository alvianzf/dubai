<?php 

/**
* 
*/
class Purchase extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('site');
		$this->load->helper('sidebar');
	}

	public function index()
	{
		$data['site_info_data'] = siteInfo();
		$data['sidebar_data'] = sidebarData();	
		$this->load->view('register', $data);
	}
}
