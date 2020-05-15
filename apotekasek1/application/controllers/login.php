<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('tamplates/header_login');
			$this->load->view('Login/index');	
			$this->load->view('tamplates/footer_login');
		}else{
			$Login = $this->Login_model->cek_login();

			if($Login == FALSE){
				$this->session->set_flashdata('pesan');
				redirect('Login/index');
			}else{
				$this->session->set_userdata('username', $Login->username);
				$this->session->set_userdata('role_id', $Login->role_id);

				switch ($Login->role_id) {
					case 1: redirect('Admin/dashboard');
						break;
					case 2 : redirect('Admin/user');
						break;

					default : break;
				}
			}
		}
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */ ?>