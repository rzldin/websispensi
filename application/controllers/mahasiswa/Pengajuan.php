<?php


class Pengajuan extends CI_Controller
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
 

	public function judul ()
	{
		$this->load->model(['topikskripsi_model','dosen_model']);
		$topik_skripsi = $this->topikskripsi_model->get();
		
		$dosbing1	=	$this->dosen_model->get();

		$data = array(	
						'title'  	=> 'SISPENSI UTS2019',
					  	'isi'		=> 'mahasiswa/skripsi/pengajuan_judul',
					  	'topik_skripsi'	=> $topik_skripsi,
					  	'dosbing1'		=> $dosbing1,
					);
		$data['mahasiswa']	= $this->db->get_where('mahasiswa', ['id' => $this->session->userdata('nim')])->row_array();

		//var_dump($data['mahasiswa']);


		$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
	}


	public function sempro ()
	{
		$data = array(	
						'title'  	=> 'SISPENSI UTS2019',
					  	'isi'		=> 'mahasiswa/skripsi/pengajuan_sempro'

					);
		$data['mahasiswa']	= $this->db->get_where('mahasiswa', ['id' => $this->session->userdata('nim')])->row_array();

		$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
	}


	public function sidang_skripsi ()
	{
		$data = array(	
						'title'  	=> 'SISPENSI UTS2019',
					  	'isi'		=> 'mahasiswa/skripsi/pengajuan_sidang'

					);
		$data['mahasiswa']	= $this->db->get_where('mahasiswa', ['id' => $this->session->userdata('nim')])->row_array();

		$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
	}


	public function ajukan()
	{
		
		
	}



	private function _uploadTA()
	{
	    $config['upload_path']          = './assets/fileskripsi/';
	    $config['allowed_types']        = 'pdf';
	    $config['file_name']            = $this->login['nim'];
	    $config['overwrite']			= true;
	    $config['max_size']             = 102400;

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('file_skripsi')) {
	        return $this->upload->data("file_name");
	    }else{
	    	return print_r( $this->upload->display_errors());
	    }
	    
	}
	


























}