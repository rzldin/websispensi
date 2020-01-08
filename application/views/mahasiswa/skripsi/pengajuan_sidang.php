<section class="container">

   <?= $this->session->flashdata('pesan') ?>
  <div class="pull-right">
  <?= anchor('mahasiswa/dasbor/home','<div class="btn btn-sm btn-primary"><i class="fa fa-home"></i> Beranda</div>')?>
  </div>
  <br>
  <br>
  <?php
    $cek = $this->db->where('nim', $mahasiswa['id'])->where('status',0,2)->get('sempro')->result();
    if(count($cek) >0) {
  ?>
          <div class="col-sm-12">
            <section class="row">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-block">
                    'Maaf Seminar Proposal anda belum selesai, Kembalilah jika sudah selesai'
                  </div>
                </div>
              </div>
            </section>
          </div>
  <?php
    } else {
  ?>
          <div class="col-sm-12">
            <section class="row">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-block">
                    <h3 class="card-title">Pengajuan Sidang Skripsi</h3>
                      <form class="form" method="post" action="<?= base_url('skripsi/pengajuan_sidang/daftar') ?>" enctype="multipart/form-data">
                       <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama</label>
                        <div class="col-md-9">
                          <input type="text" name="nama" id="judul" value="<?= set_value('nama')?>" class="form-control" placeholder="<?= $mahasiswa['nama_lengkap']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">NIM</label>
                        <div class="col-md-9">
                          <input type="text" name="nim" id="judul" value="<?= set_value('nim')?>" class="form-control" placeholder="<?= $mahasiswa['nim']; ?>" readonly>
                         <input type="hidden" name="id_sempro" class="form-control" value="<?php echo set_value('id_sempro')?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Unggah File Persyaratan Sidang Skripsi</label>
                        <div class="col-md-9">
                        <input type="file" name="file_sempro1" id="file_sempro1" class="form-control" required>

                            <span class="help-block text-danger">*Silahkan Unggah file dalam bentuk pdf. Lihat syarat dan ketentuan <a href="<?= base_url('mahasiswa/info/persyaratan')?>" style="text-decoration:none;">disini!</a></span>
                          </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Unggah Surat Persetujuan Sidang Skripsi</label>
                        <div class="col-md-9">
                        <input type="file" name="file_sempro2" id="file_sempro2" class="form-control" required>
                            <span class="help-block text-danger">*Sudah disetujui oleh dosen pembimbing satu & pembimbing dua.</span>
                          </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Mengajukan Kartu Bimbingan</label>
                        <div class="col-md-9">
                        <input type="file" name="file_sempro3" id="file_sempro3" class="form-control" required>
                            <span class="help-block text-danger">*Silahkan Unggah file dalam bentuk pdf. </span>
                          </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Melampirkan Bukti Melunasi Administrasi</label>
                        <div class="col-md-9">
                        <input type="file" name="file_sempro4" id="file_sempro4" class="form-control" required>
                            <span class="help-block text-danger">*Bukti diperoleh melalui BAUK/Fakultas. </span>
                          </div>
                      </div>
                      <br>
                      <br><br>
                     <div class="pull-left">
          <button type="submit" class="btn btn-sm btn-success "><i class="fa fa-send"></i> daftar</button>
        <br><br><br><br>
    </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
   <?php
    }
  ?>

</section>
