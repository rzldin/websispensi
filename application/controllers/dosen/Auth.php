<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function proses_login()
	{
		$post =	$this->input->post(null, TRUE);
		// echo json_encode($post);exit;
		if (isset($post['login'])) {
			$this->load->model('dosen_model');
			$query = $this->dosen_model->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array(
						'nidn'		=>	$row->id_dosen
						);
				$this->session->set_userdata($params);
				echo "<script>
						alert('Selamat, login berhasil!');
						window.location='".site_url('homes')."';
					  </script>";
			} else {
				echo "<script>
						alert('Login Gagal, Username / Password tidak sesuai');
						window.location='".site_url('masukdsn')."';
					  </script>";
			}
		}
	}



	public function logout()
	{
		$this->session->sess_destroy();
			echo "<script>
						alert('Anda telah logout!');
						window.location='".site_url('masukdsn')."';
					  </script>";
	}









}