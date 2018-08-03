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
         function inputproduk(){
         if(isset($_POST['kirim'])){
        $this->load->library('form_validation');
                    $judul = $this->input->post('judul');
                    $penulis = $this->input->post('penulis');
                    $penerbit = $this->input->post('penerbit');
                    $deskripsi = $this->input->post('deskripsi');
                    $harga= $this->input->post('harga');
                    $sinopsis= $this->input->post('sinopsis');
                    $tbl_kategori      = $this->input->post('nama_kategori');
                    $number_of_files = sizeof($_FILES['userfile']['tmp_name']) ;
                    $kode = $this->input->post('kode_produk');
                    $file   =   $_FILES['userfile'];
        
        // Konfigurasi Upload Gambar*/
                $config['upload_path']          = 'assets/images';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']             = '42024';
                $config['max_width']            = '42600';
                $config['max_height']           = '42200';
                $this->load->library('upload', $config);

                for ($i=0; $i < $number_of_files; $i++) { 
                    $_FILES['userfile']['name'] = $file['name'][$i];
                    $_FILES['userfile']['type'] = $file['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $file['error'][$i];
                    $_FILES['userfile']['size'] = $file['size'][$i];
                    $this->upload->do_upload();
                    $datas = array(    'kode_produk'            => $kode, 
                                      'judul'                   => $judul,
                                      'penulis'                 => $penulis,
                                      'penerbit'                => $penerbit,
                                      'deskripsi'               => $deskripsi,
                                      'harga'                   => $harga,
                                      'sinopsis'                => $sinopsis,
                                      'nama_kategori'           => $nama_kategori,
                                      'gambar1'                    => $file['name'][0],
                                      'gambar2'                    => $file['name'][1],
                                      'gambar3'                    => $file['name'][2]
                            );  
                    }
                    $sukses=$this->db->insert('tbl_produk', $datas);
                   // $sukses=$this->db->insert('tbl_spek', $data2);
                   // $sukses=$this->db->insert('tbl_stok', $data3);
                    if($sukses){
                        redirect('admin/produk');
                        
                    }else{

                redirect('admin/produk');
                    }
    
            }else{
                redirect('admin/produk');
                
            }
        }
                  //  $data2 = array(   'id_spek'            => $id_spek, 
                                     // 'sku'                => $sku,
                                     // 'isbn'               => $isbn,
                                     // 'berat'              => $berat,
                                     // 'dimensi'            => $dimensi,
                                     // 'halaman'            => $halaman,
                                     // 'cover'              => $cover
                                     
                                 // );
                    //$data3 = array(   'id_stok'            => $id_stok, 
                                      //'kode_produk'        => $kode,
                                     // 'id_spek'            => $id_spek,
                                     // 'stok'               => $stok
                                 // );
                
        /*public function input(){
        $this->load->model("M_produk");
                $config['upload_path']          = 'assets/img';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']             = '42024';
                $config['max_width']            = '42600';
                $config['max_height']           = '42200';
                $this->load->library('upload', $config);

                for ($i=0; $i < $number_of_files; $i++) { 
                    $_FILES['userfile']['name'] = $file['name'][$i];
                    $_FILES['userfile']['type'] = $file['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $file['error'][$i];
                    $_FILES['userfile']['size'] = $file['size'][$i];
                    $this->load->library('upload', $config);
                    $this->upload->do_upload();
            $d = array(
                'judul'             => $this->input->post('judul'),
                'penulis'           => $this->input->post('penulis'),
                'penerbit'          => $this->input->post('penerbit'),
                'deskripsi'         => $this->input->post('deskripsi'),
                'harga'             => $this->input->post('harga'),
                'nama_kategori'     => $this->input->post('nama_kategori'),
                'sinopsis'          => $this->input->post('sinopsis'),
                'sku'               => $this->input->post('sku'),
                'isbn'              => $this->input->post('isbn'),
                'berat'             => $this->input->post('berat'),
                'dimensi'           => $this->input->post('dimensi'),
                'halaman'           => $this->input->post('halaman'),
                'cover'             => $this->input->post('cover'),
                'stok'              => $this->input->post('stok'),
                'gambar1'           =>  $file['name'][0],
                'gambar2'           => $file['name'][1],
                'gambar3'           => $file['name'][2],
                'tanggal_input'     => date('Y-m-d'),
                );
            $this->data['kode_produk'] = $this->M_produk->tambahproduk($d);
            $this->load->model("M_produk");
            $datas['data']=$this->M_produk->getproduk();
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('produk',$data);
            $this->load->view('template/footer');
        }
    }*/
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