<?php

/**
* 
*/
class AdminSiteInfoModel extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}
    
    public function getSiteInfo($id)
    {
        $sql = "SELECT * FROM siteinfo where siteinfo_id =".$id;
        $querysql =$this->db->query($sql);

        return $querysql->result_array();
    }
	
}






