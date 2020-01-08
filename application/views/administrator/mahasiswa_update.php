<div class="container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-user-plus"></i> FORM UPDATE MAHASISWA
	</div>
	 <div class="pull-right">
        <?php echo anchor('administrator/mahasiswa','<div class="btn btn-sm btn-primary mb-5 mt-3"><i class="fa fa-home"></i> Beranda</div>')?>
        <br>
    </div>

	<?php foreach ($mahasiswa as $mhs) : ?>

    <form method="post" action="<?php echo base_url('administrator/mahasiswa/update_aksi/') ?>" enctype="multipart/form-data">
    	<div class="form-group">
		<label>Nama Mahasiswa</label>
		<input type="text" name="nama_lengkap" placeholder="Masukkan Nama" class="form-control" value="<?php echo $mhs->nama_lengkap ?>">
		<?php echo form_error('nim','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>NIM Mahasiswa</label>
		<input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
		<input type="text" name="nim" class="form-control"  value="<?php echo $mhs->nim ?>">
		<?php echo form_error('nama','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" placeholder="Masukkan Email" class="form-control" value="<?php echo $mhs->email ?>">
		<?php echo form_error('email','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" placeholder="Masukkan Password" class="form-control" value="<?php echo $mhs->password ?>">
		<?php echo form_error('password','<div class="text-danger small ml-3">','</div>') ?>
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
		<label>telepon</label>
		<input type="number" name="telepon" placeholder="Masukkan No. Telepon" class="form-control" value="<?php echo $mhs->telepon ?>">
		<?php echo form_error('telepon','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Blokir</label>
		<select name="blokir" class="form-control">
			<?php 
				if ($blokir == 'Y') {
			?>
			<option value="Y" selected>Ya</option>
			<option value="N">Tidak</option>

			<?php
				} elseif ($blokir == 'N') {
			?>
			<option value="Y">Ya</option>
			<option value="N" selected>Tidak</option>

			<?php
				} else{
			?>
			<option value="Y">Ya</option>
			<option value="N" selected="">Tidak</option>

		<?php } ?>
		</select>
		<?php echo form_error('blokir','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<?php foreach ($detail as $dt) : ?>
			<img src="<?php echo base_url(). 'assets/uploads/'.$dt->photo ?>" style=" width: 10%">
		<?php endforeach; ?><br><br>
		<label>Foto Profil</label><br>
		<input type="file" name="userfile" value="<?php echo $dt->photo ?>">
	</div>

	<button type="submit" class="btn btn-primary mb-5 mt-3"><i class="fa fa-save"></i> Simpan</button>

</form>

<?php endforeach; ?>


	
</div>