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
   function tambahproduk($dt){
   			$data1=array(
	      		'kode_produk'		=> $dt['kode_produk'],
	      		'judul'				=> $dt['judul'],
	      		'penulis' 			=> $dt['penulis'],
				'penerbit' 			=> $dt['penerbit'],
				'deskripsi' 		=> $dt['deskripsi'],
				'harga' 			=> $dt['harga'],
				'status' 			=> $dt['status'],
				'nama_kategori' 	=> $dt['nama_kategori'],
				'sinopsis' 			=> $dt['sinopsis'],
				'tanggal_input' 	=> date('Y-m-d'),
				'deskripsi' 		=> date('Y-m-d'),
				'gambar1' 			=> $dt['gambar1'],
				'gambar2' 			=> $dt['gambar2'],
				'gambar3' 			=> $dt['gambar3'],
				);

	      	$data2=array(
	      		'id_spek'	=> $dt['id_spek'],
	      		'sku'		=> $dt['sku'],
	      		'isbn'		=> $dt['isbn'],
	      		'berat'		=> $dt['berat'],
	      		'dimensi'	=> $dt['dimensi'],
	      		'halaman'	=> $dt['halaman'],
	      		'cover'		=> $dt['cover'],
	      		);

	      	$data3=array(
	      		'id_stok'		=> $dt['id_stok'],
	      		'kode_produk'	=> $dt['kode_produk'],
	      		'id_spek'		=> $dt['id_spek'],
	      		'stok'			=> $dt['stok'],
	      		);
	        	$this->db->insert('tbl_produk', $data1);
	        	$this->db->insert('tbl_spek', $data2);	
				$this->db->insert('tbl_stok', $data3);
					        
	}

}