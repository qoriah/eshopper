<?php
class M_konfirmasi extends CI_Model{
protected $data=array();
	function getkonfirmasi(){
		return $this->db->get('tbl_member');
	}
}