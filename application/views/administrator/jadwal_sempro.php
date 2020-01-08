<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-calendar-alt"></i> JADWAL SEMPRO
	</div>

<div id="content">
	<a class="btn btn-danger" href="<?php echo base_url('administrator/auth/pdf')?>"><i class="fa fa-file"></i> Export PDF</a>
	<br>
	<br>
	<div class="table-responsive">
	<table class="table table-hover table-condesed">
		<thead>
			<tr>
				<th>Kode Jadwal</th>
				<th>Hari</th>
				<th>Waktu Mulai</th>
				<th>Waktu Akhir</th>
				<th>Judul Skripsi</th>
				<th>Ruangan</th>
				<th colspan="2">Aksi</th>
			</tr>
		</thead>
		<tbody>
			
			<?php foreach ($jadwal_skripsi as $jdwl){
				echo "<tr><td>". $jdwl->kode_jadwal;
				echo "</td><td>". $jdwl->nama_hari;
				echo "</td><td>". $jdwl->waktu_mulai;
				echo "</td><td>". $jdwl->waktu_akhir;
				echo "</td><td>". $jdwl->judul;
				echo "</td><td>". $jdwl->kode_ruangan;
				echo "</td><td>";
				echo "<a class='btn btn-success btn-sm' href='". base_url() ."administrator/jadwal/formUpdateJadwal/". $jdwl->kode_jadwal ."' title='Update'><i class='fas fa-edit'></i></a>";
				echo "</td><td>";
				echo "<a class='btn btn-danger btn-sm' href='". base_url() ."administrator/jadwal/deleteJadwal/". $jdwl->kode_jadwal ."' title='Delete'><i class='fas fa-trash'></i></a>";
				echo "</td></tr>";
			}
			?>
		</tbody>
		<tfoot>
			<form action="<?php echo base_url(); ?>administrator/jadwal/insertJadwal" method="POST">
				<tr>
					<td><span class="uneditable-input input-medium">Kode Jadwal</span></td>
					<td><input class="input-small form-control" type="text" name="nama_hari" placeholder="hari" maxlength="6"></td>
					<td><input class="input-small form-control" type="text" name="waktu_mulai" placeholder="hh:mm:ss" maxlength="8"></td>
					<td><input class="input-small form-control" type="text" name="waktu_akhir" placeholder="hh:mm:ss" maxlength="8"></td>
					<td><input class="input-large form-control" type="text" name="judul" placeholder="Judul Skripsi" maxlength="255"></td>
					<td><input class="input-mini form-control" type="text" name="kode_ruangan" placeholder="kode ruangan" maxlength="11"></td>
					<td><input class="btn btn-sm btn-success" type="submit" value="Insert"></td>
					<td></td>
				</tr>
			</form>
		</tfoot>
	</table>
</div>
</div>
</div>