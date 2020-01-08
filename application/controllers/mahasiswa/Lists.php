<?php
class Lists extends CI_Controller
{
	public function index()
	{
		$this->load->model('proposal_model');
		


		$data = array(	
			'title'   => 'SISPENSI UTS2019',
	  		'isi'		=> 'mahasiswa/list'

	  );

		$data['mahasiswa']	= $this->db->get_where('mahasiswa', ['id' => $this->session->userdata('nim')])->row_array();
		$data['proposal']	= $this->proposal_model->listing_where($this->session->userdata('nim'));

		$this->load->view('template_mahasiswa/wrapper', $data, FALSE);

	}



}