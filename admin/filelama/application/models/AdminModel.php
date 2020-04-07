<?php 

/**
* 
*/
class AdminModel extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function checkAdmin($username,$password){
		$sql = "SELECT username,password FROM admin_tbl where username ='" . $username . "' AND password='" . md5($password) . "'";
		//echo $sql;exit;
		$qsql = $this->db->query($sql);
		return $qsql->num_rows();
	}

	public function getAdminData(){
		$sql = "SELECT * FROM admin_tbl";		
		$qsql = $this->db->query($sql);
		return $qsql->num_rows();
	}

	public function getAdminAccess(){
		$sql = "SELECT * FROM admin_tbl WHERE username like '%$username%'";
		$qsql = $this->db->query($sql);
		return $qsql->num_rows();
	}
}


