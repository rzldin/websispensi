<div class="container-fluid">
  
  <div class="alert alert-success" role="alert">
   <i class="fas fa-tachometer-alt"></i> Dashboard
  </div>

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Selamat Datang!</h4>
    <p>Selamat Datang <strong><?php echo $user['username']; ?></strong> di Sistem Informasi Pendaftaran Skripsi Program Studi Informatika, Universitas Teknologi Sumbawa. Anda Sedang Login sebagai <strong><?php echo $user['level']; ?></strong></p>
    <hr>
    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
      <i class="fas fa-cogs"></i> Control Panel
    </button>
  </div>
</div>



<!-- Button trigger modal -->


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
        <div class="row">
          <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/mahasiswa') ?>" style="text-decoration: none;"><p class="nav-link small text-info">MAHASISWA</p></a>
            <i class="fas fa-3x fa-user-graduate"></i>
          </div>

          <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/dosen') ?>" style="text-decoration: none;"><p class="nav-link small text-info">DOSEN</p></a>
            <i class="fas fa-3x fa-user-graduate"></i>
          </div>

          <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/pendaftaran') ?>" style="text-decoration: none;"><p class="nav-link small text-info">PENDAFTARAN</p></a>
            <i class="fas fa-3x fa-file-alt"></i>
          </div>

          <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/jadwal/viewjadwal') ?>" style="text-decoration: none;"><p class="nav-link small text-info">JADWAL</p></a>
            <i class="fas fa-3x fa-calendar-alt"></i>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
      </div>
    </div>
  </div>
</div>