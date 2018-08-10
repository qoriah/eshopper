<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
 public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');   
        $this->load->helper('form');
        $this->load->helper('nominal');
        $this->load->library('form_validation');
        $this->load->library('session');   
        $this->load->library("pagination");
        $this->load->database();
        $this->load->model('M_home');
       }

        function index() {
        $this->load->model('M_home');
        $data['is_data'] = $this->M_home->getslide()->result();
        $data['data'] =  $this->db->query('SELECT * from tbl_kategori order by id_kategori');
        $data['produk'] =  $this->db->query('SELECT * from tbl_produk order by kode_produk DESC');
         $data['terlaris'] =  $this->db->query('SELECT * from tbl_produk order by kode_produk ASC');
        $this->load->view('user/header');
        $this->load->view('user/v_home',$data);
        $this->load->view('user/footer');

        }
        public function detail($kode_produk){
            $data['kode_produk']    = $kode_produk;
            $datas['jenis']          ='terbaru';
            $data['data']           = $this->db->get_where('tbl_produk',$data);
            $data['dataproduk']     = $this->db->get('tbl_produk',$datas);
            //perbaikan jenis satuan
             $this->load->view('user/header');
            $this->load->view('user/v_detailproduk',$data);
            $this->load->view('user/footer');
        }
        public function kategori($nama_kategori){
            $data['nama_kategori']  =   $nama_kategori;
            $data['data']           =   $this->db->get_where('tbl_produk',$data);
            $this->load->view('user/header');
            $this->load->view('user/v_produk',$data);
            $this->load->view('user/footer');
        }
        function allproduk() {
        $this->load->model('M_home');
        $data['data'] =  $this->db->query('SELECT * from tbl_kategori order by id_kategori');
        $data['produk'] =  $this->db->query('SELECT * from tbl_produk order by kode_produk DESC');
        $this->load->view('user/header');
        $this->load->view('user/allproduk',$data);
        $this->load->view('user/footer');

        }
        function detailproduk($kode_produk) {
        $data['kode_produk']    = $kode_produk;
        $datas['jenis']            ='promosi';
        $data['data'] =  $this->db->query('SELECT * from tbl_kategori order by id_kategori');
        $data['produk']           = $this->db->get_where('tbl_produk',$data);
        $data['dataproduk']         = $this->db->get('tbl_produk',$datas);
        $this->load->view('user/header');
        $this->load->view('user/v_detailproduk',$data);
        $this->load->view('user/footer');

        }
        public function cart(){
            $kode_produk    = $this->input->post('kode_produk');
            $jumlah_beli    = $this->input->post('jumlah_beli');
            /*mengambil query tbl_stok*/
            $sql = "SELECT * from tbl_stok where kode_produk='$kode_produk'";
            $rs  = $this->db->query($sql);
            foreach ($rs->result() as $row) {
            }
            /*mengitung jumlah beli*/
            $stok = $row->stok;

            $jumlah = $jumlah_beli;
            
            // Mencari jenis produk

            if($stok < $jumlah){
                ?>
                <script type="text/javascript">
                        alert("maaf Stok Tidak Mencukupi");
                </script>
                <meta http-equiv="refresh" content="0; detail/<?php echo $kode_produk ?>">
                <?php
            } elseif ($stok == NULL) {
               ?>
                <script type="text/javascript">
                        alert("maaf jenis satuan tidak ada !");
                </script>
                <meta http-equiv="refresh" content="0; detail/<?php echo $kode_produk ?>">
                <?php
            }
            else{


            $data = array(
            'id'      => $kode_produk,
            'qty'     => $jumlah_beli,
            'price'   => $jenis,
            'name'    => $ukuran
            );
            $this->cart->insert($data);
            redirect('home/checkout');
            }//end else jumlah
        }
        public function checkout(){

            $table = 'tbl_cart';
            $data['kodeunik'] = $this->model_barang->getkodeinvoice($table); 
            $data['content']     = 'v_checkout';
             $this->load->view('user/header');
        $this->load->view('user/v_checkout',$data);
        $this->load->view('user/footer');
        }

    }
?>