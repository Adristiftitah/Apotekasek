<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function index()
	{
		//$data['obat'] = $this->model_obat->tampil_data()->result();
		$data=array(
			'Obat' => $this->Model_obat->databtables()
		);
		$this->load->view('tamplates/header',$data);
		$this->load->view('tamplates/sidebar');
		$this->load->view('obat_view');
		$this->load->view('tamplates/footer');
	}

	public function tambah_aksi()
	{
		$merk_obat 			=$this->input->post('merk_obat');
		$jenis_obat 		=$this->input->post('jenis_obat');
		$harga 				=$this->input->post('harga');
		$tanggal_kadaluarsa =$this->input->post('tanggal_kadaluarsa');
		$stok 				=$this->input->post('stok');

		$data = array(
			'merk_obat'            => $merk_obat,
			'jenis_obat'           => $jenis_obat,
			'harga'                => $harga,
			'tanggal_kadaluarsa'   => $tanggal_kadaluarsa,
			'stok'   			   => $stok

		);

		$this->Model_obat->input_data($data,'Obat');
		redirect('Obat/index');
	}

	public function hapus($kode_obat){
		$where = array ('kode_obat' => $kode_obat);
		$this->Model_obat->hapus_data($where, 'Obat');
		redirect ('Obat/index');
	}

	public function edit_obat($kode_obat){
		$where = array('kode_obat' => $kode_obat);
		$data['Obat'] = $this->Model_obat->edit_obat($where, 'Obat')->result();
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('edit_obat',$data);
		$this->load->view('tamplates/footer');	
	}

	public function update(){
		$kode_obat = $this->input->post('kode_obat');
		$merk_obat = $this->input->post('merk_obat');
		$jenis_obat = $this->input->post('jenis_obat');
		$harga = $this->input->post('harga');
		$tanggal_kadaluarsa = $this->input->post('tanggal_kadaluarsa');
		$stok = $this->input->post('stok');

		$data = array(
			'kode_obat' => $kode_obat,
			'merk_obat' => $merk_obat,
			'jenis_obat' => $jenis_obat,
			'harga' => $harga,
			'tanggal_kadaluarsa' => $tanggal_kadaluarsa,
			'stok' => $stok
		);

		$where = array(
			'kode_obat' => $kode_obat
		);

		$this->Model_obat->update_data($where, $data, 'Obat');
		redirect('Obat/index');
	}

	public function search()
	{
		$keywoard = $this->input->post('keywoard');
		$data['Obat'] =$this->Model_obat->get_keywoard($keywoard);
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('obat_view',$data);
		$this->load->view('tamplates/footer');
		# code...
	}
}

/* End of file obat.php */
/* Location: ./application/controllers/obat.php */
?>