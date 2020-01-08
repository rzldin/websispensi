<?php


class Sempro_model extends CI_Model
{
	public $table 	= 'sempro';



	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function tambah($data)
	{
		$this->db->insert('sempro',$data);
	}


	public function listing()
	{
		$this->db->select('*');
		$this->db->from('sempro');
		$this->db->order_by('id_sempro');
		$query = $this->db->get();
		return $query->result();
	}


	public function hapus_data($data)
	{
		$this->db->where('id_sempro', $data['id_sempro']);
		$this->db->delete('sempro', $data);
	}















}