<?php
class M_order extends CI_Model{
protected $data=array();
	function getorder(){
		return $this->db->get('tbl_order');
	}
}