<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> DAFTAR TOPIK SKRIPSI
  </div>

  <?php echo $this->session->flashdata('pesan') ?>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 <i class="fa fa-plus"></i> Tambah Topik Skripsi
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Topik Skripsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('administrator/topik_skripsi/tambah_topikskripsi') ?>">
         <div class="form-group">
          <label class="col-sm-3 control-label">Topik Skripsi</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="nama_topik" placeholder="Masukkan Topik Skripsi" required="required">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">Urutan Kategori</label>
          <div class="col-sm-12">
            <input type="number" class="form-control" name="urutan" placeholder="Masukkan Urutan" required>
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
      <th>TOPIK SKRIPSI</th>
      <th>URUTAN</th>
      <th colspan="2">AKSI</th>
    </tr>

    <?php
    $no=1;

    foreach ($topik_skripsi as $tps) : ?>

      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $tps->nama_topik ?></td>
        <td><?php echo $tps->urutan ?></td>
        <td width="20px"><?php echo anchor('administrator/topik_skripsi/edit/'.$tps->id_topik_skripsi,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?>
        </td>
        <td width="20px" onclick="return confirm('Apakah anda yakin, ingin menghapus data ini?')">
        <?php echo anchor('administrator/topik_skripsi/delete/'.$tps->id_topik_skripsi,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?>
        </td>
      </tr>
    <?php endforeach; ?>    
  </table>
</div>
</div>
</div>
</div>
