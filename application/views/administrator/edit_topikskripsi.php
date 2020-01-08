<div class="container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-user-plus"></i> FORM UPDATE TOPIK SKRIPSI
	</div>
	 <div class="pull-right">
        <?php echo anchor('administrator/topik_skripsi','<div class="btn btn-sm btn-primary mb-5 mt-3"><i class="fa fa-home"></i> Beranda</div>')?>
        <br>
    </div>

    <?php foreach ($topik_skripsi as $tps) : ?>

    <form method="post" action="<?php echo base_url('administrator/topik_skripsi/edit_aksi/') ?>">
    	<div class="form-group">
		<label>Topik Skripsi</label>
		<input type="hidden" name="id_topik_skripsi" class="form-control" value="<?php echo $tps->id_topik_skripsi ?>">
		<input type="text" name="nama_topik" placeholder="Topik Skripsi" class="form-control" value="<?php echo $tps->nama_topik ?>">
	</div>

	<div class="form-group">
		<label>Urutan</label>
		<input type="text" name="urutan" placeholder="Urutan" class="form-control" value="<?php echo $tps->urutan ?>">
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