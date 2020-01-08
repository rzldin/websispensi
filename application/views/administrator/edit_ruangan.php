<div class="container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-user-plus"></i> FORM UPDATE RUANGAN
	</div>
	 <div class="pull-right">
        <?php echo anchor('administrator/daftar_ruangan','<div class="btn btn-sm btn-primary mb-5 mt-3"><i class="fa fa-undo"></i> Kembali</div>')?>
        <br>
    </div>

    <?php foreach ($daftar_ruangan as $dr) : ?>

    <form method="post" action="<?php echo base_url('administrator/daftar_ruangan/edit_aksi/') ?>">
    	<div class="form-group">
		<label>Ruangan</label>
		<input type="hidden" name="id_ruangan" class="form-control" value="<?php echo $dr->id_ruangan ?>">
		<input type="text" name="nama_kelas" placeholder="Nama Kelas" class="form-control" value="<?php echo $dr->nama_kelas ?>">
	</div>

	<div class="form-group">
		<label>Kode Ruangan</label>
		<input type="text" name="kode_ruangan" placeholder="Kode Ruangan" class="form-control" value="<?php echo $dr->kode_ruangan ?>">
	</div>

 <div class="form-group">
    <label class="col-sm-3 control-label"></label>
    <div class="col-sm-9">
      <input type="submit" class="btn btn-primary" name="submit" value="Simpan Data">
    </div>
  </div>

</form>
<?php endforeach; ?>
</div>

	</div>
</div>