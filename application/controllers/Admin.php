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
            $this->upload->overwrite = true;

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
                'gambar1'  => 'assets/img/upload/'.$data['file_name'],
                 'gambar2'  => 'assets/img/upload/'.$data['file_name'],
                  'gambar3'  => 'assets/img/upload/'.$data['file_name'],
                );
            $this->M_produk->tambahproduk($d);
            redirect('admin/produk');   
        }   
    }
        public function editproduk($kode_produk){
            $this->load->library('form_validation');
            $data['produk'] = $this->M_produk->editproduk($kode_produk);
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('v_ubah',$this->data);
            $this->load->view('template/footer');
        } 
        public function updateproduk($kode_produk){
        $this->load->model('M_berita');
        $this->load->library('form_validation');
        $id = $this->input->post('id');
        $this->form_validation->set_rules('judul_berita','judul_berita','required');
        $this->form_validation->set_rules('isi_berita','isi_berita','required');
        if($this->form_validation->run() != true ){
            $data['berita'] = $this->M_berita->update_berita($id);
            $this->load->view('template/head');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('admin/v_berita_edit',$data);
            $this->load->view('template/foot');
        }else{              
            $image = $_FILES['image'];
            $config['upload_path']   = './img/upload/';
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
                    $foto    = $this->input->post('image');
                }else{
                    $foto    = './img/upload/'.$data['file_name'];
                }
                $d = array(
                'judul' => $this->input->post('judul_berita'),
                'tanggal' => date('Y-m-d'),
                'isi' => $this->input->post('isi_berita'),
                'foto'  => $foto,
                );
                $this->M_berita->update_berita($d,$id);
                redirect('admin/berita');
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
}
?>