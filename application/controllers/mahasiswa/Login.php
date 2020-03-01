<?php


class Login extends CI_Controller
{
	
	

	public function proses_login()
	{
		$post =	$this->input->post(null, TRUE);
		// echo json_encode($post);exit;
		if (isset($post['login'])) {
			$this->load->model('mahasiswa_model');
			$query = $this->mahasiswa_model->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array(
						'nim'		=>	$row->id
						);
				$this->session->set_userdata($params);
				echo "<script>
						alert('Selamat, login berhasil!');
						window.location='".site_url('homez')."';
					  </script>";
			} else {
				echo "<script>
						alert('Login Gagal, NIM / Password tidak sesuai');
						window.location='".site_url('masukmhs')."';
					  </script>";
			}
		}
	}






}