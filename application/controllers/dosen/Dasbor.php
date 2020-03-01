<?php



class Dasbor extends CI_Controller
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


	public function home()
	{
		if (ucwords($this->uri->segment(1)) == 'Dosen') {
			redirect('welcome','refresh');
		}
		$data['dosen']	= $this->db->get_where('dosen', ['id_dosen' => $this->session->userdata('nidn')])->row_array();
		//print_r($data['dosen']);exit();
		$this->load->view('template_dosen/header');
		$this->load->view('template_dosen/sidebar', $data);
		$this->load->view('template_dosen/topbar', $data);
		$this->load->view('dosen/dasbor', $data);
		$this->load->view('template_dosen/footer');
	}















}