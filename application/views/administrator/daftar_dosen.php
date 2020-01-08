<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-university"></i> DAFTAR DOSEN
	</div>

	<?php echo $this->session->flashdata('pesan') ?>

	<?php echo anchor('administrator/dosen/tambah_dosen','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>Tambah Dosen</button>') ?>
 	<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><a href="<?php echo base_url('administrator/dosen')?>" style="text-decoration: none;">Data Dosen</a></h6><br>
              <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search navbar-right" method="post" action="<?php echo base_url('administrator/dosen/search') ?>">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Cari" aria-label="Search" aria-describedby="basic-addon2" name="keyword">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
   </div>
          
    <div class="card-body">
        <div class="table-responsive">

	<table class="table table-bordered table-hover table-striped" id="tables">
		<tr>
			<th>NO</th>
			<th>NIDN</th>
			<th>KODE DOSEN</th>
			<th>NAMA</th>
			<th>EMAIL</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php
		$no=1;

		foreach ($dosen as $dsn) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $dsn->nidn ?></td>
				<td><?php echo $dsn->kode_dosen ?></td>
				<td><?php echo $dsn->nama_dosen ?></td>
				<td><?php echo $dsn->email ?></td>
				<td width="20px"><?php echo anchor('administrator/dosen/detail/'.$dsn->nidn,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>')?>
                </td>
                <td width="20px"><?php echo anchor('administrator/dosen/update/'.$dsn->nidn,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?>
                </td>
                 <td width="20px" onclick="return confirm('Apakah anda yakin, ingin menghapus data ini?')">
                  <?php echo anchor('administrator/dosen/hapus/'.$dsn->nidn,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?>
                </td>
			</tr>
		<?php endforeach; ?>		
	</table>
</div>
</div>
</div>
</div>
