<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
 public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');   
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');    
        $this->load->model('M_user');
        $this->load->model('M_produk');
        $this->data['tbl_kategori'] = $this->M_produk->getkategori();
        $this->load->library("pagination");
        $this->load->database();
       }

        function index() {

        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('home',$datas);
        $this->load->view('template/footer');

        }
        function produk(){
         $this->load->model('M_produk');
        $data['produk'] = $this->M_produk->getproduk()->result();
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('produk',$data);
            $this->load->view('template/footer');

        }
        public function tambahproduk(){
            $table = 'tbl_produk';
            $this->load->library('form_validation');
            $this->data['kodeunik'] = $this->M_produk->getkodeunik($table); 
            $this->data['tbl_kategori'] = $this->M_produk->getkategori();
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('v_tambahproduk',$this->data);
            $this->load->view('template/js');
            $this->load->view('template/footer');
        }
        public function kategori(){     
            $this->data['tbl_kategori'] = $this->M_produk->getkategori();
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('v_tambahproduk',$data);
            $this->load->view('template/footer');
         }
           
        public function inputproduk(){
        $this->load->model("M_produk");
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul','judul','required');
        $this->form_validation->set_rules('penulis','penulis','required');
        if($this->form_validation->run() != true ){
            redirect("Admin/tambahproduk");
        }
            else{
        
            $image = $_FILES['image'];
            $config['upload_path']   = 'assets/img/upload/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = 5140000;
            $config['overwrite']      = true;
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            $this->upload->do_upload('image');
            $data = $this->upload->data();
            var_dump($data);
            $d = array(
                'kode_produk' =>$this->input->post('kode_produk'),
                'judul' => $this->input->post('judul'),
                'penulis' => $this->input->post('penulis'),
                'penerbit' => $this->input->post('penerbit'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga'),
                'nama_kategori' => $this->input->post('nama_kategori'),
                'sinopsis' => $this->input->post('sinopsis'),
                'sku'       => $this->input->post('sku'),
                'isbn'      => $this->input->post('isbn'),
                'berat'     => $this->input->post('berat'),
                'dimensi'   => $this->input->post('dimensi'),
                'halaman'   => $this->input->post('halaman'),
                'cover'     => $this->input->post('cover'),
                'stok'      => $this->input->post('stok'),
                'gambar1'  => 'assets/img/upload/'.$data['file_name'],
              
                );
            $this->M_produk->tambahproduk($d);
            redirect('admin/produk');   
        }  
    }
    public function editproduk($kode_produk){
            $data['produk'] = $this->M_produk->editproduk($kode_produk);
            $data['tbl_kategori'] = $this->M_produk->getkategori();
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('v_ubah',$data);
            $this->load->view('template/footer');
        }
       
        public function updateproduk(){
        $this->load->model('M_produk');
        $this->load->library('form_validation');
        $kode_produk = $this->input->post('kode_produk');
        $this->form_validation->set_rules('judul','judul','required');
        $this->form_validation->set_rules('penulis','penulis','required');
        if($this->form_validation->run() != true ){
            $data['produk'] = $this->M_produk->updateproduk($kode_produk);
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('v_ubah',$data);
            $this->load->view('template/footer');
        }else{              
            $image = $_FILES['image'];
            $config['upload_path']   = 'assets/img/upload/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = 5140000;
            $config['overwrite']      = true;
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            $this->upload->overwrite = true;
            $this->upload->do_upload('image');
            $data = $this->upload->data();
            var_dump($data);
             if($data['file_name']==""){
                    $gambar1    = $this->input->post('image');
                }else{
                    $gambar1    = 'assets/img/upload/'.$data['file_name'];
                }
                $d = array(
                'judul' => $this->input->post('judul'),
                'penulis' => $this->input->post('penulis'),
                'penerbit' => $this->input->post('penerbit'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga'),
                'nama_kategori' => $this->input->post('nama_kategori'),
                'sinopsis' => $this->input->post('sinopsis'),
                'sku'       => $this->input->post('sku'),
                'isbn'      => $this->input->post('isbn'),
                'berat'     => $this->input->post('berat'),
                'dimensi'   => $this->input->post('dimensi'),
                'halaman'   => $this->input->post('halaman'),
                'cover'     => $this->input->post('cover'),
                'stok'      => $this->input->post('stok'),
                'gambar1'  => $gambar1,
                );
                $this->M_produk->updateproduk($d,$kode_produk);
                redirect('admin/produk');
            }           
        }   
        function produkhapus($kode_produk){
        $this->M_produk->hapusproduk($kode_produk);
        redirect('admin/produk');
        }

         function order(){
         $this->load->model('M_order');
          $data['order'] = $this->M_order->getorder()->result();
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('order',$data);
            $this->load->view('template/footer');

        }
        //datamember,salah namain
        function konfirmasi(){
            $this->load->model('M_konfirmasi');
            $data['konfirmasi'] = $this->M_konfirmasi->getkonfirmasi()->result();
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('konfirmasi',$data);
            $this->load->view('template/footer');

        }
        function konfirmasireal(){
            $this->load->model('M_konfirmasireal');
            $data['konfirmasireal'] = $this->M_konfirmasireal->getkonfirmasireal()->result();
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('konfirmasireal',$data);
            $this->load->view('template/footer');

        }
        function slide(){
         $this->load->model('M_produk');
            $data['slide'] = $this->M_produk->getslide()->result();
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('v_slide',$data);
            $this->load->view('template/footer');

        }
         public function editslide($id_slide){
            $data['slide'] = $this->M_produk->editslide($id_slide);
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('v_editslide',$data);
            $this->load->view('template/footer');
        }
        function updateslide() { 
        if(isset($_POST['kirim'])){
        $this->load->library('form_validation');
        $slide1 = $this->input->post('slide1');
        $slide2 = $this->input->post('slide2');
        $slide3 = $this->input->post('slide3');
        $number_of_files = sizeof($_FILES['userfile']['tmp_name']) ;
        $id_slide = $this->input->post('id_slide');
        $file   =   $_FILES['userfile'];
                $config['upload_path']          = 'assets/images';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']             = '42024';
                $config['max_width']            = '42600';
                $config['max_height']           = '42200';
                $this->load->library('upload', $config);
                $this->upload->overwrite = true;
                for ($i=0; $i < $number_of_files; $i++) { 
                    $_FILES['userfile']['name'] = $file['name'][$i];
                    $_FILES['userfile']['type'] = $file['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $file['error'][$i];
                    $_FILES['userfile']['size'] = $file['size'][$i];
                    $this->upload->do_upload('userfile');
                    $data = $this->upload->data();
                    $datas = array('id_slide'     => $id_slide, 
                                      'slide1'    => 'assets/images/'.$file['name'][0],
                                      'slide2'    => 'assets/images/'.$file['name'][1],
                                      'slide3'    => 'assets/images/'.$file['name'][2]
                            );  
                }
                    $this->db->where('id_slide',$id_slide);
                    $sukses=$this->db->update('tbl_slide', $datas);
                    if($sukses){
                        redirect('admin/slide');
                        
                    }else{

                redirect('daftar/pendaftaran');
                    }
                }
            }
         function ongkir(){
     
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('v_ongkir',$data);
            $this->load->view('template/footer');

        }
        function inputprovinsi(){
            $data['content'] = 'admin/inputprovinsi';
            $data['data']    = $this->db->get('tbl_provinsi');
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('v_tambahprovinsi',$data);
            $this->load->view('template/footer');

        }
        public function proses_input_provinsi(){
            $provinsi = $this->input->post('provinsi');
            $data = array('provinsi' => $provinsi );
            $this->db->insert('tbl_provinsi',$data);
            redirect('admin/inputprovinsi');
        }
        function provinsihapus($id_provinsi){
        $this->M_produk->hapusprovinsi($id_provinsi);
        redirect('admin/inputprovinsi');
        }
        function tambahkota(){
     
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('v_tambahkota',$data);
            $this->load->view('template/footer');

        }
        function proses_input_kota(){
            $id_provinsi   = $this->input->post('id_provinsi');
            
            $kota   = $this->input->post('kota');
            $ongkos   = $this->input->post('ongkos');

            $data = array('id_provinsi' => $id_provinsi , 'kota' => $kota, 'ongkos' => $ongkos );
            $this->db->insert('tbl_kota',$data);
            redirect('admin/tambahkota');
        }
        public function edit_kota($id_kota){
            $data['id_kota'] = $id_kota;
            $data['data']    = $this->db->get_where('tbl_kota',$data);
            $data['content'] = 'admin/edit_kota';
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('v_editkota',$data);
            $this->load->view('template/footer');

        }
        function proses_edit_kota(){
            $id_kota      = $this->input->post('id_kota');
            $id_provinsi   = $this->input->post('id_provinsi');
            $kota   = $this->input->post('kota');
            $ongkos   = $this->input->post('ongkos');

            $data = array('id_provinsi' => $id_provinsi , 'kota' => $kota, 'ongkos' => $ongkos );
            $this->db->where('id_kota',$id_kota);
            $this->db->update('tbl_kota',$data);
            redirect('admin/ongkir');
        }
        public function hapuskota($id_kota){
            $data['id_kota']    = $id_kota;
            $this->db->delete('tbl_kota', $data);
            redirect('admin/ongkir');
        }
}
?>