<?php
class M_produk extends CI_Model{
protected $data=array();
	function getproduk(){
	$this->db->order_by('kode_produk', 'DESC');
	return $this->db->get('tbl_produk');
	}
		function getstok(){
		$this->load->library('database_library');
		
		$sql="SELECT tbl_produk.kode_produk, tbl_produk.judul, tbl_produk.penulis, tbl_produk.penerbit, tbl_produk.harga, tbl_produk.gambar1, tbl_stok.stok from tbl_produk LEFT JOIN  tbl_stok ON tbl_stok.kode_produk=tbl_produk.kode_produk ";
		$datas=$this->database_library->QueryData($sql);
		
		$data['results']=$datas;
		
		return $data;
	}
	function editstok($kode_produk){
		$this->load->library('database_library');
		
		$sql="SELECT tbl_produk.kode_produk, tbl_produk.judul, tbl_produk.penulis, tbl_produk.penerbit, tbl_produk.harga, tbl_produk.gambar1, tbl_stok.stok from tbl_produk LEFT JOIN  tbl_stok ON tbl_stok.kode_produk=tbl_produk.kode_produk where tbl_produk.kode_produk='$kode_produk'";
		$datas=$this->database_library->QueryData($sql);
		
		$data['results']=$datas;
		
		return $data;
	}
	function getkodeinvoice($table) { 
        $q = $this->db->query("SELECT MAX(RIGHT(invoice,4)) AS idmax FROM ".$table);
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%04s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "0001";
        }
        $kar = "INC"; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
   } 
     public function get_product_by_id($kode_produk) {
        $this->load->library('database_library');
		
		$sql="SELECT tbl_produk.kode_produk, tbl_produk.judul, tbl_produk.penulis, tbl_produk.penerbit, tbl_produk.harga, tbl_produk.gambar1, tbl_kategori.nama_kategori from tbl_produk LEFT JOIN  tbl_kategori ON tbl_kategori.nama_kategori=tbl_produk.nama_kategori where tbl_produk.kode_produk='$kode_produk'";
		$datas=$this->database_library->QueryData($sql);
		
		$data['results']=$datas;
		
		return $data;
    }

	function tambahstok($data){
		$this->db->insert('tbl_stok',$data);		
	}
	function updatestok($data,$kode_produk){
		$this->db->where('kode_produk',$kode_produk);
		$this->db->update('tbl_stok',$data);
	}
	function getkategori()
	{
		$this->db->order_by('nama_kategori');
		return $this->db->get('tbl_kategori');
	}
	public function get_produk_kategori($kategori)
	{
		if($kategori>0)
			{
				$this->db->where('nama_kategori',$kategori);
			}
		$query = $this->db->get('tbl_produk');
		return $query->result_array();
	}
	function getslide(){
		return $this->db->get('tbl_slide');
	}
	function editslide($id_slide){
		$this->db->where('id_slide',$id_slide);
		return $this->db->get('tbl_slide')->result();
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
   function getkodestok($table) { 
        $q = $this->db->query("SELECT MAX(RIGHT(id_stok,4)) AS idmax FROM ".$table);
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%04s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "0001";
        }
        $kar = "STK"; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
   } 
    function save_customer_info($data) {
        $this->db->insert('tbl_customer',$data);
    }
    public function get_customer_info($data) {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where($data);
        $info = $this->db->get();
        return $info->row();
    }
     public function save_shipping_address($data) {
        $this->db->insert('tbl_shipping', $data);
    }

 	function tambahproduk($data){
		$this->db->insert('tbl_produk',$data);		
	}
	function editproduk($kode_produk){
		$this->db->where('kode_produk',$kode_produk);
		return $this->db->get('tbl_produk')->result();
	}
	function updateproduk($data,$kode_produk){
		$this->db->where('kode_produk',$kode_produk);
		$this->db->update('tbl_produk',$data);
	}
	function hapusproduk($kode_produk){
		$this->db->where('kode_produk',$kode_produk);
		$this->db->delete('tbl_produk');
	}
	function tambahprovinsi($data,$table){
		$this->db->insert($table,$data);
	}
	function hapusprovinsi($id_provinsi){
		$this->db->where('id_provinsi',$id_provinsi);
		$this->db->delete('tbl_provinsi');
	}
	public function find($kode_produk)
    {
        $row = $this->db->where('kode_produk',$kode_produk)->limit(1)->get('tbl_produk');
        return $row;
    }
	
}