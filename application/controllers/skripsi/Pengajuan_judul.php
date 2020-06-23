<?php



class Pengajuan_judul extends CI_Controller
{
	


	public function daftar()
	{
		$this->load->model(['topikskripsi_model','dosen_model','proposal_model']);
		$topik_skripsi 	= $this->topikskripsi_model->listing();
		$dosbing1		= $this->dosen_model->listing();

		$valid = $this->form_validation;

		$valid->set_rules('judul', 'Judul', 'required',
			array( 'required' => '%s harus diisi'));

		if($valid->run()) {
			 	$config['upload_path']          = './assets/fileskripsi/';
	            $config['allowed_types']        = 'pdf';
	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('file_skripsi')) {

	    $data = array('title'  			=> 'SISPENSI | 2019 Skripsi UTS',
					  'topik_skripsi'	=> $topik_skripsi,
					  'dosbing1'		=> $dosbing1,
					  'error_upload'	=> $this->upload->display_errors(),
					  'isi'				=> 'mahasiswa/skripsi/pengajuan_judul'
				);	
		//$data['mahasiswa']	= $this->db->get_where('mahasiswa', ['id' => $this->session->userdata('nim')])->row_array();
		
		$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
	}else{
		$upload_data					= array('uploads'	=>$this->upload->data());
		$i = $this->input;

		$data = array( 
						'nim' 				=> $i->post('nim'),
						'judul' 			=> $i->post('judul'),
						'dosbing1' 			=> $i->post('dosbing1'),
						'topik_skripsi' 	=> $i->post('topik_skripsi'),
						'file_skripsi'		=> $upload_data['uploads']['file_name'],
						'status'			=> 0
					  );

		$this->proposal_model->tambah($data, 'proposal');
		$this->session->set_flashdata('pesan', 'Berhasil melakukan Pendaftaran!');
		redirect(base_url('skripsi/pengajuan_judul/daftar'),'refresh');
	}}
	// End Masuk Database
		$data = array('title'  			=> 'SISPENSI | 2019 Skripsi UTS ',
					  'topik_skripsi'	=> $topik_skripsi,
					  'dosbing1'		=> $dosbing1,
					  'isi'				=> 'mahasiswa/skripsi/pengajuan_judul');
		$data['mahasiswa']	= $this->db->get_where('mahasiswa', ['id' => $this->session->userdata('nim')])->row_array();

		// var_dump($data['mahasiswa']);
		$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
	}



	public function hapus($id)
	{
		$this->load->model('proposal_model');
		$where = array('id_proposal' => $id );
		$this->proposal_model->hapus_data($where,'proposal');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Pengajuan Judul Berhasil Dihapus!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('administrator/pengajuan_judul');
	}







}