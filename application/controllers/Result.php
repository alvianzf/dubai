<?php 

/**
* 
*/
class Result extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ProductsModel');
		$this->load->library('Pagination');	
	}

	public function index(){
		//Start Pagination
		$config=array();
		//fungsi array()
		$config['base_url']=base_url() . "Result";
		//menambahkan base / load base url . untuk di implementasikan pada product
		
		//setiap halaman per data
		$config['uri_segment']=2;
		//bagian-bagian dari url
		$config['total_rows']=$this->ProductsModel->/*isi function*/getTotalPrize();
		//membuat pagination disertai class
		$config['full_tag_open']="<ul>";
		$config['full_tag_close']="</ul>";

		$config['first_tag_open']="<li class='paging-item'>";
		$config['first-link']="&lt;&lt;";
		$config['first_tag_close']="</li>";

		$config['last_tag_open']="<li class='paging-item'>";
		$config['last_link']="&gt;&gt;";
		$config['last_tag_close']="</li>";

		$config['prev_tag_open']="<li class='paging-item'>";
		$config['prev_link']="&lt";
		$config['prev_tag_close']="</li'>";

		$config['next_tag_open']="<li class='paging-item'>";
		$config['next_link']="&gt";
		$config['next_tag_close']="</li'>";

		$config['cur_tag_open']="<li class='paging-item paging-item-active'><a >";
		$config['cur_tag_close']="</a></li>";

		$config['num_tag_open']="<li class='paging-item'>";
		$config['num_tag_close']="</li>";

		$this->pagination->initialize($config);
		//End Pagination

		$data['content_page']="result_content";		
		

		$start_data=($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
		$config['per_page']=30;
		$data['product_data_result']=$this->ProductsModel->getResult_prize_result($start_data,$config['per_page']);
		
		
		$this->load->view('index',$data);
	}

	



	
}
