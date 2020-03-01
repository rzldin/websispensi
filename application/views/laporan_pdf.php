<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
    <page_header>
        <table style="width: 100%; border: 0px;">
            <tr>
                <td style="text-align: left;    width: 5%"><img src="<?php echo base_url();'assets/img/admin.png'?>" /></td>
                <td style="text-align: left;    width: 34%;font-weight: lighter;">Universitas Teknologi Sumbawa</td>
                
            </tr>
        </table>
    </page_header>

	<h3 style="text-align: center;">JADWAL SEMINAR PROPOSAL</h3>
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
		      <th style="border: solid 1px;">KELAS</th>
			</tr>
		
			<?php

			$no = 1;
			foreach ($jadwal_sempro as $jdwl ) : ?>
			
			<tr>
				<td style="border: solid 1px;"><?php echo $no++ ?></td>
				<td style="border: solid 1px;"><?php echo $jdwl->nim ?></td>
				<td style="border: solid 1px;"><?php echo $jdwl->dosbing1 ?></td>
				<td style="border: solid 1px;"><?php echo $jdwl->nama_hari ?></td>
				<td style="border: solid 1px;"><?php echo $jdwl->waktu_mulai ?></td>
				<td style="border: solid 1px;"><?php echo $jdwl->waktu_akhir ?></td>
				<td style="border: solid 1px;"><?php echo $jdwl->judul ?></td>
				<td style="border: solid 1px;"><?php echo $jdwl->penguji1 ?></td>
				<td style="border: solid 1px;"><?php echo $jdwl->kelas ?></td>
			</tr>


			<?php endforeach;?>
	</table>

</body></html>