<?php


class Pengajuan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		if (!isset($this->session->userdata['nidn'])) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Belum Login
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
							  </button>
							</div>');
				redirect('login/dosen');
		}
	}

	public function index()
	{
		$this->load->model('proposal_model');
		


		$data = array(	
			'title'   => 'SISPENSI UTS2019',

	  );

		$data['dosen']	= $this->db->get_where('dosen', ['id_dosen' => $this->session->userdata('nidn')])->row_array();
		$data['proposal']	= $this->proposal_model->listing_where2($data['dosen']['nama_dosen']);
		//print_r($data['proposal']);die();
		$this->load->view('template_dosen/header');
		$this->load->view('template_dosen/sidebar', $data);
		$this->load->view('template_dosen/topbar', $data);
		$this->load->view('dosen/view_pengajuan', $data);
		$this->load->view('template_dosen/footer');

	}


}