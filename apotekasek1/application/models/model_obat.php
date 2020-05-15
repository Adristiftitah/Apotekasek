<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_obat extends CI_Model {

	public function tampil_data()
	{
		return $this->db->get('Obat');
	}

	public function input_data($data) 
	{
		$this->db->insert('Obat',$data);
	} 

	public function hapus_data($where, $Obat){
		$this->db->where($where);
		$this->db->delete($Obat);
	}

	public function edit_obat($where, $Obat){
		 return $this->db->get_where($Obat,$where);
	}

	public function update_data($where,$data,$Obat){
		$this->db->where($where);
		$this->db->update($Obat,$data);
	}

	public function get_keywoard($keywoard)
	{
		$this->db->select('*');
		$this->db->from('Obat');
		$this->db->like('merk_obat',$keywoard);
		$this->db->or_like('jenis_obat',$keywoard);
		$this->db->or_like('harga',$keywoard);
		$this->db->or_like('tanggal_kadaluarsa',$keywoard);
		$this->db->or_like('stok',$keywoard);
		return $this->db->get()->result();
		# code...
	}

	public function databtables()
	{
		$query = $this->db->order_by('kode_obat','DESC')->get('Obat');
		return $query->result();
	}


	/* Rest - Server */ 

	public function getObat($id = null){
        if($id == null){
            return $this->db->get('obat')->result_array();
        }else{
            return $this->db->get_where('obat', ['kode_obat'=>$id])->result_array();
        }
    }

    public function deleteObat($id){
        $this->db->delete('obat',['kode_obat' => $id]);
        return $this->db->affected_rows();
    }

    public function createObat($data){
        $this->db->insert('obat', $data);
        return $this->db->affected_rows();
    }

    public function updateObat($data, $id){
        $this->db->update('obat', $data, ['kode_obat' => $id]);
        return $this->db->affected_rows();
    }


}

/* End of file model_obat.php */
/* Location: ./application/models/model_obat.php */ ?>