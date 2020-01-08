<?php


class Daftar_ruangan extends CI_Controller
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

		$data['daftar_ruangan']	= $this->ruangan_model->tampil_data('daftar_ruangan')->result();
		$data['user']			= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('administrator/daftar_ruangan', $data);
		$this->load->view('template_administrator/footer');
	}


	public function tambah_ruangan()
	{

		$daftar_ruangan = $this->ruangan_model->listing();

			//Validasi
			$this->form_validation->set_rules('nama_kelas','Ruangan','required|is_unique[daftar_ruangan.nama_kelas]',
				array ( 'required'				=> '%s harus diisi',
						'is_unique'				=> '%s <strong>'.$this->input->post('nama_kelas').'</strong> sudah ada. Buat Ruangan baru!'));
			if($this->form_validation->run() == FALSE)  {
				// End validasi

		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('administrator/daftar_ruangan', $data);
		$this->load->view('template_administrator/footer');

			// Masuk Database
		}else{

			$i = $this->input;

			$data = array ( 
							'nama_kelas' 				=>$i->post('nama_kelas'),
							'kode_ruangan' 				=>$i->post('kode_ruangan')
					  	  );
			$this->ruangan_model->tambah_ruangan($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Ruangan Berhasil Ditambahkan!
				<button type="button" class="close" data-dismiss="alert">

				</button>
				</div>');

			redirect(base_url('administrator/daftar_ruangan'),'refresh');
		}
		// End Masuk Database
	}



	public function edit($id_ruangan)
		{
			$where = array('id_ruangan' => $id_ruangan );
			$data['daftar_ruangan'] = $this->db->query("select * from daftar_ruangan ds where ds.id_ruangan='$id_ruangan'")->result();
			$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
			$data['detail'] = $this->ruangan_model->ambil_id_ruangan($id_ruangan);
			
			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar');
			$this->load->view('template_administrator/topbar', $data);
			$this->load->view('administrator/edit_ruangan', $data);
			$this->load->view('template_administrator/footer');

		}


	public function edit_aksi()
		{
			$this->_rules();

			if ($this->form_validation->run()  == FALSE)
			{
				$this->edit();
			}else{

					$id_ruangan			= $this->input->post('id_ruangan');
					$nama_kelas			= $this->input->post('nama_kelas');
					$kode_ruangan		= $this->input->post('kode_ruangan');
				}


				$data = array(

								'nama_kelas'		=> $nama_kelas,
								'kode_ruangan'		=> $kode_ruangan
							);

				$where = array ('id_ruangan' => $id_ruangan );

				$this->ruangan_model->update_data($where, $data, 'daftar_ruangan');

				echo "<script>
						alert('Ruangan berhasil diupdate!');
					  </script>";

				redirect(base_url('administrator/daftar_ruangan'),'refresh');
		}



		//Delete
	public function delete($id_ruangan)
	{
		
		$user = $this->ruangan_model->detail($id_ruangan);
		$data = array( 'id_ruangan' => $user->id_ruangan);
		$this->ruangan_model->delete($data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Ruangan Berhasil Dihapus!
				<button type="button" class="close" data-dismiss="alert">

				</button>
				</div>');
		redirect(base_url('administrator/daftar_ruangan'),'refresh');
	}





	public function _rules()
	{
		$this->form_validation->set_rules('kode_ruangan','Kode Ruangan','required',
											['required'	=> 'Urutan Wajib Diisi!']);
		$this->form_validation->set_rules('nama_kelas','Nama Kelas','required',
											[
												'required'	=> 'Nim Wajib Diisi!',
												'is_unique'	=> '%s <strong>'.$this->input->post('nama_kelas').'</strong> Sudah Di Gunakan. Buat Nama Kelas Baru!'
												]);
	}















}