<?php

/**
* 
*/
class ContentModel extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
    
    public function getContentSite()
    {
        $sql = "SELECT * FROM content LIMIT 0,1";
        $querysql =$this->db->query($sql);

        return $querysql->result_array()[0];
    }
	
}






