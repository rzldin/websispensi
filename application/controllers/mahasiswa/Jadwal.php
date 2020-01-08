<?php



class Jadwal extends CI_Controller
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


	public function sempro ()
	{
		$this->load->model('jadwal_model');

		$data = array(	
						'title'  	=> 'SISPENSI UTS2019',
					  	'isi'		=> 'mahasiswa/jadwal/jadwal_sempro'
					);
		$data['mahasiswa']	= $this->db->get_where('mahasiswa', ['id' => $this->session->userdata('nim')])->row_array();
		$data['jadwal']	= $this->jadwal_model->get_data($this->session->userdata('nim'));


		$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
	}


	public function sidang ()
	{

		$data = array(	
						'title'  	=> 'SISPENSI UTS2019',
					  	'isi'		=> 'mahasiswa/jadwal/jadwal_sidang'
					);
		$data['mahasiswa']	= $this->db->get_where('mahasiswa', ['id' => $this->session->userdata('nim')])->row_array();


		$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
	}


	public function pdf()
	{
		$this->load->library('dompdf_gen');
		$this->load->model('jadwal_model');

		$data['jadwal_sempro']	=	$this->jadwal_model->get_data($this->session->userdata('nim'));
		$this->load->view('laporan_sempro',$data);

		$paper_size	= 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size,$orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("jadwal_sempro.pdf", array('Attachment' => 0));
	}















}