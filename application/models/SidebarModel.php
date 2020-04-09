<?php

/**
* 
*/
class SidebarModel extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
    
    public function getSidebar()
    {
        $sql = "SELECT * FROM sidebar where sidebar_id LIMIT 0,1";
        $querysql =$this->db->query($sql);

        return $querysql->result_array()[0];
    }
	
}






