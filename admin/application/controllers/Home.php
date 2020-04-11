<?php


class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('string');
		$this->load->model('ProductsModel');
		$this->load->model('AdminModel');
		$this->load->model('TimeModel');
		$this->load->model('AdminSidebarModel');
		$this->load->model('AdminSiteInfoModel');
		$this->load->model('AdminContentModel');
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

		$checkrsql = $this->ProductsModel->getResultTanggalFor1st();
		//echo $checkrsql['tanggal'];exit;

		
		if($tanggal== $checkrsql[0]['tanggal'] ){
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

		$checkrsql = $this->ProducstModel->getResultTanggalCons();
		//echo $checkrsql['tanggal'];exit;

		
		if($tanggal== $checkrsql[0]['tanggal'] ){
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
		$data['times'] = $this->TimeModel->getTimes();

		$this->load->view('index',$data);
	}
	public function updateTimeSubmit(){
		$waktu_id=$_POST['waktu_id'];
		$first_prize=$_POST['1st_prize'];
		$second_prize=$_POST['2nd_prize'];
		$third_prize=$_POST['3rd_prize'];
		$spec_1=$_POST['spec_1'];
		$spec_2=$_POST['spec_2'];
		// $spec_3=$_POST['spec_3'];
		// $spec_4=$_POST['spec_4'];
		// $spec_5=$_POST['spec_5'];
		// $spec_6=$_POST['spec_6'];
		// $cons_1=$_POST['cons_1'];
		// $cons_2=$_POST['cons_2'];
		// $cons_3=$_POST['cons_3'];
		// $cons_4=$_POST['cons_4'];
		// $cons_5=$_POST['cons_5'];
		// $cons_6=$_POST['cons_6'];

		$sql = "UPDATE waktu_tbl SET
		1st_prize= '" . $first_prize . "',
		2nd_prize='" . $second_prize . "',
		3rd_prize='" . $third_prize . "',
		spec_1='" . $spec_1 . "',
		spec_2='" . $spec_2 . "'
		where waktu_id =". $waktu_id;
		

		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home/Time');
	}

	/*End Of time*/

	/*content*/

	

	public function CustomSite(){
		$data['content_page']="content_site";
		$data['sites'] = $this->AdminSiteInfoModel->getSiteInfo(1);
		$data['contents'] = $this->AdminContentModel->getContent();

		$this->load->view('index',$data);
	}
	public function updateCustomSite(){
		$content_id =1;
		$custom_site=$_POST['custom_site'];
		
		$createdate=date('Y-m-d H:i:s');

		$sql = "UPDATE content SET
		custom_site='" . $custom_site . "',
		createdate='" . $createdate . "'
		where content_id  =". $content_id;

		

		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home/CustomSite');
	}

	/*End Of content*/

	public function Siteinfo(){
		$data['content_page']="siteinfo";
		$this->load->view('index',$data);
	}
	public function updateSiteinfo(){
		$siteinfo_id =1;
		$siteinfo_title=$_POST['siteinfo_title'];
		$siteinfo_desc=$_POST['siteinfo_desc'];
		$siteinfo_keyword=$_POST['siteinfo_keyword'];
		$siteinfo_favicon=$_POST['siteinfo_favicon'];
		$siteinfo_logo=$_POST['siteinfo_logo'];
		$siteinfo_logo_bank=$_POST['siteinfo_logo_bank'];
		$siteinfo_namepools=$_POST['siteinfo_namepools'];
		$siteinfo_heading=$_POST['siteinfo_heading'];
		$siteinfo_how_to=$_POST['siteinfo_how_to'];
		$siteinfo_notice=quotes_to_entities($_POST['siteinfo_notice']);
		$siteinfo_footer=quotes_to_entities($_POST['siteinfo_footer']);
		$siteinfo_analitics=$_POST['siteinfo_analitics'];
		$siteinfo_verification=$_POST['siteinfo_verification'];
		$createdate=date('Y-m-d H:i:s');

		$sql = "UPDATE siteinfo SET
		siteinfo_title='" . $siteinfo_title . "',
		siteinfo_desc='" . $siteinfo_desc . "',
		siteinfo_keyword='" . $siteinfo_keyword . "',
		siteinfo_favicon='" . $siteinfo_favicon . "',
		siteinfo_logo='" . $siteinfo_logo . "',
		siteinfo_logo_bank='" . $siteinfo_logo_bank . "',
		siteinfo_namepools='" . $siteinfo_namepools . "',
		siteinfo_heading='" . $siteinfo_heading . "',
		siteinfo_how_to='" . $siteinfo_how_to . "',
		siteinfo_notice='" . $siteinfo_notice . "',
		siteinfo_footer='" . $siteinfo_footer . "',
		siteinfo_analitics='" . $siteinfo_analitics . "',
		siteinfo_verification='" . $siteinfo_verification . "',
		createdate='" . $createdate . "'
		where siteinfo_id  =". $siteinfo_id;
	

		

		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home/Siteinfo');
	}

	public function Sidebar(){
		$data['content_page']="sidebar";
		$data['sidebars'] = $this->AdminSidebarModel->getSidebar(1);
		$this->load->view('index',$data);
	}
	public function updateSidebar(){
		$sidebar_id =1;
		$sidebar_custom=$_POST['sidebar_custom'];
		$sidebar_contact=$_POST['sidebar_contact'];
		$createdate=date('Y-m-d H:i:s');

		$sql = "UPDATE sidebar SET
		sidebar_custom='" . $sidebar_custom . "',
		sidebar_contact='" . $sidebar_contact . "'
		where sidebar_id  =". $sidebar_id;


		

		$qsql=$this->db->query($sql);
		redirect(base_url(). 'Home/Sidebar');
	}

	public function changePassword()
	{
		$username = $this->session->userdata('username');
		$rsql = $this->AdminModel->getUserByUsername($username);

		$admin_id = $rsql[0]['admin_id'];
		$username = $rsql[0]['username'];
		$password = $rsql[0]['password'];
		$oldpassword = md5($_POST['oldpassword']);	
		$newpassword = md5($_POST['newpassword']);	
		
		$newpasswordconf = md5($_POST['newpasswordconf']);
		

		if($oldpassword == $password){
			$sql = "
			UPDATE admin_tbl
			SET 
			username ='" . $username . "',
			password ='" . $newpassword . "'	 
			WHERE admin_id =". $admin_id;
			$qsql=$this->db->query($sql);
			redirect(base_url(). 'Home/user?success');
		}
		else{
			
			redirect(base_url(). 'Home/user?error1');
		}
	}
	
}


