<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_beli extends CI_Model {

	public function tampil_data()
	{
		//return $this->db->get('beli');
		$this->db->select('*','Pelanggan.nama_pelanggan');
		$this->db->from('Beli');
		$this->db->join('Pelanggan','Beli.kode_pelanggan = Pelanggan.kode_pelanggan');
		$this->db->join('Obat','Beli.kode_obat= Obat.kode_obat');
		$hasil = $this->db->get();
		return $hasil;
	}

	public function input_data($data) 
	{
		$this->db->insert('Beli',$data);
	} 

	public function hapus_data($where, $Beli){
		$this->db->where($where);
		$this->db->delete($Beli);
	}

	public function edit_beli($where, $Beli){
		 return $this->db->get_where($Beli,$where);
	}

	public function update_data($where,$data,$Beli){
		$this->db->where($where);
		$this->db->update($Beli,$data);
	}

	public function get_keywoard($keywoard)
	{
		$this->db->select('*');
		$this->db->from('Beli');
		$this->db->like('kode_pelanggan',$keywoard);
		$this->db->or_like('kode_obat',$keywoard);
		$this->db->or_like('jenis_obat',$keywoard);
		$this->db->or_like('banyak_beli',$keywoard);
		$this->db->or_like('harga',$keywoard);
		$this->db->or_like('tanggal_beli',$keywoard);
		return $this->db->get()->result();
		# code...
	}

	public function databtables()
	{
		$query = $this->db->order_by('kode_beli','DESC')->get('Beli');
		return $query->result();
	}


	/* Rest - Server */ 

	public function getBeli($id = null){
        if($id == null){
            return $this->db->get('beli')->result_array();
        }else{
            return $this->db->get_where('beli', ['kode_beli'=>$id])->result_array();
        }
    }

    public function deleteBeli($id){
        $this->db->delete('beli',['kode_beli' => $id]);
        return $this->db->affected_rows();
    }

    public function createBeli($data){
        $this->db->insert('beli', $data);
        return $this->db->affected_rows();
    }

    public function updateBeli($data, $id){
        $this->db->update('beli', $data, ['kode_beli' => $id]);
        return $this->db->affected_rows();
    }

}

/* End of file model_beli.php */
/* Location: ./application/models/model_beli.php */  
?>