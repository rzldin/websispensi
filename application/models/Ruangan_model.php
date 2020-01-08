<?php


class Ruangan_model extends CI_Model
{
	
	public $table 	= 'daftar_ruangan';



	public function tampil_data($table)
	{
		return $this->db->get($table);
	}


	public function listing()
	{
		$this->db->select('*');
		$this->db->from('daftar_ruangan');
		$this->db->order_by('id_ruangan');
		$query = $this->db->get();
		return $query->result();
	}


	public function detail($id_ruangan)
	{
		$this->db->select('*');
		$this->db->from('daftar_ruangan');
		$this->db->where('id_ruangan',$id_ruangan);
		$this->db->order_by('id_ruangan');
		$query = $this->db->get();
		return $query->row();
	}


	public function tambah_ruangan($data)
	{
		$this->db->insert('daftar_ruangan',$data);
	}


	public function edit($data)
	{
		$this->db->where('id_ruangan', $data['id_ruangan']);
		$this->db->update('daftar_ruangan', $data);
	}

		public function delete($data)
	{
		$this->db->where('id_ruangan', $data['id_ruangan']);
		$this->db->delete('daftar_ruangan', $data);
	}


	public function ambil_id_ruangan($id_ruangan)
	{
		$hasil = $this->db->where('id_ruangan',$id_ruangan)->get('daftar_ruangan');
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
		$this->db->from('daftar_ruangan');
		if($id !=null ) {
		$this->db->where( 'id_ruangan', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	

}