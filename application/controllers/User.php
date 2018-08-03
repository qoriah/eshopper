<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
 public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');   
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');    
        $this->load->model('M_user');
    }

          function index() {
          $this->load->view('header');
          $this->load->view('v_login');
          $this->load->view('footer');
          }
//this function will do the login process 
            function proseslogin() {
            $username = $this->input->post('username'); //read the username that filled by the user
            $password = $this->input->post('password'); //read the password that filled by the user
            $passwordx = md5($password); //this is for change $password into MD5 form
            //the query is to matching the username+password user with username+password from database
            $q = $this->db->query("SELECT * FROM tbl_admin WHERE username='$username' AND password='$passwordx'");
            if ($q->num_rows() == 1) { 
            // if the query is TRUE, then save the username into session and load the welcome view
            $nama = $q->row()->username;
            $this->session->set_userdata('username',$nama);

              redirect('user/registerview');
        }
            else { 
            // query error
            $data['error']='!! Wrong Username or Password !!';
             $this->load->view('header');
            $this->load->view('v_login', $data);
             $this->load->view('footer');
        }
     }
    //to do logout process
    function logout() { 
    $this->session->sess_destroy();
    $data['logout'] = 'You have been logged out.';      
    $this->load->view('v_login', $data);
    }
    function registerview() {
      $this->load->view('header');
      $this->load->view('v_register');
      $this->load->view('footer');
      }
    function register(){
    $this->load->model("M_user");
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username','username','required');
    $this->form_validation->set_rules('email','email','required');
    $this->form_validation->set_rules('password','password','required');
    if($this->form_validation->run() != true ){
      redirect("registerview");
    }
      else{
      $d = array(
        'username'=> $this->input->post('username'),
        'email' => $this->input->post('email'),
        'password' => md5($this->input->post('password')),
        );
      $this->M_user->register($d);
      redirect('user'); 
    } 
      
  }
}
?>