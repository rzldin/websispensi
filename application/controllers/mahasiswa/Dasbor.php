<?php


class Dasbor extends CI_Controller
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


		public function home()
		{	
			

			$data = array(	
							'title'   => 'SISPENSI UTS2019',
					  		'isi'		=> 'mahasiswa/dasbor'

						  );
			$data['mahasiswa']	= $this->db->get_where('mahasiswa', ['id' => $this->session->userdata('nim')])->row_array();
			
			$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
		}


		public function profil_mahasiswa()
		{	

			$data = array(	
							'title' 	=> 'SISPENSI UTS2019',
					  		'isi'		=> 'mahasiswa/profil_mahasiswa'

						  );
			$data['mahasiswa']	= $this->db->get_where('mahasiswa', ['id' => $this->session->userdata('nim')])->row_array();

			$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
			
			
		}


		public function logout()
		{
			$this->session->sess_destroy();
			echo "<script>
					alert('Anda berhasil keluar!');
					window.location='".site_url('masukmhs')."';
				  </script>";
		}

















}