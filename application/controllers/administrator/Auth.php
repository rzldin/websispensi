<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {




	public function index()
	{
		if (ucwords($this->uri->segment(1)) == 'Administrator') {
			redirect('welcome','refresh');
		}
		$this->load->view('template_administrator/header');
		$this->load->view('administrator/login');
		$this->load->view('template_administrator/footer');
	}



	public function proses_login()
	{
		$this->form_validation->set_rules('username','username','required',
							['required'	=> 'Username Wajib Diisi!']		
			);
		$this->form_validation->set_rules('password','password','required',
							['required'	=> 'Password Wajib Diisi!']
			);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template_administrator/header');
			$this->load->view('administrator/login');
			$this->load->view('template_administrator/footer');
		}else {
			$username	= $this->input->post('username');
			$password	= $this->input->post('password');


			$user = $username;
			$pass = MD5($password);

			$cek  = $this->login_model->cek_login($user, $pass);

			if ($cek->num_rows() > 0) {

				foreach ($cek->result() as $ck) {
					$sess_data['username'] = $ck->username;
					$sess_data['email'] = $ck->email;
					$sess_data['level'] = $ck->level;

					$this->session->set_userdata($sess_data);
				}
				if ($sess_data['level'] == 'admin') {
					redirect('home');
				}else{
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Username atau Password Salah!
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
							  </button>
							</div>');
						redirect('masukprd');
				}
				
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Username atau Password Salah!
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
							  </button>
							</div>');
					redirect('masukprd');
			}
		}
	}



	private function sendEmail($email, $nama_lengkap, $password)
    {
        $this->email->from('sispensiutsinfo@gmail.com', 'Sistem Pendaftaran Skripsi Berbasis Web');
        $this->email->to($email);

        $this->email->subject('SISPENSI-UTS2019');
        $this->email->message('Selamat Datang ' . $nama_lengkap . ' di Sistem Pendaftaran Skripsi Berbasis Web Universitas Teknologi Sumbawa, Program Studi Informatika. Sekarang anda bisa login sistem pendaftaran skripsi dengan menggunakan ID anda. Password : ' . $password . '  Semoga harimu menyenangkan.');

        return $this->email->send();

    }


    public function sendPassword($id)
    {
        $where 		= array('id' => $id);
        $mahasiswa 	= $this->mahasiswa_model->find('mahasiswa', $where);
        foreach ($mahasiswa->result() as $mhs) {
            $nama_lengkap 	= $mhs->Nama;
            $email 			= $mhs->Email;
        }
        $password = random_string('alnum', 12);
        if ($this->sendEmail($email, $nama_lengkap, $password)) {
            $data = array('Password' => md5($password));
            $this->mahasiswa_model->update('id', $id, 'mahasiswa', $data);
            echo "Password Telah di Kirim ke Email Pengguna";
        } else {
            echo "Password Gagal diKirim Periksa Server Anda";
        }
    }


	public function logout()
	{
		$this->session->sess_destroy();
			echo "<script>
						alert('Anda telah logout!');
						window.location='".site_url('masukprd')."';
					  </script>";
	}



	public function pdf()
	{
		$this->load->library('dompdf_gen');
		$this->load->model('jadwal_model');

		$data['jadwal_sempro']	=	$this->jadwal_model->get_data('jadwal_sempro');
		$this->load->view('laporan_pdf',$data);

		$paper_size	= 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size,$orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("jadwal_sempro.pdf", array('Attachment' => 0));
	}

	public function pdf_sidang()
	{
		$this->load->library('dompdf_gen');
		$this->load->model('skripsi_model');
		$data['jadwal_skripsi']	=	$this->skripsi_model->get_data('jadwal_skripsi');
		// var_dump($data['jadwal_skripsi']);die();
		$this->load->view('laporan_pdf_sidang',$data);

		$paper_size	= 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size,$orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("jadwal_skripsi.pdf", array('Attachment' => 0));
	}
	
	
}
