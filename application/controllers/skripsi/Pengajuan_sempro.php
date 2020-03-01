<?php


class Pengajuan_sempro extends CI_Controller
{
	
	public function daftar()
	{
		$this->load->model('sempro_model');
	 	$config['upload_path']          = './assets/filesempro/';
        $config['allowed_types']        = 'pdf';
        $config['overwrite']			= true; 
        $this->load->library('upload', $config);

        $no = 0;
		foreach ($_FILES as $row => $v ) {
            $config['file_name'] = $v['name'];
            if (!$this->upload->do_upload($row)) {
            	$error = $this->upload->display_errors();
            }else{
            	$this->upload->data();
            	${'fs'.$no} = $v['name'];
            	$no++;
            }
            $name[] = $v['name'];

		$data = array ( 
						'nim' 				=> $this->session->userdata('nim'),
						'file_sempro1' 		=> $fs0,
						'file_sempro2' 		=> $fs1,
						'file_sempro3' 		=> $fs2,
						'file_sempro4'		=> $fs3,
						'status'			=> 0
					  );

		$this->sempro_model->tambah($data);
		$this->session->set_flashdata('pesan', 'Berhasil melakukan Pendaftaran Seminar Proposal!');
		redirect(base_url('mahasiswa/pengajuan/sempro'));
		$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
	}













}