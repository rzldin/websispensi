<?php


class Topikskripsi_model extends CI_Model
{
	
	public $table 	= 'topik_skripsi';



	public function tampil_data($table)
	{
		return $this->db->get($table);
	}


	public function listing()
	{
		$this->db->select('*');
		$this->db->from('topik_skripsi');
		$this->db->order_by('id_topik_skripsi');
		$query = $this->db->get();
		return $query->result();
	}


	public function detail($id_topik_skripsi)
	{
		$this->db->select('*');
		$this->db->from('topik_skripsi');
		$this->db->where('id_topik_skripsi',$id_topik_skripsi);
		$this->db->order_by('id_topik_skripsi');
		$query = $this->db->get();
		return $query->row();
	}


	public function tambah($data)
	{
		$this->db->insert('topik_skripsi',$data);
	}


	public function edit($data)
	{
		$this->db->where('id_topik_skripsi', $data['id_topik_skripsi']);
		$this->db->update('topik_skripsi', $data);
	}

		public function delete($data)
	{
		$this->db->where('id_topik_skripsi', $data['id_topik_skripsi']);
		$this->db->delete('topik_skripsi', $data);
	}


	public function ambil_id_topikskripsi($id_topik_skripsi)
	{
		$hasil = $this->db->where('id_topik_skripsi',$id_topik_skripsi)->get('topik_skripsi');
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
		$this->db->from('topik_skripsi');
		if($id !=null ) {
		$this->db->where( 'id_topik_skripsi', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	

}