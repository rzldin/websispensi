<?php

class Dosen extends CI_Controller {



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

		$this->load->model('dosen_model');
	}
	public function index()
	{
		$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['dosen']	= $this->dosen_model->tampil_data('dosen')->result();
		

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('administrator/daftar_dosen', $data);
		$this->load->view('template_administrator/footer');
	}



	public function detail($id)
	{
		$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['detail']	= $this->dosen_model->ambil_id_dosen($id);
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('administrator/detail_dosen', $data);
		$this->load->view('template_administrator/footer');
	}


	public function tambah_dosen()
	{
		$data = array(			
						'nama_dosen'	=> set_value('nama_dosen'),
						'nidn'			=> set_value('nidn'),
						'kode_dosen'	=> set_value('kode_dosen'),
						'username'		=> set_value('username'),
						'password'		=> set_value('password'),
						'alamat'		=> set_value('alamat'),
						'jenis_kelamin'	=> set_value('jenis_kelamin'),
						'email'			=> set_value('email'),
						'telp'			=> set_value('telp'),
						'photo'			=> set_value('photo')

					 );

		$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('administrator/form_dosen', $data);
		$this->load->view('template_administrator/footer');
	}


	public function tambah_dosen_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_dosen();
		}else{

			$i = $this->input;
				$nama_dosen			= $i->post('nama_dosen');
				$nidn				= $i->post('nidn');
				$kode_dosen			= $i->post('kode_dosen');
				$username			= $i->post('username');
				$password			= md5($i->post('password'));
				$alamat				= $i->post('alamat');
				$jenis_kelamin		= $i->post('jenis_kelamin');
				$email				= $i->post('email');
				$telp				= $i->post('telp');
				$photo				= $_FILES['photo'];
				if ($photo=''){

				}else{
					$config['upload_path']		=	'./assets/uploads2';
					$config['allowed_types']	=	'jpg|png|gif|tiff';

					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('photo')) {
						echo "Upload Gagal!"; die();
					}else{
						$photo=$this->upload->data('file_name');
					}
				}
			$data = array(
							'nama_dosen'	=> $nama_dosen,
							'nidn'			=> $nidn,
							'kode_dosen'	=> $kode_dosen,
							'username'		=> $username,
							'password'		=> $password,
							'alamat'		=> $alamat,
							'jenis_kelamin'	=> $jenis_kelamin,
							'email'			=> $email,
							'telp'			=> $telp,
							'photo'			=> $photo

						);

			$this->dosen_model->insert_data($data, 'dosen');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Dosen Berhasil Ditambahkan!
				<button type="button" class="close" data-dismiss="alert">

				</button>
				</div>');
			redirect('administrator/dosen');
		}
	}


	
	public function _rules()
	{
		$this->form_validation->set_rules('nama_dosen','Nama Dosen','required',
											['required'		=> '%s Dosen Wajib Diisi!']);
		$this->form_validation->set_rules('nidn','Nidn','required',
											['required'	=> 'Nim Wajib Diisi!']);
		$this->form_validation->set_rules('email','Email','required',
											['required'	=> 'Email Wajib Diisi!']);
		$this->form_validation->set_rules('password','Password','required',
											['required'	=> 'Password Wajib Diisi!']);
		$this->form_validation->set_rules('telp','Telp','required',
											['required'	=> 'Telepon Wajib Diisi!']);
		$this->form_validation->set_rules('username','Username','required',
											[
												'required'	=> 'Username Wajib Diisi!',
												'is_unique'	=> '%s <strong>'.$this->input->post('username').'</strong> Sudah Di Gunakan. Buat username Baru!'
											]);
		$this->form_validation->set_rules('alamat','Alamat','required',
											['required'	=> 'Alamat Wajib Diisi!']);
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required',
											['required'	=> 'Jenis Kelamin Wajib Diisi!']);
		$this->form_validation->set_rules('kode_dosen','Kode Dosen','required',
											['required'	=> 'Kode Dosen Wajib Diisi!']);
	}


	

	public function hapus($id)
	{
		$where = array('nidn' => $id );
		$this->dosen_model->hapus_data($where,'dosen');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Dosen Berhasil Dihapus!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('administrator/dosen');
	}
	
	
	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['dosen']	=  $this->dosen_model->get_keyword($keyword);
		$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('administrator/daftar_dosen', $data);
		$this->load->view('template_administrator/footer');
	}
	


	public function update($id)
		{
			$this->load->model('dosen_model');
			$where = array('nidn' => $id);
			$data['dosen'] = $this->dosen_model->edit_data($where,'dosen')->result();
			$data['detail'] = $this->dosen_model->ambil_id_dosen($id);
			$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar');
			$this->load->view('template_administrator/topbar', $data);
			$this->load->view('administrator/dosen_update', $data);
			$this->load->view('template_administrator/footer');

		}

	public function update_aksi()
		{
			$this->_rules();

			if ($this->form_validation->run()  == FALSE)
			{
				$this->update();
			}else{

				$i = $this->input;
				$id 				= $i->post('id_dosen');
				$nama_dosen			= $i->post('nama_dosen');
				$nidn				= $i->post('nidn');
				$username			= $i->post('username');
				$password			= md5($i->post('password'));
				$alamat				= $i->post('alamat');
				$jenis_kelamin		= $i->post('jenis_kelamin');
				$email				= $i->post('email');
				$telp				= $i->post('telp');
				$photo				= $_FILES['userfile']['name'];

				if ($photo){
					$config['upload_path']		=	'./assets/uploads2';
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
							'nama_dosen'	=> $nama_dosen,
							'nidn'			=> $nidn,
							'username'		=> $username,
							'password'		=> $password,
							'alamat'		=> $alamat,
							'jenis_kelamin'	=> $jenis_kelamin,
							'email'			=> $email,
							'telp'			=> $telp,
							'photo'			=> $photo

						);

				$where = array ('id_dosen' => $id );

				$this->dosen_model->update_data($where, $data, 'dosen');

				echo "<script>
						alert('Data Dosen berhasil diupdate!');
					  </script>";

			}
			echo "<script>
						window.location='".site_url('administrator/dosen')."';
					  </script>";
		}


}