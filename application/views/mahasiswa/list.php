<div class="container-fluid">
<h3 class="card-title">List	 Judul</h3>

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
			<!--<th>Nim</th>-->
			<th>Topik Skripsi</th>
			<th>Judul Skripsi</th>
			<th>File Skripsi</th>
			<th>Pengajuan Dosen</th>
			<th>Status</th>
		</tr>

		<?php
		$no=1;

		foreach ($proposal as $pro) : ?>

			<tr>
				<td><?= $no++ ?></td>
				<!--<td><?= $pro->nim ?></td>-->
				<td><?= $pro->topik_skripsi ?></td>
				<td><?= $pro->judul ?></td>
				<td><?= $pro->file_skripsi ?></td>
				<td><?= $pro->dosbing1 ?></td>
				<td>
				<?php
					if($pro->status==0) {
						echo '<button type="button" class="btn btn-info btn-sm">MENUNGGU</button>';
					} else if($pro->status==1) {
						echo '<button type="button" class="btn btn-success btn-sm">DISETUJUI</button>';
					} else {
						echo '<button type="button" class="btn btn-warning btn-sm">DITOLAK</button>';
					}
				?></td>
			</tr>
		<?php endforeach; ?>
		</thead>		
	</table>
</div>
</div>
</div>
</div>
