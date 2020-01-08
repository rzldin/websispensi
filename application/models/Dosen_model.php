<?php

class Dosen_model extends CI_Model
{

	public $table 	= 'dosen';

	
	function ambil_data($id) 
	{
		$this->db->where('nidn', $id);
		return $this->db->get('dosen')->row();
	}

	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	public function ambil_id_dosen($id)
	{
		$hasil = $this->db->where('nidn',$id)->get('dosen');
		if ($hasil ->num_rows() > 0) {

			return $hasil->result();
		}else{
			return false;
		}
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function get($id = null)
	{
		$this->db->from('dosen');
		if($id !=null ) {
		$this->db->where( 'nidn', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}


	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('dosen');
		$this->db->like('nidn', $keyword);
		$this->db->or_like('nama_dosen', $keyword);
		$this->db->or_like('email', $keyword);
		return $this->db->get()->result();
	}

	public function listing()
	{
		$this->db->select('*');
		$this->db->from('dosen');
		$this->db->order_by('nidn');
		$query = $this->db->get();
		return $query->result();
	}

	public function login($post)
	{
		// echo md5($post['password']);exit;
		$this->db->select('*');
		$this->db->from('dosen');
		$this->db->where('username', $post['username']);
		$this->db->where('password', md5($post['password']));
		$query = $this->db->get();
		return $query;
	}







}