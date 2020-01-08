<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-calendar-alt"></i> UPDATE JADWAL
  </div>

<div id="content">
  <div class="pull-right">
        <?php echo anchor('administrator/jadwal/viewjadwal','<div class="btn btn-sm btn-primary"><i class="fa fa-undo"></i> Kembali</div>')?>
    </div>
    <br>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>Kode Jadwal</th>
        <th>Hari</th>
        <th>Waktu Mulai</th>
        <th>Waktu Akhir</th>
        <th>Judul Skripsi</th>
        <th>Kode Ruangan</th>
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <form action="<?php echo base_url(); ?>administrator/jadwal/updateJadwal" method="POST">
        <input class="input-small form-control" type="hidden" name="kode_jadwal" placeholder="kode_jadwal" maxlength="10" value="<?php echo $jadwal_skripsi[0]->kode_jadwal ?>">
        <tr>
          <td><span class="uneditable-input input-medium form-control"><?php echo $jadwal_skripsi[0]->kode_jadwal; ?></span></td>
          <td><input class="input-small form-control" type="text" name="nama_hari" placeholder="hari" maxlength="6" value="<?php echo $jadwal_skripsi[0]->nama_hari ?>"></td>
          <td><input class="input-small form-control" type="text" name="waktu_mulai" placeholder="hh:mm:ss" maxlength="8" value="<?php echo $jadwal_skripsi[0]->waktu_mulai ?>"></td>
          <td><input class="input-small form-control" type="text" name="waktu_akhir" placeholder="hh:mm:ss" maxlength="8" value="<?php echo $jadwal_skripsi[0]->waktu_akhir ?>"></td>
          <td><input class="input-large form-control" type="text" name="judul" placeholder="judul" maxlength="50" value="<?php echo $jadwal_skripsi[0]->judul ?>"></td>
          <td><input class="input-mini form-control" type="text" name="kode_ruangan" placeholder="kode ruangan" maxlength="11" value="<?php echo $jadwal_skripsi[0]->kode_ruangan ?>"></td>
          <td><input class="btn btn-success btn-sm" type="submit" value="Update"></td>
          <td><input class="btn btn-danger btn-sm" type="submit" value="Batal"></td>
        </tr>
      </form>
    </tbody>
  </table>
</div>