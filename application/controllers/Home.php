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
        $this->load->library('cart');  
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
        public function cart() {
        $data = array();
        $data['cart_contents'] = $this->cart->contents();
        $this->load->view('user/header');
        $this->load->view('user/v_checkout',$data);
        $this->load->view('user/footer');
        }
        public function save_cart() {
        $this->load->library('cart');
        $data = array();
        $kode_produk = $this->input->post('kode_produk');
        $judul = $this->input->post('judul');
        $results = $this->web_model->get_product_by_id($kode_produk);
        $data['id'] = $results->kode_produk;
        $data['name'] = $results->judul;
        $data['price'] = $results->harga;
        $data['qty'] = $this->input->post('qty');
        $data['options'] = array('gambar1' => $results->gambar1);

        $this->cart->insert($data);
        redirect('cart');
    }
         public function update_cart() {
         $data = array();
        $data['qty'] = $this->input->post('qty');
        $data['rowid'] = $this->input->post('rowid');

        $this->cart->update($data);
        redirect('cart');
    }
    public function customer_login() {
        $data = array();
       $this->load->view('user/header');
        $this->load->view('user/v_customerlogin');
        $this->load->view('user/footer');
    }
    public function customer_register() {
        $data = array();
        $this->load->view('user/header');
        $this->load->view('user/v_customerregister');
        $this->load->view('user/footer');
    }
    public function customer_shipping() {
        $data = array();
        $this->load->view('user/header');
        $this->load->view('user/v_customershipping');
        $this->load->view('user/footer');
    }
     public function customer_save() {
    $this->load->model('M_produk');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('customer_name','customer_name','required');
    $this->form_validation->set_rules('customer_email', 'Customer Email', 'trim|required|valid_email|is_unique[tbl_customer.customer_email]');
    if($this->form_validation->run() != true ){
      $this->session->set_flashdata('message', 'Email tidak boleh sama');
    redirect('home/customer_register');
            }else{              
        $d = array(
            'customer_id' => $this->input->post('customer_id'),
            'customer_name' => $this->input->post('customer_name'),
            'customer_email' => $this->input->post('customer_email'),   
            'customer_password' =>  md5($this->input->post('customer_password')),
            'customer_address' =>  $this->input->post('customer_address'),
            'customer_city' => $this->input->post('customer_city'),
            'customer_country' => $this->input->post('customer_country'),
            'customer_phone' => $this->input->post('customer_phone'),
            'customer_zipcode' => $this->input->post('customer_zipcode'),
                );
                $this->M_produk->save_customer_info($d);
                redirect('home/register_success');
        }
        }   
        public function register_success() {
        $customer_name = $this->session->flashdata('customer_name');
        if (!$customer_name) {
        $this->load->view('user/header');
        $this->load->view('user/v_registersuccess');
        $this->load->view('user/footer');
        }
        $data = array();
        $this->load->view('user/header');
        $this->load->view('user/v_customerregister');
        $this->load->view('user/footer');
    }
    public function customer_logincheck() {
        $data = array();
        $data['customer_email'] = $this->input->post('customer_email');
        $data['customer_password'] = md5($this->input->post('customer_password'));

        $this->form_validation->set_rules('customer_email', 'Customer Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('customer_password', 'Customer Password', 'trim|required');

        if ($this->form_validation->run() == true) {
            $result = $this->web_model->get_customer_info($data);
            if ($result) {
                $this->session->set_userdata('customer_id', $result->customer_id);
                $this->session->set_userdata('customer_email', $data['customer_email']);
                redirect('home');
            } else {
                $this->session->set_flashdata('message', 'Customer Login Fail');
                redirect('home/customer_login');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('home/customer_login');
        }
    }
   public function search() {

        $search = $this->input->get('search');
        
        if(!empty($search)){
            $data = array();
            $data['get_all_product'] = $this->web_model->get_all_search_product($search);
            $data['search'] = $search;

            if ($data['get_all_product']) {
        $this->load->view('user/header');
        $this->load->view('user/v_search', $data);
        $this->load->view('user/footer');
            } else {
                redirect('error');
            }
        }
        else {
                redirect('error');
            }
    }
    public function customer_shipping_register() {
        $this->load->model('M_produk');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('shipping_name','shipping_name','required');
    if($this->form_validation->run() != true ){
      $this->session->set_flashdata('message', 'Email tidak boleh sama');
    redirect('home/user_form');
            }else{              
        $d = array(
            'shipping_id'   => $this->input->post('shipping_id'),
            'customer_id' => $this->input->post('customer_id'),
            'shipping_name' => $this->input->post('shipping_name'),
            'shipping_email' => $this->input->post('shipping_email'),   
            'shipping_address' =>  $this->input->post('shipping_address'),
            'shipping_city' => $this->input->post('shipping_city'),
            'shipping_country' => $this->input->post('shipping_country'),
            'shipping_phone' => $this->input->post('shipping_phone'),
            'shipping_zipcode' => $this->input->post('shipping_zipcode'),
                );
                $this->M_produk->save_shipping_address($d);
                redirect('home/checkoutreal');
        }
        }   
         public function save_order() {
        $data['payment_type'] = $this->input->post('payment');

        $this->form_validation->set_rules('payment', 'Payment', 'trim|required');

        if ($this->form_validation->run() == true) {
            $payment_id = $this->web_model->save_payment_info($data);
            $odata = array();
            $odata['customer_id'] = $this->session->userdata('customer_id');
            $odata['shipping_id'] = $this->session->userdata('shipping_id');
            $odata['payment_id'] = $payment_id;
            $tax = ($this->cart->total() * 15) / 100;
            $odata['order_total'] = $tax + $this->cart->total();

            $order_id = $this->web_model->save_order_info($odata);

            $oddata = array();

            $myoddata = $this->cart->contents();



            foreach ($myoddata as $oddatas) {


                $oddata['order_id'] = $order_id;
                $oddata['product_id'] = $oddatas['id'];
                $oddata['product_name'] = $oddatas['name'];
                $oddata['product_price'] = $oddatas['price'];
                $oddata['product_sales_quantity'] = $oddatas['qty'];
                $oddata['product_image'] = $oddatas['options']['product_image'];
                $this->web_model->save_order_details_info($oddata);
            }

            if ($payment_method == 'paypal') {
                
            }
            if ($payment_method == 'cashon') {
                
            }


            $this->cart->destroy();

            redirect('payment');
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('checkout');
        }
    }

    public function user_form() {
        $data = array();
        $this->load->view('user/header');
        $this->load->view('user/v_userform');
        $this->load->view('user/footer');
    }
     public function remove_cart() {

         $data = $this->input->post('rowid');
        $this->cart->remove($data);
        redirect('cart');
    }
        public function checkout(){

        $table = 'tbl_cart';
        $data['kodeunik'] = $this->M_produk->getkodeinvoice($table); 
        $this->load->view('user/header');
        $this->load->view('user/v_checkout',$data);
        $this->load->view('user/footer');
        }
        
         public function checkoutreal(){

       $data = array();
        $this->load->view('user/header');
        $this->load->view('user/v_checkoutreal');
        $this->load->view('user/footer');
        }
    }
?>