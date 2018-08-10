<?php
class M_home extends CI_Model{
protected $data=array();
function getslide(){
		return $this->db->get('tbl_slide');
	}
}?>