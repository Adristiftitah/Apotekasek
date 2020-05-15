<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function dashboard()
	{
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('tamplates/footer');
	}

	public function user()
	{
		$this->load->view('tamplates/header_user');
		$this->load->view('user');
		$this->load->view('tamplates/footer_user');
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */ ?>