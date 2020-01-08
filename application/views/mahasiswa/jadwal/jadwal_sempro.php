						<section class="row">
							<div class="col-12">
								<h3 class="mt-4 mb-4">Jadwal Sempro</h3>
							</div>
							<div class="container-fluid">


<div id="content">
	<br>
	<br>
	<div class="table-responsive">
	<table class="table table-hover table-condesed">
		<thead>
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Dosbing</th>
				<th>Hari</th>
				<th>Waktu Mulai</th>
				<th>Waktu Akhir</th>
				<th>Judul Skripsi</th>
				<th>Penguji</th>
				<th>kelas</th>
			</tr>
			<tbody>
			<?php
			$no=1;
			foreach ($jadwal as $jdwl) {
			echo "<tr><td>". $no++;
			echo "</td><td>". $jdwl->nim;
			echo "</td><td>". $jdwl->dosbing1;
			echo "</td><td>". $jdwl->nama_hari;
			echo "</td><td>". $jdwl->waktu_mulai;
			echo "</td><td>". $jdwl->waktu_akhir;
			echo "</td><td>". $jdwl->judul;
			echo "</td><td>". $jdwl->penguji1;
			echo "</td><td>". $jdwl->kelas;
		}?>
		</tbody>
		</thead>
</table>
</div>
</div>


			<a class="btn btn-danger" href="<?= base_url('mahasiswa/jadwal/pdf')?>"><i class="fa fa-print"></i> CETAK</a>
							</div>
						</section>