<?php 

/**
* 
*/
class Purchase extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		
		
	}

	public function index(){
		
		
		$this->load->view('register');
	}
}
