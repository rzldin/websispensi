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

	            // $fs = array();
	            $no = 0;
			foreach ($_FILES as $row => $v ) {
				// echo $v['name'];
				// print_r($row);exit;
	            $config['file_name']			= $v['name'];
	            if (!$this->upload->do_upload($row)) {
	            	$error = $this->upload->display_errors();
	            	// $this->load->view('template_mahasiswa/wrapper', $error);
	            }else{
	            	// $data = array($row => $this->upload->data());
	            	$this->upload->data();
	            	${'fs'.$no} = $v['name'];
	            	// $this->load->view('template_mahasiswa/wrapper', $data);
	            	// echo $no;
	            	// echo $fs[$no];
	            	// echo '<br>';
	            	$no++;
	            }
	            $name[] = $v['name'];

			}

			// $data = array(
			// 	'nim' =>$this->session->userdata('nim'),				
			// 	'file_sempro1' => $name[0],
			// 	'file_sempro2' => $name[1],
			// 	'file_sempro3' => $name[2],
			// 	'file_sempro4' => $name[3],
			// 	'status' => 0
			// );
		$data = array ( 'nim' 				=> $this->session->userdata('nim'),
						'file_sidang1' 		=> $fs0,
						'file_sidang2' 		=> $fs1,
						'file_sidang3' 		=> $fs2,
						'file_sidang4'		=> $fs3,
						'status'			=> 0
					  );
			// echo json_encode($_FILES);exit;


		// $this->db->where('id_sempro',$id);
		// $this->db->update('sempro',$data);

		$this->skripsi_model->tambah($data);
			// print_r($fs);
			// echo $fs[0];
			// die();
			// echo $fs[0];
			// echo $_FILES['file_sempro1']['name'];
	    

		// print_r($data);
		// die();

		// $this->sempro_model->tambah($data, 'sempro');
		$this->session->set_flashdata('pesan', 'Berhasil melakukan Pendaftaran Sidang skripsi!');
		redirect(base_url('mahasiswa/pengajuan/sidang_skripsi'));
		$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
	}

}