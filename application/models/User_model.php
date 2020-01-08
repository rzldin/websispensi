<?php


class User_model extends CI_Model {


	public function ambil_data($id)
	{
		$this->db->where('username', $id);
		return $this->db->get('user')->row();
	}


	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id',$id);
		$this->db->order_by('id');
		$query = $this->db->get();
		return $query->row();
	}

	public function get_by_role()
  	{
      	$this->db->select('
          user.*, tbl_role.id AS id_role, tbl_role.nama
      	');
      	$this->db->join('tbl_role', 'user.level = tbl_role.id');
      	$this->db->from('user');
      	$query = $this->db->get();
      	return $query->result();
  	}

}