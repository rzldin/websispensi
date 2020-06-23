<section class="container">

  <?php echo $this->session->flashdata('pesan') ?>
  <div class="pull-right">
  <?php echo anchor('mahasiswa/dasbor/home','<div class="btn btn-sm btn-primary"><i class="fa fa-home"></i> Beranda</div>')?>
  </div>
  <br>
  <br>
          <div class="col-sm-12">
            <section class="row">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-block">
                    <h3 class="card-title">Pengajuan Judul</h3>
                    <form class="form" action="<?php echo base_url('skripsi/pengajuan_judul/daftar')?>" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama</label>
                        <div class="col-md-9">
                          <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?php echo set_value('nama_lengkap')?>" class="form-control" placeholder="<?php echo $mahasiswa['nama_lengkap']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">NIM</label>
                        <div class="col-md-9">
                          <input type="text" name="nim" id="nim" value="<?php echo set_value('nim')?>" class="form-control" placeholder="<?php echo $mahasiswa['nim']; ?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Topik Skripsi</label>
                        <div class="col-md-9">
                          <select class="custom-select form-control" name="topik_skripsi" id="topik_skripsi" required>
                            <option value="">-- Topik Skripsi --</option>
                            <?php foreach($topik_skripsi->result() as $key => $data) { ?>
                              <option value="<?php echo $data->nama_topik; ?>"><?php echo $data->nama_topik; ?></option>
                            <?php }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Judul Skripsi</label>
                        <div class="col-md-9">
                          <textarea type="text" name="judul" id="judul" value="<?php echo set_value('judul')?>" class="form-control" placeholder="Masukkan Judul" required></textarea>
                          <?php echo form_error('judul','<div class="text-danger small ml-3">','</div>') ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Unggah File Skripsi</label>
                        <div class="col-md-9">
                        <input type="file" name="file_skripsi" class="form-control" id="file_skripsi" value="<?php echo set_value('file_skripsi')?>" require><span class="help-block text-danger">Silahkan unggah file berbentuk pdf!</span></div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Dosen Pembimbing</label>
                        <div class="col-md-9">
                          <select class="custom-select form-control" name="dosbing1" id="dosbing1">
                            <option value="">-- Dosen Pembimbing --</option>
                            <?php foreach($dosbing1->result() as $key => $data) { ?>
                            <option value="<?php echo $data->nama_dosen; ?>"><?php echo $data->nama_dosen; ?></option>
                          <?php } ?>
                          </select>
                        </div>
                      </div>
                      <br>
                      <br><br>
                     
        <button type="submit" class="btn btn-sm btn-success "><i class="fa fa-send"></i> daftar</button>
        
        <br><br><br><br>
    </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>
