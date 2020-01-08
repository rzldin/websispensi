

<h3 class="card-title">Profile</h3>
<br>
<div class="container">
  <img src="<?php echo base_url('assets/uploads/').$mahasiswa['photo']; ?>" style="max-width: 130px; width: 100%;">
<div class="my-2">
    <div class="">Nama : <?php echo $mahasiswa['nama_lengkap']; ?></div>
    <div class="">NIM : <?php echo $mahasiswa['nim']; ?></div>
    <div class="">Email : <?php echo $mahasiswa['email']; ?></div>
    <div class="">No. Telepon : <?php echo $mahasiswa['telepon']; ?></div>
    <div class="">Tanggal Bergabung : <?php echo $mahasiswa['tanggal_bergabung']; ?></div>
     <div class="">Jenis Kelamin : <?php echo $mahasiswa['jenis_kelamin']; ?></div>
    </div>
  </div>
</div>
<br><br><br>
<div class="pull-left">
        <?php echo anchor('mahasiswa/dasbor/home','<div class="btn btn-sm btn-primary"><i class="fa fa-undo"></i>kembali</div>')?>
        <br><br><br><br>
    </div>
