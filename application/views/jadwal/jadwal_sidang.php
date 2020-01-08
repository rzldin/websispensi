<section class="container-fluid">

  <?php echo $this->session->flashdata('pesan') ?>
  <div class="pull-right">
  <?php echo anchor('administrator/penjadwalan','<div class="btn btn-sm btn-primary"><i class="fa fa-undo"></i> Kembali</div>')?>
  </div>
  <br>
  <br>
          <div class="col-sm-12">
            <section class="row">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-block">
                    <div class="container">
                    <h3 class="card-title">Jadwal Sidang</h3>

                 <?php foreach ($proposal as $pro ) : ?>

                    <form class="form" action="<?php echo base_url('administrator/penjadwalan/jadwal_sempro_aksi')?>" method="post" enctype="multipart/form-data">
                      
                      <!-- <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama</label>
                        <div class="col-md-9">
                          <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?php echo set_value('nama_lengkap')?>" class="form-control" placeholder="<?= $pro->nama_?>" readonly>
                        </div>
                      </div>
                       -->   
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">NIM</label>
                        <div class="col-md-9">
                          <input type="text" name="nim" id="nim" value="<?php echo set_value('nim')?>" class="form-control" placeholder="<?php echo $pro->nim; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Judul Skripsi</label>
                        <div class="col-md-9">
                          <input type="text" name="judul" id="judul" value="<?php echo set_value('judul')?>" class="form-control" placeholder="<?php echo $pro->judul; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Topik Skripsi</label>
                        <div class="col-md-9">
                          <input type="text" name="dosbing1" id="dosbing1" value="<?php echo set_value('dosbing1')?>" class="form-control" placeholder="<?php echo $pro->topik_skripsi; ?>" readonly>
                        </div>
                      </div>
                       <div class="form-group row">
                        <label class="col-md-3 col-form-label">Dosen Pembimbing</label>
                        <div class="col-md-9">
                          <input type="text" name="dosbing1" id="dosbing1" value="<?php echo set_value('dosbing1')?>" class="form-control" placeholder="<?php echo $pro->dosbing1; ?>" readonly>
                        </div>
                      </div>
                       <?php endforeach; ?>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label">Dosen Penguji 1</label>
                        <div class="col-md-9">
                          <select class="custom-select form-control" name="penguji1" id="penguji1" required>
                          <option>-- Pilih Dosen Penguji 1 --</option>
                         <?php foreach($penguji1 as $key => $data) : ?>
                              <option value="<?php echo $data->nama_dosen; ?>"><?php echo $data->nama_dosen; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Dosen Penguji 2</label>
                        <div class="col-md-9">
                          <select class="custom-select form-control" name="penguji2" id="penguji2" required>
                          <option>-- Pilih Dosen Penguji 2 --</option>
                         <?php foreach($penguji2 as $key => $data) : ?>
                              <option value="<?php echo $data->nama_dosen; ?>"><?php echo $data->nama_dosen; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Hari</label>
                        <div class="col-md-9">
                          <input type="text" name="nama_hari" id="nama_hari" value="<?php echo set_value('nama_hari')?>" class="form-control datepicker" placeholder="" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Waktu Mulai</label>
                        <div class="col-md-9">
                          <input type="time" name="waktu_mulai" id="waktu_mulai" value="<?php echo set_value('waktu_mulai')?>" class="form-control" placeholder="" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Waktu Berakhir</label>
                        <div class="col-md-9">
                          <input type="time" name="waktu_akhir" id="waktu_akhir" value="<?php echo set_value('waktu_akhir')?>" class="form-control" placeholder="" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Ruangan</label>
                        <div class="col-md-9">
                          <select class="custom-select form-control" name="kelas" id="kelas" required>
                            <option value="">-- Pilih Ruangan --</option>
                            <?php foreach($kelas as $key => $data) : ?>
                              <option value="<?php echo $data->nama_kelas; ?>"><?php echo $data->nama_kelas; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                    
<br>
<br>
                     
        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Buat Jadwal</button>
        
        <br><br><br><br>
    </div>
            </form>
          </div>
        </div>
        </div>
      </div>
    </section>
  </div>
</section>



