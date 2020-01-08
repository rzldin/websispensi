<?php



class Info extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if (!isset($this->session->userdata['nim'])) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Belum Login
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
							  </button>
							</div>');
				redirect('login/mahasiswa');

		$this->load->model('mahasiswa_model');
		}
	}



	public function sispensi()
	{
		$data = array(
						'title' => 'SISPENSI UTS 2019',
						'isi'	=>	'mahasiswa/sispensi/info_sispensi'
					 );
		$data['mahasiswa']	= $this->db->get_where('mahasiswa', ['id' => $this->session->userdata('nim')])->row_array();
		$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
	}




	public function persyaratan()
	{
		$data = array(
						'title' => 'SISPENSI UTS 2019',
						'isi'	=>	'mahasiswa/sispensi/info_syarat'
					 );
		$data['mahasiswa']	= $this->db->get_where('mahasiswa', ['id' => $this->session->userdata('nim')])->row_array();
		$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
	}




	public function kategori()
	{
		$data = array(
						'title' => 'SISPENSI UTS 2019',
						'isi'	=>	'mahasiswa/sispensi/info_kategori'
					 );
		$data['mahasiswa']	= $this->db->get_where('mahasiswa', ['id' => $this->session->userdata('nim')])->row_array();
		$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
	}


































}