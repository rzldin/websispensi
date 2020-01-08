<?php


class Proposal_model extends CI_Model
{
	public $table 	= 'proposal';



	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function tambah($data)
	{
		$this->db->insert('proposal',$data);
	}


	public function listing()
	{
		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->order_by('id_proposal');
		$query = $this->db->get();
		return $query->result();
	}

	public function listing_where($id)
	{
		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->where('nim', $id);
		$this->db->order_by('id_proposal');
		$query = $this->db->get();
		return $query->result();
	}

	public function listing_where2($nama_dosen)
	{
		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->where('dosbing1', $nama_dosen);
		$this->db->order_by('id_proposal');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus_data($data)
	{
		$this->db->where('id_proposal', $data['id_proposal']);
		$this->db->delete('proposal', $data);
	}


	public function view_list($nim)
   	{
       $this->db->select("*");
	    $this->db->from('proposal');
	    $this->db->where('id_proposal', $this->session->userdata('nim'));
	    return $this->db->get();
  	}









}