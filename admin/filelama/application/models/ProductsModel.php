<?php

/**
* 
*/
class ProductsModel extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getResult($limit=0)
	{
		if($limit>0){
			$sql="SELECT * FROM 1st_hasil_tbl ORDER BY tanggal DESC LIMIT ". $limit;
		}
		else{
			$sql="SELECT * FROM 1st_hasil_tbl ORDER BY tanggal DESC";
		}
		$qsql = $this->db->query($sql);
		return $qsql->result_array();
	}

	
	public function getResultDetail($hasil_id){
		
		$sql = "SELECT * FROM hasil_tbl where hasil_id =" . $hasil_id;
		$qsql = $this->db->query($sql);
		return $qsql->row();
	}

	public function getResultCons($limit=0)
	{
		if($limit>0){
			$sql="SELECT * FROM cons_hasil_tbl ORDER BY tanggal DESC LIMIT ". $limit;
		}
		else{
			$sql="SELECT * FROM cons_hasil_tbl ORDER BY tanggal DESC";
		}
		$qsql = $this->db->query($sql);
		return $qsql->result_array();
	}

	public function getResultConsDetail($hasil_id){
		
		$sql = "SELECT * FROM cons_hasil_tbl where hasil_id =" . $hasil_id;
		$qsql = $this->db->query($sql);
		return $qsql->row();
	}

	

	/*
	Post
	*/

	public function getResult1st($limit=0)
	{
		if($limit>0){
			$sql="SELECT * FROM after_1st_hasil_tbl ORDER BY tanggal DESC LIMIT ". $limit;
		}
		else{
			$sql="SELECT * FROM after_1st_hasil_tbl ORDER BY tanggal DESC";
		}
		$qsql = $this->db->query($sql);
		return $qsql->result_array();
	}
	/*
	public function getResult2nd($limit=0)
	{
		if($limit>0){
			$sql="SELECT * FROM 2nd_hasil_tbl ORDER BY tanggal DESC LIMIT ". $limit;
		}
		else{
			$sql="SELECT * FROM 2nd_hasil_tbl ORDER BY tanggal DESC";
		}
		$qsql = $this->db->query($sql);
		return $qsql->result_array();
	}

	public function getResult3rd($limit=0)
	{
		if($limit>0){
			$sql="SELECT * FROM 3rd_hasil_tbl ORDER BY tanggal DESC LIMIT ". $limit;
		}
		else{
			$sql="SELECT * FROM 3rd_hasil_tbl ORDER BY tanggal DESC";
		}
		$qsql = $this->db->query($sql);
		return $qsql->result_array();
	}
*/
}

