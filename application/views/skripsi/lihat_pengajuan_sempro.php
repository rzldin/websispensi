<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-university"></i> DAFTAR PENGAJUAN SEMPRO
	</div>

	<?php echo $this->session->flashdata('pesan') ?>

	<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pengajuan Seminar Proposal</a></h6><br>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped" id="tables">
          <thead>
            <tr>
              <th>No</th>
              <th>NIM</th>
              <th>Persyaratan Sempro</th>
              <th>Permohonan Sempro</th>
              <th>File Persetujuan Seminar</th>
              <th>File Bukti Lunas Administrasi</th>
              <th>Status</th>
              <th colspan="2">AKSI</th>
            </tr>
          <?php
          $no=1;
              foreach ($sempro as $s) :
          ?>
          <?php var_dump($s); ?>
                <tr>
                   <td><?= $no++; ?></td>
                    <td><?= $s->nim ?></td>
                    <td><a href="<?= base_url('./assets/filesempro/'.$s->file_sempro1 )?>" download="filesempro"><?= $s->file_sempro1 ?></a></td>
                    <td><a href="<?= base_url('./assets/filesempro/'.$s->file_sempro2 )?>" download="filesempro"><?= $s->file_sempro2 ?></a></td>
                    <td><a href="<?= base_url('./assets/filesempro/'.$s->file_sempro3 )?>" download="filesempro"><?= $s->file_sempro3 ?></a></td>
                    <td><a href="<?= base_url('./assets/filesempro/'.$s->file_sempro4 )?>" download="filesempro"><?= $s->file_sempro4 ?></a></td>
                    <td width="20px">
                        <?php 
                          if ($s->status==0){ echo "<div class='btn btn-secondary'>Menunggu</div>";}
                          elseif ($s->status==1){echo "<div class='btn btn-success'>Disetujui</div>";} 
                          elseif ($s->status==2) {echo "<div class='btn btn-danger'>Ditolak</div>";}   
                        ;?>
                     </td>
                     <td width="20px"> 
                      <?php ?>
                      <a  title="Disetujui" class="hapus btn btn-success btn-sm" href="<?php echo base_url();?>administrator/status_proposal/terima_sempro/<?php echo $s->id_sempro;?>"><i class="fa fa-check"></i></a></td>
                      <td width="20px">
                      <?php ?><a title="Ditolak" class="ubah btn btn-danger btn-sm" href="<?php echo base_url();?>administrator/status_proposal/tolak_sempro/<?php echo $s->id_sempro;?>"><i class="fa fa-ban" ></i></a>
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
</div>
 