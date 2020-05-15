<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi extends CI_Controller {

	public function index()
	{
		// $this->form_validation->set_rules('nama', 'nama', 'required');
		// $this->form_validation->set_rules('username', 'username', 'required');
		// $this->form_validation->set_rules('password', 'password', 'required');

		// if($this->form_validation->run() || isset($_POST['submit']) == FALSE){
		// 	$this->load->view('tamplates/header_login');
		// 	$this->load->view('registrasi');
		// 	$this->load->view('tamplates/footer_login');
		// } else{
		// 	$data = array(
		// 		'id'		=> '',
		// 		'nama'		=> $this->input->post('nama'),
		// 		'username'	=> $this->input->post('username'),
		// 		'password'	=> $this->input->post('password'),
		// 		'role_id'	=> 2,
		// 	);

		// 	$this->registrasi_model->input_data($data,'registrasi');
		// 	redirect('login/index');
		// }
		$this->load->view('tamplates/header_login');
		$this->load->view('Registrasi');
		$this->load->view('tamplates/footer_login');
	}

	public function doRegister() {
		if ($this->input->post('submit')){
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('user', 'Username', 'required');
			$this->form_validation->set_rules('pass', 'Password', 'required');

			if ($this->form_validation->run()) {
				$data = array(
					'id'		=> '',
					'nama'		=> $this->input->post('nama'),
					'username'	=> $this->input->post('user'),
					'password'	=> $this->input->post('pass'),
					'role_id'	=> 2,
				);

				$register = $this->Registrasi_model->input_data($data);
				if ($register) {
					redirect('Login/index');
				} else {
					redirect('Login/false');
				}
			}
		}
	}

}

/* End of file registrasi.php */
/* Location: ./application/controllers/registrasi.php */
?>