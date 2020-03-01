<?php


class Penjadwalan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('jadwal_model');
		$this->load->model('skripsi_model');
	}

	public function index()
	{
		$this->load->model('jadwal_model');
		$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['jadwal_sempro']	=	$this->jadwal_model->get_data('jadwal_sempro');
		//print_r($data['jadwal_sempro']);die();

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('jadwal/daftar_jadwal_sempro', $data);
		$this->load->view('template_administrator/footer');

	}


	public function sidang()
	{
		// $this->load->model('jadwal_model');
		$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['jadwal_sidang']	=	$this->skripsi_model->get_data('jadwal_skripsi');
		//print_r($data['jadwal_sempro']);die();

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('jadwal/daftar_jadwal_sidang', $data);
		$this->load->view('template_administrator/footer');

	}




	public function jadwal_sempro($id)
		{

			$this->load->model(['topikskripsi_model','dosen_model','proposal_model','mahasiswa_model','ruangan_model']);

			$data['penguji1']		= $this->dosen_model->listing();
			//$data['penguji2']		= $this->dosen_model->listing();
			$data['kelas'] = $this->ruangan_model->listing();
			$where = array('id_proposal' => $id );
			$data['proposal'] = $this->db->query("select * from proposal pro where pro.id_proposal='$id'")->result();
			$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
			$data['mahasiswa']	= $this->db->query("select * from mahasiswa mhs where mhs.nama_lengkap='$id'")->result();
			$data['detail'] = $this->mahasiswa_model->get($id);

			//$data['proposal']	= $this->proposal_model->listing_where($id);
			//print_r($data['kelas']);die();
			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar');
			$this->load->view('template_administrator/topbar', $data);
			$this->load->view('jadwal/jadwal_sempro', $data);
			$this->load->view('template_administrator/footer');

		}


	public function jadwal_sempro_aksi()
	{
		$this->load->model(['topikskripsi_model','dosen_model','proposal_model','mahasiswa_model','ruangan_model','jadwal_model']);

		$nim 				= $this->input->post('nim');
		$dosbing1			= $this->input->post('dosbing1');
		$nama_hari			= $this->input->post('nama_hari');
		$waktu_mulai		= $this->input->post('waktu_mulai');
		$waktu_akhir		= $this->input->post('waktu_akhir');
		$judul				= $this->input->post('judul');
		$penguji1			= $this->input->post('penguji1');
		$kelas				= $this->input->post('kelas');

		$data = array(
							'nim'			=> $nim,
							'dosbing1'		=> $dosbing1,
							'nama_hari'		=> $nama_hari,
							'waktu_mulai'	=> $waktu_mulai,
							'waktu_akhir'	=> $waktu_akhir,
							'judul'			=> $judul,
							'penguji1'		=> $penguji1,
							'kelas'			=> $kelas

						);

		$this->jadwal_model->insert_data($data, 'jadwal_sempro');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Jadwal Sempro Berhasil dibuat!
				<button type="button" class="close" data-dismiss="alert">

				</button>
				</div>');
			redirect('administrator/penjadwalan');

	}



	public function hapus($id)
	{
		$where = array('kd_jadwal_sempro' => $id );
		$this->jadwal_model->hapus_data($where,'jadwal_sempro');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Jadwal Berhasil dihapus!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('administrator/penjadwalan');
	}





		public function jadwal_sidang($id)
		{

			$this->load->model(['topikskripsi_model','dosen_model','proposal_model','mahasiswa_model','ruangan_model']);

			$data['penguji1']		= $this->dosen_model->listing();
			$data['penguji2']		= $this->dosen_model->listing();
			$data['kelas'] = $this->ruangan_model->listing();
			$where = array('id_proposal' => $id );
			$data['proposal'] = $this->db->query("select * from proposal pro where pro.id_proposal='$id'")->result();
			$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
			$data['mahasiswa']	= $this->db->query("select * from mahasiswa mhs where mhs.nama_lengkap='$id'")->result();
			$data['detail'] = $this->mahasiswa_model->get($id);

			//$data['proposal']	= $this->proposal_model->listing_where($id);
			//print_r($data['kelas']);die();
			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar');
			$this->load->view('template_administrator/topbar', $data);
			$this->load->view('jadwal/jadwal_sidang', $data);
			$this->load->view('template_administrator/footer');

		}

























	
}