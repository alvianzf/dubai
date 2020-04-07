<?php 
 class AdminLogin extends CI_Controller {
 	
	 public function __construct() {
		parent::__construct(); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('AdminModel');
	 }
	 
	 public function index() {
		$this->load->view("login"); 
	}

	 public function loginSubmit(){
	 	$this->form_validation->set_rules('username','username','required',array('required'=>'Please Fill Username'));
	 	$this->form_validation->set_rules('password','password','required',array('required'=>'Please Fill Password'));

	 	if($this->form_validation->run()==false){
	 		$this->load->view('login');
	 	}
	 	else{

	 		//if($_POST['username']=='admin' && $_POST['pass']=='123')
	 		if($this->AdminModel->checkAdmin($_POST['username'],$_POST['password'])>0)

	 		{
	 			$this->session->set_userdata('username', $_POST['username']);
	 			redirect(base_url(). 'Home');
	 		}
	 		else
	 		{
	 			$data['loginerror']='Username & Password Wrong';
	 			$this->load->view('login',$data);
	 		}

	 	}
	 }

	 public function logOut(){
	 	$this->session->sess_destroy();
	 	$this->load->view('login');
	 }
 }

