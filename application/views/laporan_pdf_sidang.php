<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>

	<h3 style="text-align: center;">JADWAL SIDANG SKRIPSI</h3>
<br>
<br>
	<table  style="width: 100%;border: solid 1px ; border-collapse: collapse; ">
			<tr>
			  <th style="border: solid 1px;text-align:center;">No</th>
		      <th style="border: solid 1px;">NIM</th>
		      <th style="border: solid 1px;">DOSEN PEMBIMBING</th>
		      <th style="border: solid 1px;">TANGGAL</th>
		      <th style="border: solid 1px;">MULAI</th>
		      <th style="border: solid 1px;">AKHIR</th>
		      <th style="border: solid 1px;">JUDUL</th>
		      <th style="border: solid 1px;">PENGUJI SATU</th>
		      <th style="border: solid 1px;">PENGUJI DUA</th>
		      <th style="border: solid 1px;">KELAS</th>
			</tr>
		
			<?php

			$no = 1;
			foreach ($jadwal_skripsi as $js ) : ?>
			<tr>
				<td style="border: solid 1px;"><?php echo $no++ ?></td>
				<td style="border: solid 1px;"><?php echo $js->nim ?></td>
				<td style="border: solid 1px;"><?php echo $js->dosbing1 ?></td>
				<td style="border: solid 1px;"><?php echo $js->nama_hari ?></td>
				<td style="border: solid 1px;"><?php echo $js->waktu_mulai ?></td>
				<td style="border: solid 1px;"><?php echo $js->waktu_akhir ?></td>
				<td style="border: solid 1px;"><?php echo $js->judul ?></td>
				<td style="border: solid 1px;"><?php echo $js->penguji1 ?></td>
				<td style="border: solid 1px;"><?php echo $js->penguji2 ?></td>
				<td style="border: solid 1px;"><?php echo $js->kelas ?></td>
			</tr>


			<?php endforeach;?>
	</table>

</body></html>