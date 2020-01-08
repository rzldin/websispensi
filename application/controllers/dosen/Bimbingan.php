<?php


class Bimbingan extends CI_Controller
{
	

	public function index()
	{
		$this->load->model('proposal_model');
		$data['dosen']	= $this->db->get_where('dosen', ['id_dosen' => $this->session->userdata('nidn')])->row_array();
		$data['proposal']	= $this->proposal_model->listing_where2($data['dosen']['nama_dosen']);
			
		$this->load->view('template_dosen/header');
		$this->load->view('template_dosen/sidebar', $data);
		$this->load->view('template_dosen/topbar', $data);
		$this->load->view('dosen/view_bimbingan', $data);
		$this->load->view('template_dosen/footer');
	}


















}