<?php

class TimeModel extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
    }
    
    public function getTimes()
    {
        $sql = "SELECT * FROM waktu_tbl where waktu_id = 1";
        $qsql = $this->db->query($sql);
		return $qsql->result_array();
    }

}

