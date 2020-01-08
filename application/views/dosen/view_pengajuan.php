<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-university"></i> DAFTAR PENGAJUAN JUDUL
	</div>

	<?php echo $this->session->flashdata('pesan') ?>

	<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengajuan Judul</a></h6><br>
            </div>
          
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="tables">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIM</th>
                      <th>Topik Skripsi</th>
                      <th>Judul Skripsi</th>
                      <th>File Skripsi</th>
                      <th>Pengajuan Dosen</th>
                      <th>Status</th>
                      <th colspan="1">AKSI</th>
                    </tr>
                    <?php
                        $no=1;
                        foreach ($proposal as $pro) :
                    ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $pro->nim ?></td>
                      <td><?= $pro->topik_skripsi ?></td>
                      <td><?= $pro->judul ?></td>
                      <td><a href="<?= base_url('./assets/fileskripsi/'.$pro->file_skripsi )?>" download="fileskripsi"><?= $pro->file_skripsi ?></a></td>
                      <td><?= $pro->dosbing1 ?></td>
                       <td width="20px">
                        <?php 
                          if ($pro->status==0){ echo "<div class='btn btn-secondary'>Menunggu</div>";}
                          elseif ($pro->status==1){echo "<div class='btn btn-success'>Disetujui</div>";} 
                          elseif ($pro->status==2) {echo "<div class='btn btn-danger'>Ditolak</div>";}   
                        ;?>
                     </td>
                     <td> 
                      <?php ?>
                      <a  title="Disetujui" class="hapus btn btn-success btn-sm" href="<?php echo base_url();?>dosen/status_proposal/terima/<?php echo $pro->id_proposal;?>"><i class="fa fa-check"></i></a></td>
                      <td width="20px">
                      <?php ?><a title="Ditolak" class="ubah btn btn-danger btn-sm" href="<?php echo base_url();?>dosen/status_proposal/menolak/<?php echo $pro->id_proposal;?>"><i class="fa fa-ban" ></i></a>
                      <?php ?>
                     </td>    
                  </tr>
                    <?php endforeach; ?>
                  </thead>
                  
                  	 
                  
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
 
      <!-- End of Main Content -->

      <!-- Footer -->