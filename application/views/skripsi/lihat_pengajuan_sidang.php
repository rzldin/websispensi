<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> DAFTAR PENGAJUAN SIDANG
  </div>

  <?php echo $this->session->flashdata('pesan') ?>

  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengajuan Sidang</a></h6><br>
            </div>
          
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="tables">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIM</th>
                      <th>File Skripsi</th>
                      <th>File Skripsi</th>
                      <th>File Skripsi</th>
                      <th>File Skripsi</th>
                      <th>Status</th>
                      <th colspan="1">AKSI</th>
                    </tr>
                  </thead>
                  <?php
                    $no=1;
                    foreach ($sidang as $s) :
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $s->nim; ?></td>
                      <td><a href="<?= base_url('./assets/fileskripsi/'.$s->file_sidang1 )?>" download="filesidang"><?= $s->file_sidang1; ?></a></td>
                      <td><a href="<?= base_url('./assets/fileskripsi/'.$s->file_sidang2 )?>" download="filesidang"><?= $s->file_sidang2; ?></a></td>
                      <td><a href="<?= base_url('./assets/fileskripsi/'.$s->file_sidang3 )?>" download="filesidang"><?= $s->file_sidang3; ?></a></td>
                      <td><a href="<?= base_url('./assets/fileskripsi/'.$s->file_sidang4 )?>" download="filesidang"><?= $s->file_sidang4; ?></a></td>
                       <td width="20px">
                        <?php 
                          if ($s->status==0){ echo "<div class='btn btn-secondary'>Menunggu</div>";}
                          elseif ($s->status==1){echo "<div class='btn btn-success'>Disetujui</div>";} 
                          elseif ($s->status==2) {echo "<div class='btn btn-danger'>Ditolak</div>";}   
                        ;?>
                     </td>
                     <td width="20px"> 
                      <?php ?>
                      <a  title="Disetujui" class="hapus btn btn-success btn-sm" href="<?php echo base_url();?>administrator/status_sidang/terima_sidang/<?php echo $s->id_sidang;?>"><i class="fa fa-check"></i></a></td>
                      <td width="20px">
                      <?php ?><a title="Ditolak" class="ubah btn btn-danger btn-sm" href="<?php echo base_url();?>administrator/status_sidang/tolak_sidang/<?php echo $s->id_sidang;?>"><i class="fa fa-ban" ></i></a>
                      <?php ?>
                     </td>  
                    </tr>
                     <?php endforeach; ?>
                  
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
 