<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$this->session->unset_userdata('is_login');
		$this->session->unset_userdata('is_nama');
		$this->session->unset_userdata('is_id');
		session_destroy();
		redirect('user','refresh');
	}

}

/* End of file Logout.php */
/* Location: ./application/controllers/Logout.php */