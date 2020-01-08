<?php




class Status_proposal extends CI_Controller
{


	function __construct()
	{
        parent::__construct();
        $this->load->model('proposal_model');


       if (!isset($this->session->userdata['username'])) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Belum Login
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
							  </button>
							</div>');
				redirect('administrator/auth');
			}
        
    }
	

	public function menunggu($id)
	{
		$data['status'] = 1;

	 	$this->db->trans_start();

	 	$this->db->where('id_proposal', $id);
	 	$this->db->update('proposal', $data);

	 	$this->db->trans_complete();

	 	if ($this->db->trans_status() === FALSE)
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Gagal Diubah!
					<button type="button" class="close" data-dismiss="alert">

					</button>
					</div>');
					redirect('administrator/pengajuan_judul');	
				} else 
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil Diubah!
					<button type="button" class="close" data-dismiss="alert">
					</button>
					</div>');
					redirect('administrator/pengajuan_judul');	
				}
	}



	public function menolak($id)
	{
		$data['status'] = 2;

	 	$this->db->trans_start();

	 	$this->db->where('id_proposal', $id);
	 	$this->db->update('proposal', $data);

	 	$this->db->trans_complete();

	 	if ($this->db->trans_status() === FALSE)
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Gagal Diubah!
					<button type="button" class="close" data-dismiss="alert">

					</button>
					</div>');
					redirect('administrator/pengajuan_judul');	
				} else 
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil Diubah!
					<button type="button" class="close" data-dismiss="alert">
					</button>
					</div>');
					redirect('administrator/pengajuan_judul');	
				}



	}



	public function terima_sempro($id)
	{
		$data['status'] = 1;

	 	$this->db->trans_start();

	 	$this->db->where('id_sempro', $id);
	 	$this->db->update('sempro', $data);

	 	$this->db->trans_complete();

	 	if ($this->db->trans_status() === FALSE)
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Gagal Diubah!
					<button type="button" class="close" data-dismiss="alert">

					</button>
					</div>');
					redirect('administrator/pendaftaran_sempro');	
				} else 
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil Diubah!
					<button type="button" class="close" data-dismiss="alert">
					</button>
					</div>');
					redirect('administrator/pendaftaran_sempro');	
				}



	}




	public function tolak_sempro($id)
	{
		$data['status'] = 2;

	 	$this->db->trans_start();

	 	$this->db->where('id_sempro', $id);
	 	$this->db->update('sempro', $data);

	 	$this->db->trans_complete();

	 	if ($this->db->trans_status() === FALSE)
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Gagal Diubah!
					<button type="button" class="close" data-dismiss="alert">

					</button>
					</div>');
					redirect('administrator/pendaftaran_sempro');	
				} else 
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil Diubah!
					<button type="button" class="close" data-dismiss="alert">
					</button>
					</div>');
					redirect('administrator/pendaftaran_sempro');	
				}



	}





























	
}