<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beli extends CI_Controller {

	public function index()
	{

		$data['Beli'] = $this->Model_beli->tampil_data()->result();
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('beli_view',$data);
		$this->load->view('tamplates/footer');
	}

	public function tambah_aksi()
	{
		$kode_pelanggan		=$this->input->post('kode_pelanggan');
		$kode_obat 		    =$this->input->post('kode_obat');
		$jenis_obat			=$this->input->post('jenis_obat');
		$banyak_beli        =$this->input->post('banyak_beli');
		$harga 				=$this->input->post('harga');
		$tanggal_beli 		=$this->input->post('tanggal_beli');

		$data = array(
			'kode_pelanggan'       => $kode_pelanggan,
			'kode_obat'            => $kode_obat,
			'jenis_obat'           => $jenis_obat,
			'banyak_beli'          => $banyak_beli,
			'harga'   			   => $harga,
			'tanggal_beli'   	   => $tanggal_beli


		);

		$this->model_beli->input_data($data,'Beli');
		redirect('Beli/index');
	}

	public function FunctionName($value='')
	{
		# code...
	}

	public function hapus($kode_beli){
		$where = array('kode_beli' => $kode_beli);
		$this->Model_beli->hapus_data($where, 'Beli');
		redirect ('Beli/index');
	}

	public function edit_beli($kode_beli){
		$where = array('kode_beli' => $kode_beli);
		$data['Beli'] = $this->Model_beli->edit_beli($where, 'Beli')->result();
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('edit_beli',$data);
		$this->load->view('tamplates/footer');	
	}

	public function update(){
		$kode_beli = $this->input->post('kode_beli');
		$kode_pelanggan = $this->input->post('kode_pelanggan');
		$kode_obat = $this->input->post('kode_obat');
		$jenis_obat = $this->input->post('jenis_obat');
		$banyak_beli = $this->input->post('banyak_beli');
		$harga = $this->input->post('harga');
		$tanggal_beli = $this->input->post('tanggal_beli');

		$data = array(
			'kode_beli' => $kode_beli,
			'kode_pelanggan' => $kode_pelanggan,
			'kode_obat' => $kode_obat,
			'jenis_obat' => $jenis_obat,
			'banyak_beli' => $banyak_beli,
			'harga' => $harga,
			'tanggal_beli' => $tanggal_beli
		);

		$where = array(
			'kode_beli' => $kode_beli
		);

		$this->Model_beli->update_data($where, $data, 'Beli');
		redirect('Beli/index');
	}

	public function search()
	{
		$keywoard = $this->input->post('keywoard');
		$data['Beli'] =$this->Model_beli->get_keywoard($keywoard);
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('beli_view',$data);
		$this->load->view('tamplates/footer');
		# code...
	}

}

/* End of file beli.php */
/* Location: ./application/controllers/beli.php */ ?>