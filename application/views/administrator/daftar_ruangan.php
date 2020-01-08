<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> DAFTAR RUANGAN
  </div>


  <?php echo $this->session->flashdata('pesan') ?>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 <i class="fa fa-plus"></i> Tambah Ruangan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Ruangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('administrator/daftar_ruangan/tambah_ruangan') ?>">
         <div class="form-group">
          <label class="col-sm-3 control-label">Ruangan</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="nama_kelas" placeholder="Ruangan" required="required">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">Kode Ruangan</label>
          <div class="col-sm-12">
            <input type="number" class="form-control" name="kode_ruangan" placeholder="Kode Ruangan" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label"></label>
          <div class="col-sm-9">
            <input type="submit" class="btn btn-primary" name="submit" value="Simpan Data">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
      </div>
    </div>
  </div>
</div>
    <div class="card-body">
        <div class="table-responsive">

  <table class="table table-bordered table-hover table-striped" id="tables">
    <tr>
      <th>NO</th>
      <th>Ruangan</th>
      <th>Kode Ruangan</th>
      <th colspan="2">AKSI</th>
    </tr>

    <?php
    $no=1;

    foreach ($daftar_ruangan as $dr) : ?>

      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $dr->nama_kelas ?></td>
        <td><?php echo $dr->kode_ruangan ?></td>
        <td width="20px"><?php echo anchor('administrator/daftar_ruangan/edit/'.$dr->id_ruangan,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?>
        </td>
        <td width="20px" onclick="return confirm('Apakah anda yakin, ingin menghapus data ini?')">
        <?php echo anchor('administrator/daftar_ruangan/delete/'.$dr->id_ruangan,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?>
        </td>
      </tr>
    <?php endforeach; ?> 
  </table>
</div>
</div>
</div>
</div>
