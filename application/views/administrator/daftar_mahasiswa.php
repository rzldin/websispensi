<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-university"></i> DAFTAR MAHASISWA
	</div>

	<?php echo $this->session->flashdata('pesan') ?>


	<?php echo anchor('administrator/mahasiswa/tambah_mahasiswa','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>Tambah Mahasiswa</button>') ?>
	<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><a href="<?php echo base_url('administrator/mahasiswa')?>" style="text-decoration: none;">Data Mahasiswa</a></h6><br>
              <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search navbar-right" method="post" action="<?php echo base_url('administrator/mahasiswa/search') ?>">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Cari" aria-label="Search" aria-describedby="basic-addon2" name="keyword">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
            </div>
          
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="tables">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIM</th>
                      <th>NAMA</th>
                      <th>EMAIL</th>
                      <th>BLOKIR</th>
                      <th colspan="3">AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php
		$no=1;

		foreach ($mahasiswa as $mhs) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $mhs->nim ?></td>
         		<td><a class="a-href" title="Kirim Password?" text="Ini akan mengubah password dan akan di kirim melalui email." href="<?php base_url('auth/sendPassword/' . $mhs->id)?>"></a>
          <?php echo $mhs->nama_lengkap ?></td>
		        <td><?php echo $mhs->email ?></td>
		        <td><?php echo $mhs->blokir ?></td>
		        <td width="20px"><?php echo anchor('administrator/mahasiswa/detail/'.$mhs->id,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>')?></td>
		        <td width="20px"><?php echo anchor('administrator/mahasiswa/update/'.$mhs->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?>
		                </td>
		         <td width="20px" onclick="return confirm('Apakah anda yakin, ingin menghapus data ini?')">
		                  <?php echo anchor('administrator/mahasiswa/hapus/'.$mhs->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?>
		                </td>
		      </tr>
		<?php endforeach; ?>		
             
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
 
      <!-- End of Main Content -->

