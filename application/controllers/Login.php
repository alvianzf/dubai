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
	}

	public function index()
	{
		$data['site_info_data'] = siteInfo();	
		$this->load->view('register', $data);
	}
}
