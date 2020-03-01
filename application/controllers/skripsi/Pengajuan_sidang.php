<?php




class Pengajuan_sidang extends CI_Controller
{
	
	public function daftar()
	{
		$this->load->model('skripsi_model');
	 	$config['upload_path']          = './assets/filesidang/';
        $config['allowed_types']        = 'pdf';
        $config['overwrite']			= true; 
        $this->load->library('upload', $config);


        $no = 0;
		foreach ($_FILES as $row => $v ) {

            $config['file_name']			= $v['name'];
            if (!$this->upload->do_upload($row)) {
            	$error = $this->upload->display_errors();
            }else{
            	$this->upload->data();
            	${'fs'.$no} = $v['name'];
            	$no++;
            }
            $name[] = $v['name'];

		}

		$data = array ( 'nim' 				=> $this->session->userdata('nim'),
						'file_sidang1' 		=> $fs0,
						'file_sidang2' 		=> $fs1,
						'file_sidang3' 		=> $fs2,
						'file_sidang4'		=> $fs3,
						'status'			=> 0
					  );

		$this->skripsi_model->tambah($data);
		$this->session->set_flashdata('pesan', 'Berhasil melakukan Pendaftaran Sidang skripsi!');
		redirect(base_url('mahasiswa/pengajuan/sidang_skripsi'));
		$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
	}

}