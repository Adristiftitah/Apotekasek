<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function index()
	{
		$data['Pelanggan'] = $this->Model_pelanggan->tampil_data()->result();
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('pelanggan_view',$data);
		$this->load->view('tamplates/footer');
	}

	public function tambah_aksi()
	{
		
		$nama_pelanggan 		=$this->input->post('nama_pelanggan');
		$alamat 				=$this->input->post('alamat');

		$data = array(
			'nama_pelanggan'    => $nama_pelanggan,
			'alamat '           => $alamat

		);

		$this->Model_pelanggan->input_data($data,'Pelanggan');
		redirect('Pelanggan/index');
	}

	public function hapus($kode_pelanggan){
		$where = array('kode_pelanggan' => $kode_pelanggan);
		$this->Model_pelanggan->hapus_data($where, 'Pelanggan');
		redirect ('Pelanggan/index');
	}

	public function edit_pelanggan($kode_pelanggan){
		$where = array('kode_pelanggan' => $kode_pelanggan);
		$data['Pelanggan'] = $this->Model_pelanggan->edit_pelanggan($where, 'Pelanggan')->result();
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('edit_pelanggan',$data);
		$this->load->view('tamplates/footer');	
	}

	public function update(){
		$kode_pelanggan = $this->input->post('kode_pelanggan');
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$alamat 		= $this->input->post('alamat');

		$data = array(
			'kode_pelanggan' => $kode_pelanggan,
			'nama_pelanggan' => $nama_pelanggan,
			'alamat' 		 => $alamat
		);

		$where = array(
			'kode_pelanggan' => $kode_pelanggan
		);

		$this->Model_pelanggan->update_data($where, $data, 'Pelanggan');
		redirect('Pelanggan/index');
	}

	public function search()
	{
		$keywoard = $this->input->post('keywoard');
		$data['Pelanggan'] =$this->Model_pelanggan->get_keywoard($keywoard);
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('pelanggan_view',$data);
		$this->load->view('tamplates/footer');
		# code...
	}

}

/* End of file pelanggan.php */
/* Location: ./application/controllers/pelanggan.php */ ?>