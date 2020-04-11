<?php

/**
* 
*/
class AdminSidebarModel extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
    
    public function getSidebar($id)
    {
        $sql = "SELECT * FROM sidebar where sidebar_id = ".$id;
        $querysql =$this->db->query($sql);

        return $querysql->result_array();
    }
	
}






