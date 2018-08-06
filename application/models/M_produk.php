<?php
class M_produk extends CI_Model{
protected $data=array();
	function getproduk(){
		return $this->db->get('tbl_produk');
	}
	function getkategori()
	{
		$this->db->order_by('nama_kategori');
		return $this->db->get('tbl_kategori');
	}
	function getslide(){
		return $this->db->get('tbl_slide');
	}
	function getkodeunik($table) { 
        $q = $this->db->query("SELECT MAX(RIGHT(kode_produk,4)) AS idmax FROM ".$table);
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%04s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "0001";
        }
        $kar = "MZN"; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
   } 
 	function tambahproduk($data){
		$this->db->insert('tbl_produk',$data);		
	}
	function editproduk($kode_produk){
		$this->db->where('kode_produk',$kode_produk);
		return $this->db->get('tbl_produk')->result();
	}
	function hapusproduk($kode_produk){
		$this->db->where('kode_produk',$kode_produk);
		$this->db->delete('tbl_produk');
	}
	
}