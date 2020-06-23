<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {



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
		$data['mahasiswa']	= $this->mahasiswa_model->tampil_data('mahasiswa')->result();
		$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('administrator/daftar_mahasiswa', $data);
		$this->load->view('template_administrator/footer');
	}



	public function detail($id)
	{
		$data['detail']	= $this->mahasiswa_model->ambil_id_mahasiswa($id);
		$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('administrator/detail_mahasiswa', $data);
		$this->load->view('template_administrator/footer');
	}



	public function tambah_mahasiswa()
	{
		$data = array(			
						'nama_lengkap'	=> set_value('nama'),
						'nim'			=> set_value('nim'),
						'email'			=> set_value('email'),
						'password'		=> set_value('password'),
						'telepon'		=> set_value('telepon'),
						'blokir'		=> set_value('blokir'),
						'jenis_kelamin'	=> set_value('jenis_kelamin'),
						'photo'			=> set_value('photo')

					 );
		$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('administrator/form_mahasiswa', $data);
		$this->load->view('template_administrator/footer');
	}


	public function tambah_mahasiswa_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_mahasiswa();
		}else{
				$nim				= $this->input->post('nim');
				$password			= md5($this->input->post('password'));
				$nama_lengkap		= $this->input->post('nama_lengkap');
				$email				= $this->input->post('email');
				$blokir				= $this->input->post('blokir');
				$telepon			= $this->input->post('telepon');
				$jenis_kelamin		= $this->input->post('jenis_kelamin');
				$photo				= $_FILES['photo'];
				if ($photo=''){

				}else{
					$config['upload_path']		=	'./assets/uploads';
					$config['allowed_types']	=	'jpg|png|gif|tiff';

					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('photo')) {
						echo "Upload Gagal!"; die();
					}else{
						$photo=$this->upload->data('file_name');
					}
				}
			$data = array(
							'nim'			=> $nim,
							'password'		=> $password,
							'nama_lengkap'	=> $nama_lengkap,
							'email'			=> $email,
							'telepon'		=> $telepon,
							'blokir'		=> $blokir,
							'jenis_kelamin'	=> $jenis_kelamin,
							'photo'			=> $photo

						);

			$this->mahasiswa_model->insert_data($data, 'mahasiswa');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Mahasiswa Berhasil Ditambahkan!
				<button type="button" class="close" data-dismiss="alert">

				</button>
				</div>');
			redirect('administrator/mahasiswa');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required',
											['required'	=> 'Nama Mahasiswa Wajib Diisi!']);
		$this->form_validation->set_rules('nim','Nim','required',
											[
												'required'	=> 'Nim Wajib Diisi!',
												'is_unique'	=> '%s <strong>'.$this->input->post('nim').'</strong> Sudah Di Gunakan. Buat username Baru!'
												]);
		$this->form_validation->set_rules('email','Email','required',
											['required'	=> 'Email Wajib Diisi!']);
		$this->form_validation->set_rules('password','Password','required',
											['required'	=> 'Password Wajib Diisi!']);
		$this->form_validation->set_rules('telepon','Telepon','required',
											['required'	=> 'Telepon Wajib Diisi!']);
		$this->form_validation->set_rules('blokir','Blokir','required',
											['required'	=> 'Blokir Wajib Diisi!']);
	}


	public function update($id)
		{
			$this->load->model('mahasiswa_model');
			$where = array('id' => $id );
			$data['mahasiswa'] = $this->mahasiswa_model->edit_data($where,'mahasiswa')->result();
			$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
			$data['detail'] = $this->mahasiswa_model->ambil_id_mahasiswa($id);
			
			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar');
			$this->load->view('template_administrator/topbar', $data);
			$this->load->view('administrator/mahasiswa_update', $data);
			$this->load->view('template_administrator/footer');

		}

	public function update_aksi()
		{
			$this->_rules();

			if ($this->form_validation->run()  == FALSE)
			{
				$this->update();
			}else{

				$id					= $this->input->post('id');
				$nim				= $this->input->post('nim');
				$password			= md5($this->input->post('password'));
				$nama_lengkap		= $this->input->post('nama_lengkap');
				$email				= $this->input->post('email');
				$blokir				= $this->input->post('blokir');
				$telepon			= $this->input->post('telepon');
				$jenis_kelamin		= $this->input->post('jenis_kelamin');
				$photo				= $_FILES['userfile']['name'];

				if ($photo){
					$config['upload_path']		=	'./assets/uploads';
					$config['allowed_types']	=	'jpg|png|gif|tiff';

					$this->load->library('upload',$config);
					if ($this->upload->do_upload('userfile')) {
						$userfile = $this->upload->data('file_name');
						$this->db->set('photo', $userfile);
					}else{
						echo "Gagal Upload";
					}
				}


				$data = array(

								'nim'			=> $nim,
								'password'		=> $password,
								'nama_lengkap'	=> $nama_lengkap,
								'email'			=> $email,
								'telepon'		=> $telepon,
								'blokir'		=> $blokir,
								'jenis_kelamin'	=> $jenis_kelamin,
								'photo'			=> $photo
							);

				$where = array ('id' => $id );

				$this->mahasiswa_model->update_data($where, $data, 'mahasiswa');

				echo "<script>
						alert('Data Mahasiswa berhasil diupdate!');
					  </script>";

			}
			echo "<script>
						window.location='".site_url('administrator/mahasiswa')."';
					  </script>";
		}


	public function hapus($id)
	{
		$where = array('id' => $id );
		$this->mahasiswa_model->hapus_data($where,'mahasiswa');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Mahasiswa Berhasil Dihapus!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('administrator/mahasiswa');
	}




	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['mahasiswa']	=  $this->mahasiswa_model->get_keyword($keyword);
		$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('administrator/daftar_mahasiswa', $data);
		$this->load->view('template_administrator/footer');
	}
	
	





}