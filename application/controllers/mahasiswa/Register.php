<?php


class Register extends CI_Controller
{
	
	

	public function index()
	{
		$this->load->view('mahasiswa/mahasiswa_register');
	}



	public function  proses_registrasi()

	{
        $i = $this->input;
        $nama_lengkap = $i->post('nama_lengkap');
        $nim = $i->post('nim');
        $email = $i->post('email');
        $jenis_kelamin = $i->post('jenis_kelamin');
        $password = md5($i->post('password'));
        $telepon = $i->post('telepon');

        $data = array(
                'nama_lengkap' => $nama_lengkap,
                'nim'          => $nim,
                'email'        => $email,
                'jenis_kelamin'=> $jenis_kelamin,
                'password'     => $password,
                'telepon'      => $telepon
            );
    
        $this->mahasiswa_model->insert_data($data, 'mahasiswa');
        $this->session->set_flashdata('pesan', 'Berhasil Registrasi!');
        redirect(base_url('login/mahasiswa'),'refresh');
    }

}
