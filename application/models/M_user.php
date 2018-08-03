<?php
class M_user extends CI_Model{	

	protected $data=array();
	function getcount(){
		$this->load->library('database_library');
		
		$sql="SELECT username,status FROM akun WHERE kodependidik IS NOT NULL ";
		
		$datas=$this->database_library->QueryData($sql);
		
		$data['results']=$datas;
		
		return $data;
	}
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	function register($data){
		$this->db->insert('tbl_admin',$data);		
	}
	
	function getcountberita()
	{
		$this->load->library('database_library');
		
		$sql="SELECT COUNT(*) as jumlah_berita FROM berita";

		$this->db->where("jenjang","smp");
		$this->db->from("pendaftaran");
		$this->data["jumlah_pendaftarsmp"] =$this->db->count_all_results();


		$this->db->where("jenjang","sma");
		$this->db->from("pendaftaran");
		$this->data["jumlah_pendaftarsma"] =$this->db->count_all_results();

		$this->data["jumlah_berita"] =$this->db->count_all("berita");
		
		return $this->data;
	}
	
	function getcountpesertasmp()
	{
		$data["jumlah_berita"] =$this->db->count_all("berita");
		$data["jumlah_pendafar"] =$this->db->count_all("pendaftar");

		return $data;
	}

	
	function waktudaftaradmin()
	{
		$query = $this->db->query(
			"SELECT waktu.mulai, waktu.akhir FROM waktu");
		return $query->result();
	}
	
	function waktuedit($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('waktu',$data);
	}

	function tambahpendaftar($data){
		$this->db->insert('pendaftar',$data);		
	}
	function edit_artikel($id){
		$this->db->where('id_artikel',$id);
		return $this->db->get('artikel')->result();
	}
	function update_artikel($data,$id){
		$this->db->where('id_artikel',$id);
		$this->db->update('artikel',$data);
	}
	
	function loginadmin($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query =  $this->db->get('tbl_admin');
        return $query->num_rows();
    }
    
//    untuk mengambil data hasil login
    function data_login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('tbl_admin')->row();
    }
     function logged_id()
    {
        return $this->session->userdata('id');
    }

	//fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
}
