<div class="container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-user-plus"></i> FORM TAMBAH DOSEN
	</div>

	<?php echo $this->session->flashdata('pesan') ?>
	<div class="pull-right">
        <?php echo anchor('administrator/dosen','<div class="btn btn-sm btn-primary"><i class="fa fa-undo"></i> Kembali</div>')?>
    </div>
    <br>
    <br>

    <form method="post" action="<?php echo base_url('administrator/dosen/tambah_dosen_aksi') ?>" enctype="multipart/form-data">
    	<div class="form-group">
		<label>Nama Dosen</label>
		<input type="text" name="nama_dosen" placeholder="Masukkan Nama Dosen" class="form-control">
		<?php echo form_error('nama_dosen','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>NIDN</label>
		<input type="text" name="nidn" placeholder="Masukkan NIDN" class="form-control">
		<?php echo form_error('nidn','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Kode Dosen </label>
		<input type="text" name="kode_dosen" placeholder="Kode Dosen" class="form-control">
		<?php echo form_error('kode_dosen','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" placeholder="Masukkan Username" class="form-control">
		<?php echo form_error('username','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" placeholder="Masukkan Password" class="form-control">
		<?php echo form_error('password','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control">
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
		<input type="text" name="email" placeholder="Masukkan Email" class="form-control">
		<?php echo form_error('email','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>No. Telepon</label>
		<input type="number" name="telp" placeholder="Masukkan No. Telepon" class="form-control">
		<?php echo form_error('telp','<div class="text-danger small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Foto Profil</label><br>
		<input type="file" name="photo">
	</div>

	<button type="submit" class="btn btn-primary mb-5 mt-3"><i class="fa fa-save"></i> Simpan</button>
</form>

	
</div>