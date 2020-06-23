<?php


class Mahasiswa_model extends CI_Model
{

	public $table 	= 'mahasiswa';
	
	function ambil_data($id) 
	{
		$this->db->where('nim', $id);
		return $this->db->get('mahasiswa')->row();
	}


	public function login($post)
	{
		// echo md5($post['password']);exit;
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->where('nim', $post['username']);
		$this->db->where('password', md5($post['password']));
		$query = $this->db->get();
		return $query;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}


	public function ambil_id_mahasiswa($id)
	{
		$hasil = $this->db->where('id',$id)->get('mahasiswa');
		if ($hasil ->num_rows() > 0) {

			return $hasil->result();
		}else{
			return false;
		}
	}

	public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function get($id = null)
	{
		$this->db->from('mahasiswa');
		if($id !=null ) {
		$this->db->where( 'id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->where('id',$id);
		$this->db->order_by('id');
		$query = $this->db->get();
		return $query->row();
	}


	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->like('nim', $keyword);
		$this->db->or_like('nama_lengkap', $keyword);
		$this->db->or_like('email', $keyword);
		return $this->db->get()->result();
	}

	





}