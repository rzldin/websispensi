<?php


class Pendaftaran_sempro extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if (!isset($this->session->userdata['username'])) {
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Belum Login
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('administrator/auth');
		
		}
	}


	public function index()
	{

		$this->load->model('sempro_model');
		$data['user']		= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['sempro']		= $this->sempro_model->listing();
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('skripsi/lihat_pengajuan_sempro', $data);
		$this->load->view('template_administrator/footer');
	}




	








}