<?php

/**
* 
*/
class AdminContentModel extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
    
    public function getContent()
    {
        $sql = "SELECT * FROM content where content_id = 1";
        $querysql =$this->db->query($sql);

        return $querysql->result_array();
    }
	
}






