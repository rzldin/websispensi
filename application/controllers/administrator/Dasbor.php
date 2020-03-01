<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {


	function __construct()
	{
		parent::__construct();

		if (!isset($this->session->userdata['username'])) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Belum Login
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
							  </button>
							</div>');
				redirect('masukprd');
		}
	}


	public function index()
	{

		$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('administrator/dasbor', $data);
		$this->load->view('template_administrator/footer');
	}
}
