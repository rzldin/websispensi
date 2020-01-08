<?php


class Register extends CI_Controller
{
	
	

	public function index()
	{
		$this->load->view('mahasiswa/mahasiswa_register');
	}



	public function  proses_registrasi()

	{
        $valid = $this->form_validation;

        $valid->set_rules('nama_lengkap', 'Nama Lengkap', 'required',
            array( 'required' => '%s harus diisi'));

        $valid->set_rules('nim', 'nim', 'required|trim|max_length[20]|is_unique[mahasiswa.nim]',
            array( 'required'       => '%s harus diisi',
                   'max_length'     => '%s maksimal 20 Karakter',
                   'is_unique'      => '%s <strong>'.$this->input->post('nim').'</strong> Anda menggunakan NIM yang sudah terdaftar'));

        $valid->set_rules('email', 'Email', 'required|valid_email',
            array( 'required'       => '%s harus diisi',
                   'valid_email'    => 'Format %s Tidak Valid'));


        $valid->set_rules('password', 'Password', 'required|trim',
            array( 'required'       => '%s harus diisi',
                   'min_length'     => '%s minimal 6 karakter'));

        if($valid->run() === FALSE) {

    }else{
        $i = $this->input;
        $data = array ( 'nama_lengkap'  =>$i->post('nama_lengkap'),
                        'nim'      		=>$i->post('nim'),
                        'email'         =>$i->post('email'),
                        'jenis_kelamin'	=>$i->post('jenis_kelamin'),
                        'password'      => md5($i->post('password'))
                      );
        $this->mahasiswa_model->insert_data($data, 'mahasiswa');
        $this->session->set_flashdata('pesan', 'Berhasil Registrasi!');
        redirect(base_url('login/mahasiswa'),'refresh');
    }
}
    }
