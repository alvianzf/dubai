	<?php


class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('ProductsModel');
		$this->load->model('AdminModel');
	}
	/*Show Table*/
	public function index()
	{
		$data['content_page']='home_content';
		$data['product_data']=$this->ProductsModel->getResult();
		//$data['user_data']=$this->AdminModel->getAdminAccess();
		$this->load->view('index',$data);
	}

	public function Cons()
	{
		$data['content_page']='home_cons_content';
		$data['product_data']=$this->ProductsModel->getResultCons();
		$this->load->view('index',$data);
	}

	public function User()
	{
		$data['content_page']='user_content';
		$data['user_data']=$this->AdminModel->getAdminData();
		$this->load->view('index',$data);
	}

	/*End Show Table*/

	/*First Prize*/

	public function addResult1st(){
		$data['content_page']="add_post_content";
		$this->load->view('index',$data);
	}

	public function addResult1stSubmit(){

  		$dt=date_create($_POST['tanggal']);
  		$dt=date_format($dt,"Y-m-d");
  		$tanggal=$dt;
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
		$waktu=$_POST['waktu'];

		$koneksi = new mysqli("localhost","sepakbo1_dubai4dpools","Aa788888Wt@","sepakbo1_dubai4dpools");
		$checksql = "SELECT tanggal from 1st_hasil_tbl ORDER BY tanggal desc";
		
		$checkqsql = $koneksi->query($checksql);
		$checkrsql = $checkqsql->fetch_assoc();
		//echo $checkrsql['tanggal'];exit;

		
		if($tanggal== $checkrsql['tanggal'] ){
			redirect(base_url(). 'Home?error1');
		}
		else{
		$sql="INSERT INTO 1st_hasil_tbl(hari,tanggal,hasil_1,hasil_2,hasil_3) VALUES ('" . $hari ."','" . $tanggal ."','" . $hasil_1 ."','" . $hasil_2 ."','" . $hasil_3 ."')";
		}
		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home');

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
		redirect(base_url(). 'Home');

	}

	public function deleteResult1st($hasil_id){
		$sql = "DELETE FROM 1st_hasil_tbl where hasil_id =". $hasil_id;
		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home'); 
	}

	//End First Prize

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

		$koneksi = new mysqli("localhost","root","","sepakbo1_acac");
		$checksql = "SELECT tanggal from cons_hasil_tbl ORDER BY tanggal desc";
		
		$checkqsql = $koneksi->query($checksql);
		$checkrsql = $checkqsql->fetch_assoc();
		//echo $checkrsql['tanggal'];exit;

		
		if($tanggal== $checkrsql['tanggal'] ){
			redirect(base_url(). 'Home/Cons?error1');
		}
		else
		{
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
		}

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

	/*Time*/

	

	public function Time(){
		$data['content_page']="time_config";
		$this->load->view('index',$data);
	}
	public function updateTimeSubmit(){
		$waktu_id=$_POST['waktu_id'];
		$first_prize=$_POST['1st_prize'];
		$second_prize=$_POST['2nd_prize'];
		$third_prize=$_POST['3rd_prize'];
		$spec_1=$_POST['spec_1'];
		$spec_2=$_POST['spec_2'];
		$spec_3=$_POST['spec_3'];
		$spec_4=$_POST['spec_4'];
		$spec_5=$_POST['spec_5'];
		$spec_6=$_POST['spec_6'];
		$cons_1=$_POST['cons_1'];
		$cons_2=$_POST['cons_2'];
		$cons_3=$_POST['cons_3'];
		$cons_4=$_POST['cons_4'];
		$cons_5=$_POST['cons_5'];
		$cons_6=$_POST['cons_6'];

		$sql = "UPDATE waktu_tbl SET
		1st_prize= '" . $first_prize . "',
		2nd_prize='" . $second_prize . "',
		3rd_prize='" . $third_prize . "',
		spec_1='" . $spec_1 . "',
		spec_2='" . $spec_2 . "',
		spec_3='" . $spec_3 . "',
		spec_4='" . $spec_4 . "',
		spec_5='" . $spec_5 . "',
		spec_6='" . $spec_6 . "',
		cons_1='" . $cons_1 . "',
		cons_2='" . $cons_2 . "',
		cons_3='" . $cons_3 . "',
		cons_4='" . $cons_4 . "',
		cons_5='" . $cons_5 . "',
		cons_6='" . $cons_6 . "'
		where waktu_id =". $waktu_id;
		

		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home/Time');
	}

	/*End Of time*/

	/*Responsible_gambling*/

	

	public function Content(){
		$data['content_page']="content";
		$this->load->view('index',$data);
	}
	public function updateContent(){
		$content_id =1;
		$responsible_content=$_POST['responsible_content'];
		$about_us_content=$_POST['about_us_content'];
		$contact_us_content=$_POST['contact_us_content'];
		$home_1_content=$_POST['home_1_content'];
		$home_2_content=$_POST['home_2_content'];
		$home_3_content=$_POST['home_3_content'];
		$home_4_content=$_POST['home_4_content'];
		$createdate=date('Y-m-d H:i:s');

		$sql = "UPDATE content SET
		responsible_content='" . $responsible_content . "',
		about_us_content='" . $about_us_content . "',
		contact_us_content='" . $contact_us_content . "',
		home_1_content='" . $home_1_content . "',
		home_2_content='" . $home_2_content . "',
		home_3_content='" . $home_3_content . "',
		home_4_content='" . $home_4_content . "',
		createdate='" . $createdate . "'
		where content_id  =". $content_id;

		

		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home/content');
	}

	/*End Of time*/

	

/*

	//Second Prize

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

	//End Second Prize

	//Third Prize

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

	//End third Prize
	*/

	/*

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

	*/
	
}


