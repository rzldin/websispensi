<?php


class Topik_skripsi extends CI_Controller
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

		$data['topik_skripsi']	= $this->topikskripsi_model->tampil_data('topik_skripsi')->result();
		$data['user']			= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('administrator/daftar_topikskripsi', $data);
		$this->load->view('template_administrator/footer');
	}


	public function tambah_topikskripsi()
	{

		$topik_skripsi = $this->topikskripsi_model->listing();

			//Validasi
			$this->form_validation->set_rules('nama_topik','Nama Topik','required|is_unique[topik_skripsi.nama_topik]',
				array ( 'required'				=> '%s harus diisi',
						'is_unique'				=> '%s <strong>'.$this->input->post('nama_topik').'</strong> sudah ada. Buat Topik Skripsi baru!'));
			if($this->form_validation->run() == FALSE)  {
				// End validasi

		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('administrator/daftar_topikskripsi', $data);
		$this->load->view('template_administrator/footer');

			// Masuk Database
		}else{

			$i = $this->input;

			$data = array ( 
							'nama_topik' 			=>$i->post('nama_topik'),
							'urutan' 				=>$i->post('urutan')
					  	  );
			$this->topikskripsi_model->tambah($data);

			redirect(base_url('administrator/topik_skripsi'),'refresh');
		}
		// End Masuk Database
	}



	public function edit($id_topik_skripsi)
		{
			$where = array('id_topik_skripsi' => $id_topik_skripsi );
			$data['topik_skripsi'] = $this->db->query("select * from topik_skripsi tps where tps.id_topik_skripsi='$id_topik_skripsi'")->result();
			$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
			$data['detail'] = $this->topikskripsi_model->ambil_id_topikskripsi($id_topik_skripsi);
			
			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar');
			$this->load->view('template_administrator/topbar', $data);
			$this->load->view('administrator/edit_topikskripsi', $data);
			$this->load->view('template_administrator/footer');

		}


	public function edit_aksi()
		{
			$this->_rules();

			if ($this->form_validation->run()  == FALSE)
			{
				$this->edit();
			}else{

					$id_topik_skripsi	= $this->input->post('id_topik_skripsi');
					$nama_topik			= $this->input->post('nama_topik');
					$urutan				= $this->input->post('urutan');
				}


				$data = array(

								'nama_topik'		=> $nama_topik,
								'urutan'			=> $urutan
							);

				$where = array ('id_topik_skripsi' => $id_topik_skripsi );

				$this->topikskripsi_model->update_data($where, $data, 'topik_skripsi');

				echo "<script>
						alert('Topik Skripsi berhasil diupdate!');
					  </script>";

				redirect(base_url('administrator/topik_skripsi'),'refresh');
		}



		//Delete
	public function delete($id_topik_skripsi)
	{
		
		$user = $this->topikskripsi_model->detail($id_topik_skripsi);
		$data = array( 'id_topik_skripsi' => $user->id_topik_skripsi);
		$this->topikskripsi_model->delete($data);
		redirect(base_url('administrator/topik_skripsi'),'refresh');
	}





	public function _rules()
	{
		$this->form_validation->set_rules('urutan','Urutan','required',
											['required'	=> 'Urutan Wajib Diisi!']);
		$this->form_validation->set_rules('nama_topik','Nama Topik','required',
											[
												'required'	=> 'Nim Wajib Diisi!',
												'is_unique'	=> '%s <strong>'.$this->input->post('nama_topik').'</strong> Sudah Di Gunakan. Buat Nama Topik Baru!'
												]);
	}















}