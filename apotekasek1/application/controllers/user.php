<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{ 
		$data['User']= $this->User_model->get_data('User')->result();
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('tabel_user',$data);
		$this->load->view('tamplates/footer');
	}

	public function edit_user($id){
        $where = array('id'=> $id);
        $data['User'] = $this->User_model->edit_user($where, 'User')->result();
        //$data['user'] = $this->db->query("SELECT * FROM user us WHERE us.id='$id'")->result();
        $this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('edit_user',$data);
		$this->load->view('tamplates/footer');
    }

   	public function edit_user_simpan(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Alamat', 'required');
        $this->form_validation->set_rules('role_id', 'Role_id', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        $id = $this->input->post('id');
        if($this->form_validation->run() == FALSE){
            $this->edit_user($id);
        }else{
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            // if(is_null($this->input->post('password'))){
            // }else{
            //     $password = md5($this->input->post('password'));
            // }
            $password = $this->input->post('password');
            $role_id = $this->input->post('role_id');
            $status = $this->input->post('status');
      
            $data = array(
               'nama' => $nama,
               'username' => $username,
               'password' => $password,
               'role_id' => $role_id,
               'status' => $status
            );

            $where = array(
                'id' => $id
            );

            $this->User_model->edit_data('User', $data, $where);
            $this->session->set_flashdata('pesan','
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data user Berhasil Diubah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('User/index');
        }
    }

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */ ?>