<?php


class Pengajuan_sempro extends CI_Controller
{
	

	// public function daftar()
	// {
	// 	$this->load->model('sempro_model');

	// 		 	$config['upload_path']          = './assets/filesempro/';
	//             $config['allowed_types']        = 'pdf';
	//             $this->load->library('upload', $config);
	//             // if (!$this->upload->do_upload('file_sempro1')) {

	//             // }else {
	//             // 	$this->upload->do_upload('file_sempro2');
	//             // 	$file_sempro2 = $this->upload->data();{

	//             // 	} if ( ! $this->upload->do_upload('file_sempro3'));
	//             // 	$file_sempro2 = $this->upload->data();{

	//             // 	}if( !
	//             // 		$this->upload->do_upload('file_sempro4'));
	//             // 	$file_sempro2 = $this->upload->data();{
	//             // 		print_r($data['upload']);die();


	//     $data = array('title'  			=> 'SISPENSI | 2019 Skripsi UTS',
	// 			);	
	// 	$data['mahasiswa']	= $this->db->get_where('mahasiswa', ['id' => $this->session->userdata('nim')])->row_array();

	// 	// $this->load->view('template_mahasiswa/wrapper', $data, FALSE);
	// 	// }
	// 	// if($upload_data = array('uploads' =>$this->upload->data());
	// 	// $i = $this->input;

	// 	$data = array ( 'nim' 				=> $this->session->userdata('nim'),
	// 					'file_sempro1' 		=> $upload_data['uploads']['file_name'],
	// 					'file_sempro2' 		=> $upload_data['uploads']['file_name'],
	// 					'file_sempro3' 		=> $upload_data['uploads']['file_name'],
	// 					'file_sempro4'		=> $upload_data['uploads']['file_name'],
	// 					'status'			=> 0
	// 				  );

	// 	print_r($data);
	// 	die();

	// 	$this->sempro_model->tambah($data, 'sempro');
	// 	$this->session->set_flashdata('pesan', 'Berhasil melakukan Pendaftaran!');
	// 	redirect(base_url('skripsi/pengajuan_sempro/daftar'),'refresh');
	//             // 	}
	//             // 	}
	//             // 	}
	//             // }
	//     $data = array('title'  			=> 'SISPENSI | 2019 Skripsi UTS ',
	// 				  'isi'				=> 'skripsi/pengajuan_sempro');
	// 	$data['mahasiswa']	= $this->db->get_where('mahasiswa', ['id' => $this->session->userdata('nim')])->row_array();

	// 	$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
	// }

	public function daftar()
	{
				$this->load->model('sempro_model');
			 	$config['upload_path']          = './assets/filesempro/';
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
						'file_sempro1' 		=> $fs0,
						'file_sempro2' 		=> $fs1,
						'file_sempro3' 		=> $fs2,
						'file_sempro4'		=> $fs3,
						'status'			=> 0
					  );
			// echo json_encode($_FILES);exit;


		// $this->db->where('id_sempro',$id);
		// $this->db->update('sempro',$data);

		$this->sempro_model->tambah($data);
			// print_r($fs);
			// echo $fs[0];
			// die();
			// echo $fs[0];
			// echo $_FILES['file_sempro1']['name'];
	    

		// print_r($data);
		// die();

		// $this->sempro_model->tambah($data, 'sempro');
		$this->session->set_flashdata('pesan', 'Berhasil melakukan Pendaftaran Seminar Proposal!');
		redirect(base_url('mahasiswa/pengajuan/sempro'));
		$this->load->view('template_mahasiswa/wrapper', $data, FALSE);
	}













}