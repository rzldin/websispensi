<?php 


class Jadwal_model extends CI_Model{


	public $table 	= 'jadwal_sempro';

	// function insert($data){
	// 	if($data['nama_hari']=="" || $data['waktu_mulai']=="" || $data['waktu_akhir']=="" || $data['judul']=="" || $data['kode_ruangan']=="")
	// 		return 0;
	// 	$str = $this->db->insert_string('jadwal_skripsi', $data);
	// 	$query = $this->db->query($str);
	// 	return $query;
	// }
	// function get_all(){
	// 	$query = $this->db->get('jadwal_skripsi');
	// 	return $query->result();
	// }
	// function get($kode_jadwal){
	// 	$query = $this->db->get_where('jadwal_skripsi', array('kode_jadwal' => $kode_jadwal));
	// 	return $query->result();
	// }
	// function update($data){
	// 	if($data['kode_jadwal']=="" || $data['nama_hari']=="" || $data['waktu_mulai']=="" || $data['waktu_akhir']=="" || $data['judul']=="" || $data['kode_ruangan']=="")
	// 		return 0;
	// 	$query = $this->db->update('jadwal_skripsi', $data, array('kode_jadwal' => $data['kode_jadwal']));
	// 	return $query;
	// }
	// function delete($kode_jadwal){
	// 	$query = $this->db->delete('jadwal_skripsi', array('kode_jadwal' => $kode_jadwal));
	// 	return $query;
	// }

	// function listing_where($id)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('jadwal_skripsi');
	// 	$this->db->where('judul', $id);
	// 	$this->db->order_by('kode_jadwal');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }

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