<div class="container-fluid">
  
  <div class="alert alert-success" role="alert">
   <i class="fas fa-tachometer-alt"></i> Dashboard
  </div>

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Selamat Datang!</h4>
    <p>Selamat Datang <strong><?php echo $dosen['nama_dosen']; ?></strong> di Pendaftaran Skripsi Berbasis Web <strong>SISPENSI</strong> Program Studi Informatika, Universitas Teknologi Sumbawa. Anda Sedang Login sebagai <strong>Dosen</strong></p>
    <hr>
    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
      <i class="fas fa-cogs"></i> Control Panel
    </button>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i> Control Panel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <div class="col-md-12 text-info text-center">
            <?php
            $cek=$this->db->where('dosbing1', $dosen['nama_dosen'])->order_by('id_proposal')->get('proposal')->result();
            ?>
            <a href="<?php echo base_url('dosen/pengajuan') ?>" style="text-decoration: none;"><p class="nav-link small text-info">PENGAJUAN JUDUL SKRIPSI <span class="badge badge-secondary"><?php echo COUNT($cek); ?></span></p></a>
            <i class="fas fa-3x fa-file-alt"></i>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
      </div>
    </div>
  </div>
</div>