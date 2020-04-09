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
		$this->load->helper('site');
		$this->load->helper('sidebar');
	}

	public function index()
	{
		$data['site_info_data'] = siteInfo();
		$data['sidebar_data'] = sidebarData();
		$data['content_page']="index_content";

		$data['product_data']=$this->ProductsModel->getResult_prize_1(10);
		$data['product_data_before']=$this->ProductsModel->getResult_prize_1_yesterday(10);

		$data['product_data_1st']=$this->ProductsModel->getResult_prize_1(1);
		$data['product_data_1st_before']=$this->ProductsModel->getResult_prize_1_before(1);

		$data['product_data_spec_1']=$this->ProductsModel->getResult_spec_1(1);
		$data['product_data_spec_1_before']=$this->ProductsModel->getResult_spec_1_before(1);

		$data['show_time'] = $this->ProductsModel->getTimeShow();
		/*$data['product_data_hari']=$this->ProductsModel->getResult_prize_1_hari(7);*/
		$this->load->view('index',$data);
	}
}
