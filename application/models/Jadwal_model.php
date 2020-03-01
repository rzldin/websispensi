<?php 


class Jadwal_model extends CI_Model{


	public $table 	= 'jadwal_sempro';

	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function get_data()
	{
		$query = $this->db->get('jadwal_sempro');
		return $query->result();
	}

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

} 	