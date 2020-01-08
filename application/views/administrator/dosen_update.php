<div class="container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-user-plus"></i> FORM UPDATE DOSEN
	</div>
	 <div class="pull-right">
        <?php echo anchor('administrator/dosen','<div class="btn btn-sm btn-primary mb-5 mt-3"><i class="fa fa-home"></i> Beranda</div>')?>
        <br>
    </div>

	<?php foreach ($dosen as $dsn) : ?>

    <form method="post" action="<?php echo base_url('administrator/dosen/update_aksi/') ?>" enctype="multipart/form-data">
    	<div class="form-group">
		<label>Nama Dosen</label>
		<input type="text" name="nama_dosen" placeholder="Masukkan Nama" class="form-control" value="<?php echo $dsn->nama_dosen ?>">
		<?php echo form_error('nama_dosen','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>NIDN</label>
		<input type="hidden" name="id_dosen" class="form-control" value="<?php echo $dsn->id_dosen ?>">
		<input type="text" name="nidn" class="form-control"  value="<?php echo $dsn->nidn ?>">
		<?php echo form_error('nidn','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" placeholder="Masukkan Username" class="form-control" value="<?php echo $dsn->username ?>">
		<?php echo form_error('username','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" placeholder="Masukkan Password" class="form-control" value="<?php echo $dsn->password ?>">
		<?php echo form_error('password','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="password" placeholder="Masukkan Alamat" class="form-control" value="<?php echo $dsn->alamat ?>">
		<?php echo form_error('alamat','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Jenis Kelamin</label>
		<select name="jenis_kelamin" class="form-control">
			<?php
				if ($jenis_kelamin == 'Laki-laki') {
			?>
			<option value="Laki-laki" selected>Laki - Laki</option>
			<option value="Perempuan">Perempuan</option>

			<?php
				} elseif ($jenis_kelamin == 'Perempuan') {
			?>
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan" selected>Perempuan</option>

			<?php
				}else{
			?>
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>

		<?php } ?>
		</select>
		<?php echo form_error('jenis_kelamin','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" placeholder="Masukkan Email" class="form-control" value="<?php echo $dsn->email ?>">
		<?php echo form_error('password','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>telepon</label>
		<input type="number" name="telp" placeholder="Masukkan No. Telepon" class="form-control" value="<?php echo $dsn->telp ?>">
		<?php echo form_error('telp','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<?php foreach ($detail as $dt) : ?>
			<img src="<?php echo base_url(). 'assets/uploads2/'.$dt->photo ?>" style=" width: 10%">
		<?php endforeach; ?><br><br>
		<label>Foto Profil</label><br>
		<input type="file" name="userfile" value="<?php echo $dt->photo ?>">
	</div>

	<button type="submit" class="btn btn-primary mb-5 mt-3"><i class="fa fa-save"></i> Simpan</button>

</form>

<?php endforeach; ?>


	
</div>