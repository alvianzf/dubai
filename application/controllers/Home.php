<?php 

/**
* 
*/
class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ProductsModel');
		
	}

	public function index(){
		
		$data['content_page']="index_content";

		$data['product_data']=$this->ProductsModel->getResult_prize_1(10);
		$data['product_data_before']=$this->ProductsModel->getResult_prize_1_yesterday(10);

		$data['product_data_1st']=$this->ProductsModel->getResult_prize_1(1);
		$data['product_data_1st_before']=$this->ProductsModel->getResult_prize_1_before(1);

		$data['product_data_spec_1']=$this->ProductsModel->getResult_spec_1(1);
		$data['product_data_spec_1_before']=$this->ProductsModel->getResult_spec_1_before(1);

		/*$data['product_data_hari']=$this->ProductsModel->getResult_prize_1_hari(7);*/
		$this->load->view('index',$data);
	}
}
