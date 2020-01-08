<!-- <div class="container-fluid"> -->
<div class="alert alert-success" role="alert">
   <i class="fas fa-users"></i> Daftar Bimbingan
  </div>

	<?= $this->session->flashdata('pesan') ?>

 	<div class="card shadow mb-4">
            <div class="card-header py-3">
          
    <div class="card-body">
        <div class="table-responsive">

	<div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="tables">
                	<thead>
		<tr>
			<th>No</th>
			<!--<th>Nama</th>-->
			<th>NIM</th>
			<th>Topik Skripsi</th>
			<th>Judul Skripsi</th>
		</tr>

		<?php
		$no=1;

		foreach ($proposal as $pro) : ?>

			<tr>
				<td><?= $no++ ?></td>
				<!--<td><?= $pro->nama_lengkap ?></td>-->
				<td><?= $pro->nim ?></td>
				<td><?= $pro->topik_skripsi ?></td>
				<td><?= $pro->judul ?></td>
			</tr>
		<?php endforeach; ?>
		</thead>		
	</table>
</div>
</div>
</div>
</div>
