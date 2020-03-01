<?php


class Skripsi_model extends CI_Model
{
	public $table 	= 'sidang';



	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function tambah($data)
	{
		$this->db->insert('sidang',$data);
	}


	public function listing()
	{
		$this->db->select('*');
		$this->db->from('sidang');
		$this->db->order_by('id_sidang');
		$query = $this->db->get();
		return $query->result();
	}


	public function hapus_data($data)
	{
		$this->db->where('id_sidang', $data['id_sidang']);
		$this->db->delete('sidang', $data);
	}


	public function get_data()
	{
		$query = $this->db->get('jadwal_skripsi');
		return $query->result();
	}












}