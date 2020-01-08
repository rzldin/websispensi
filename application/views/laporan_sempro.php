<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>

	<h3 style="text-align: center;">JADWAL SEMINAR PROPOSAL</h3>
<br>
<br>
	<table>
			<tr>
			  <th>No</th>
		      <th>NIM</th>
		      <th>DOSEN PEMBIMBING</th>
		      <th>TANGGAL</th>
		      <th>MULAI</th>
		      <th>AKHIR</th>
		      <th>JUDUL</th>
		      <th>PENGUJI SATU</th>
		      <th>KELAS</th>
			</tr>
		
			<?php

			$no = 1;
			foreach ($jadwal_sempro as $jdwl ) : ?>
			
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $jdwl->nim ?></td>
				<td><?php echo $jdwl->dosbing1 ?></td>
				<td><?php echo $jdwl->nama_hari ?></td>
				<td><?php echo $jdwl->waktu_mulai ?></td>
				<td><?php echo $jdwl->waktu_akhir ?></td>
				<td><?php echo $jdwl->judul ?></td>
				<td><?php echo $jdwl->penguji1 ?></td>
				<td><?php echo $jdwl->kelas ?></td>
			</tr>


			<?php endforeach;?>
	</table>

</body></html>