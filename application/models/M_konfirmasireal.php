<?php
class M_konfirmasireal extends CI_Model{
protected $data=array();
	function getkonfirmasireal(){
		return $this->db->get('tbl_konfirmasi');
	}
}