	<?php


class Post extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ProductsModel');
	}
	/*Show Table*/
	public function index()
	{
		$data['content_page']='after_home_content';
		$data['product_data']=$this->ProductsModel->getResult1st();
		$this->load->view('index',$data);
	}

	public function second()
	{
		$data['content_page']='home_2nd_content';
		$data['product_data']=$this->ProductsModel->getResult2nd();
		$this->load->view('index',$data);
	}

	public function third()
	{
		$data['content_page']='home_3rd_content';
		$data['product_data']=$this->ProductsModel->getResult3rd();
		$this->load->view('index',$data);
	}

	public function Cons()
	{
		$data['content_page']='home_cons_content';
		$data['product_data']=$this->ProductsModel->getResultCons();
		$this->load->view('index',$data);
	}

	/*End Show Table*/

	/*First Prize*/

	public function addResult1st(){
		$data['content_page']="after_add_post_content";
		$data['product_data']=$this->ProductsModel->getResult(1);
		$this->load->view('input',$data);
	}

	public function addResult1stSubmit(){
		$tanggal=$_POST['tanggal'];


		$day = date('D', strtotime($tanggal));
		$dayList = array(
			'Sun' => 'Sunday',
			'Mon' => 'Monday',
			'Tue' => 'Tuesday',
			'Wed' => 'Wednesday',
			'Thu' => 'Thursday',
			'Fri' => 'Friday',
			'Sat' => 'Saturday'
		);
		$hari= $dayList[$day];
		
		
		$hasil_1=$_POST['hasil_1'];
		$hasil_2=$_POST['hasil_2'];
		$hasil_3=$_POST['hasil_3'];
		

		$sql="INSERT INTO after_1st_hasil_tbl(hari,tanggal,hasil_1,hasil_2,hasil_3) VALUES ('" . $hari ."','" . $tanggal ."','" . $hasil_1 ."','" . $hasil_2 ."','" . $hasil_3 ."')";
		



		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Post');

	}

	public function editResult1st($hasil_id){
		if($hasil_id>0)
		$data['content_page']="edit_post_content";
		$data['product_data']=$this->ProductsModel->getResultDetail($hasil_id);
		$this->load->view('index',$data);
	}

	public function editResult1stSubmit(){
		$hasil_id=$_POST['hasil_id'];
		$hari=$_POST['hari'];
		$tanggal=$_POST['tanggal'];
		$hasil_1=$_POST['hasil_1'];
		$hasil_2=$_POST['hasil_2'];
		$hasil_3=$_POST['hasil_3'];
		
		$waktu=$_POST['waktu'];

		$sql = "UPDATE 1st_hasil_tbl SET
		hari= '" . $hari . "',
		tanggal='" . $tanggal . "',
		hasil_1= '" . $hasil_1 . "',
		hasil_2= '" . $hasil_2 . "',
		hasil_3= '" . $hasil_3 . "',
		waktu= '" . $waktu . "'

		where hasil_id =". $hasil_id;

		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Post');

	}

	public function deleteResult1st($hasil_id){
		$sql = "DELETE FROM after_1st_hasil_tbl where hasil_id =". $hasil_id;
		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Post'); 
	}

	/*End First Prize*/

	/*Second Prize*/

	public function addResult2nd(){
		$data['content_page']="add_post_2nd_content";
		$this->load->view('index',$data);
	}

	public function addResult2ndSubmit(){
		$tanggal=$_POST['tanggal'];
		$day = date('D', strtotime($tanggal));
		$dayList = array(
			'Sun' => 'Sunday',
			'Mon' => 'Monday',
			'Tue' => 'Tuesday',
			'Wed' => 'Wednesday',
			'Thu' => 'Thursday',
			'Fri' => 'Friday',
			'Sat' => 'Saturday'
		);
		$hari= $dayList[$day];
		
		
		$hasil_1=$_POST['hasil_1'];
		$hasil_2=$_POST['hasil_2'];
		$hasil_3=$_POST['hasil_3'];
		

		$sql="INSERT INTO 2nd_hasil_tbl(hari,tanggal,hasil_1,hasil_2,hasil_3) VALUES ('" . $hari ."','" . $tanggal ."','" . $hasil_1 ."','" . $hasil_2 ."','" . $hasil_3 ."')";



		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home/second');

	}

	public function editResult2nd($hasil_id){
		if($hasil_id>0)
		$data['content_page']="edit_post_2nd_content";
		$data['product_data']=$this->ProductsModel->getResultDetail($hasil_id);
		$this->load->view('index',$data);
	}

	public function editResult2ndSubmit(){
		$hasil_id=$_POST['hasil_id'];
		$hari=$_POST['hari'];
		$tanggal=$_POST['tanggal'];
		$hasil_1=$_POST['hasil_1'];
		$hasil_2=$_POST['hasil_2'];
		$hasil_3=$_POST['hasil_3'];
		
		$waktu=$_POST['waktu'];

		$sql = "UPDATE 2nd_hasil_tbl SET
		hari= '" . $hari . "',
		tanggal='" . $tanggal . "',
		hasil_1= '" . $hasil_1 . "',
		hasil_2= '" . $hasil_2 . "',
		hasil_3= '" . $hasil_3 . "',
		waktu= '" . $waktu . "'

		where hasil_id =". $hasil_id;

		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home');

	}

	public function deleteResult2nd($hasil_id){
		$sql = "DELETE FROM 2nd_hasil_tbl where hasil_id =". $hasil_id;
		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home/second'); 
	}

	/*End Second Prize*/

	/*Third Prize*/

	public function addResult3rd(){
		$data['content_page']="add_post_3rd_content";
		$this->load->view('index',$data);
	}

	public function addResult3rdSubmit(){
		$tanggal=$_POST['tanggal'];
		$day = date('D', strtotime($tanggal));
		$dayList = array(
			'Sun' => 'Sunday',
			'Mon' => 'Monday',
			'Tue' => 'Tuesday',
			'Wed' => 'Wednesday',
			'Thu' => 'Thursday',
			'Fri' => 'Friday',
			'Sat' => 'Saturday'
		);
		$hari= $dayList[$day];
		
		
		$hasil_1=$_POST['hasil_1'];
		$hasil_2=$_POST['hasil_2'];
		$hasil_3=$_POST['hasil_3'];
		

		$sql="INSERT INTO 3rd_hasil_tbl(hari,tanggal,hasil_1,hasil_2,hasil_3) VALUES ('" . $hari ."','" . $tanggal ."','" . $hasil_1 ."','" . $hasil_2 ."','" . $hasil_3 ."')";


		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home/third');

	}

	public function editResult3rd($hasil_id){
		if($hasil_id>0)
		$data['content_page']="edit_post_content";
		$data['product_data']=$this->ProductsModel->getResultDetail($hasil_id);
		$this->load->view('index',$data);
	}

	public function editResult3rdSubmit(){
		$hasil_id=$_POST['hasil_id'];
		$hari=$_POST['hari'];
		$tanggal=$_POST['tanggal'];
		$hasil_1=$_POST['hasil_1'];
		$hasil_2=$_POST['hasil_2'];
		$hasil_3=$_POST['hasil_3'];
		
		$waktu=$_POST['waktu'];

		$sql = "UPDATE 3rd_hasil_tbl SET
		hari= '" . $hari . "',
		tanggal='" . $tanggal . "',
		hasil_1= '" . $hasil_1 . "',
		hasil_2= '" . $hasil_2 . "',
		hasil_3= '" . $hasil_3 . "',
		waktu= '" . $waktu . "'

		where hasil_id =". $hasil_id;

		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home');

	}

	public function deleteResult3rd($hasil_id){
		$sql = "DELETE FROM 3rd_hasil_tbl where hasil_id =". $hasil_id;
		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home/third'); 
	}

	/*End third Prize*/

	/*Start Cons*/

	public function addCons(){
		$data['content_page']="add_post_cons_content";
		$this->load->view('index',$data);
	}

	public function addResultConsSubmit(){	
		$hari=$_POST['hari'];

		$tanggal=$_POST['tanggal'];
		$hasil_1=$_POST['hasil_1'];
		$hasil_2=$_POST['hasil_2'];
		$hasil_3=$_POST['hasil_3'];
		$hasil_4=$_POST['hasil_4'];
		$hasil_5=$_POST['hasil_5'];
		$hasil_6=$_POST['hasil_6'];
		$hasil_7=$_POST['hasil_7'];
		$hasil_8=$_POST['hasil_8'];
		$hasil_9=$_POST['hasil_9'];
		$hasil_10=$_POST['hasil_10'];
		$hasil_11=$_POST['hasil_11'];
		$hasil_12=$_POST['hasil_12'];

		$sql="INSERT INTO cons_hasil_tbl(hari,tanggal,hasil_1,hasil_2,hasil_3,hasil_4,hasil_5,hasil_6,hasil_7,hasil_8,hasil_9,hasil_10,hasil_11,hasil_12) VALUES (
		'" . $hari ."',
		'" . $tanggal ."',
		'" . $hasil_1 ."',
		'" . $hasil_2 ."',
		'" . $hasil_3 ."',
		'" . $hasil_4 ."',
		'" . $hasil_5 ."',
		'" . $hasil_6 ."',
		'" . $hasil_7 ."',
		'" . $hasil_8 ."',
		'" . $hasil_9 ."',
		'" . $hasil_10 ."',
		'" . $hasil_11 ."',
		'" . $hasil_12 ."')
		";

		

		
		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home/Cons');

	}


	


	public function editResultCons($hasil_id){
		if($hasil_id>0)
		$data['content_page']="edit_post_cons_content";
		$data['product_data']=$this->ProductsModel->getResultConsDetail($hasil_id);
		$this->load->view('index',$data);
	}

	public function editResultConsSubmit(){
		$hasil_id=$_POST['hasil_id'];
		$hari=$_POST['hari'];
		$tanggal=$_POST['tanggal'];
		$hasil_1=$_POST['hasil_1'];
		$hasil_2=$_POST['hasil_2'];
		$hasil_3=$_POST['hasil_3'];
		$hasil_4=$_POST['hasil_4'];
		$hasil_5=$_POST['hasil_5'];
		$hasil_6=$_POST['hasil_6'];
		$hasil_7=$_POST['hasil_7'];
		$hasil_8=$_POST['hasil_8'];
		$hasil_9=$_POST['hasil_9'];
		$hasil_10=$_POST['hasil_10'];
		$hasil_11=$_POST['hasil_11'];
		$hasil_12=$_POST['hasil_12'];
		$waktu=$_POST['waktu'];
		
		

		$sql = "UPDATE cons_hasil_tbl SET
		hari= '" . $hari . "',
		tanggal='" . $tanggal . "',
		hasil_1= '" . $hasil_1 . "',
		hasil_2= '" . $hasil_2 . "',
		hasil_3= '" . $hasil_3 . "',
		hasil_4= '" . $hasil_4 . "',
		hasil_5= '" . $hasil_5 . "',
		hasil_6= '" . $hasil_6 . "',
		hasil_7= '" . $hasil_7 . "',
		hasil_8= '" . $hasil_8 . "',
		hasil_9= '" . $hasil_9 . "',
		hasil_10= '" . $hasil_10 . "',
		hasil_11= '" . $hasil_11 . "',
		hasil_12= '" . $hasil_12 . "',
		waktu= '" . $waktu . "'
		
		where hasil_id = ". $hasil_id;

		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home/Cons');
	}

	public function deleteResultCons($hasil_id){
		$sql = "DELETE FROM cons_hasil_tbl where hasil_id =". $hasil_id;
		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home/Cons'); 
	}

	/*End Cons*/

	

	
}


