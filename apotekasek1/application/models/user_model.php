<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get($id=null)
	{
		$this->db->from('User');
		if ($id != null) {
			$this->db->where('id', $id);
		}
		$query=$this->db->get();
		return $query;
	}

	public function get_data($User)
	{
		$query = $this->db->get($User);
		return $query;
	}

	public function edit_user($where, $User){
		 return $this->db->get_where($User,$where);
	}

	public function edit_save_user($table ,$data, $where){
		$this->db->update($table, $data, $where);
	}

	public function edit_data($table, $data, $where){
        $this->db->update($table, $data, $where);
    }

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */