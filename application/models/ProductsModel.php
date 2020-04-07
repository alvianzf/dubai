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

	/*First Prize*/

	public function getResult_prize_1($limit=0)
	{
		if($limit>0){
			$start=0;
			$sql = "SELECT * FROM 1st_hasil_tbl ORDER BY tanggal DESC limit ". $start . "," . $limit;
		}

		else{
			$sql = "SELECT * FROM 1st_hasil_tbl ORDER BY tanggal DESC";
		}
		
		$qsql = $this->db->query($sql);
		return $qsql->result_array();
	}

	public function getTotalPrize(){
		$sql = "SELECT * FROM 1st_hasil_tbl";
		$querysql =$this->db->query($sql);
		return $querysql->num_rows();
	}

	public function getResult_prize_1_yesterday($limit=0){
		if($limit>0){
			$sql = "SELECT * FROM 1st_hasil_tbl ORDER BY tanggal DESC limit 1,". $limit;
		}

		else{
			$sql = "SELECT * FROM 1st_hasil_tbl ORDER BY tanggal DESC";
		}
		//echo $sql;exit;
		$qsql = $this->db->query($sql);
		return $qsql->result_array();
	}

	public function getResult_prize_1_before($limit=0){
		$dt = new DateTime();
		$dt->sub(new DateInterval('P1D'));
		$tanggal=$dt->format('Y-m-d');
		if($limit>0){
			$sql = "SELECT * FROM 1st_hasil_tbl ORDER BY tanggal DESC limit 1,". $limit;
		}

		else{
			$sql = "SELECT * FROM 1st_hasil_tbl ORDER BY tanggal DESC";
		}
		
		$qsql = $this->db->query($sql);
		return $qsql->result_array();
	}

	public function getResult_prize_result($start=0,$limit=0){
		if($limit>0)
		{
			$sql ="SELECT * FROM 1st_hasil_tbl ORDER BY tanggal DESC LIMIT " . $start . "," . $limit;
			//echo $sql;exit;
			$qsql = $this->db->query($sql);
			return $qsql->result_array();
		}
	}

	/*End of First Prize*/


	public function getResult_spec_1($limit=0){
		if($limit>0 ){
			$sql = "SELECT * FROM cons_hasil_tbl ORDER BY tanggal DESC limit ". $limit;
		}
		else{
			$sql = "SELECT * FROM cons_hasil_tbl ORDER BY tanggal DESC";
		}
		
		$qsql = $this->db->query($sql);
		return $qsql->result_array();
	}
	public function getResult_spec_1_before($limit=0){
		$dt = new DateTime();
		$dt->sub(new DateInterval('P1D'));
		$tanggal=$dt->format('Y-m-d');
		if($limit>0){
			$sql = "SELECT * FROM cons_hasil_tbl WHERE tanggal like '$tanggal' ORDER BY tanggal LIMIT 0,1";
		}
		else{
			$sql = "SELECT * FROM cons_hasil_tbl ORDER BY tanggal DESC";
		}
		//echo $sql;exit;
		$qsql = $this->db->query($sql);
		return $qsql->result_array();
	}

	public function getTimeShow() 
	{
		$sql = "SELECT * FROM waktu_tbl";

		$qsql = $this->db->query($sql);
		$result_query = $qsql->result_array();

		date_default_timezone_set('Asia/Jakarta');
		$local = date('H:i:s');

		$arr['first_result_time'] = $result_query[0]['1st_prize'];
		$arr['second_result_time'] = $result_query[0]['2nd_prize'];
		$arr['third_result_time'] = $result_query[0]['3rd_prize'];
		$arr['preparation_time'] = $result_query[0]['spec_1'];

		return $arr;
	}

	
	
}






