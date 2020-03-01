<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-university"></i> DAFTAR JADWAL SIDANG
	</div>

	<?php echo $this->session->flashdata('pesan') ?>

	<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><a href="<?php echo base_url('administrator/mahasiswa')?>" style="text-decoration: none;">Data Jadwal Sidang</a></h6><br>
         <a class="btn btn-danger" href="<?php echo base_url('administrator/auth/pdf_sidang')?>"><i class="fa fa-print"></i> Export PDF</a>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped" id="tables">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIM</th>
                  <th>DOSBING</th>
                  <th>HARI</th>
                  <th>MULAI</th>
                  <th>AKHIR</th>
                  <th>JUDUL</th>
                  <th>PENGUJI SATU</th>
                  <th>PENGUJI DUA</th>
                  <th>KELAS</th>
                  <th colspan="2">AKSI</th>
               </tr>
              </thead>
                 <tbody>
                  	<?php
		$no=1;

		foreach ($jadwal_sidang as $js) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $js->nim ?></td>
		    <td><?php echo $js->dosbing1 ?></td>
		    <td><?php echo $js->nama_hari ?></td>
        <td><?php echo $js->waktu_mulai ?></td>
        <td><?php echo $js->waktu_akhir ?></td>
        <td><?php echo $js->judul ?></td>
        <td><?php echo $js->penguji1 ?></td>
        <td><?php echo $js->penguji2 ?></td>
        <td><?php echo $js->kelas ?></td>
        <td width="20px"><?php echo anchor('administrator/penjadwalan/update/'.$js->kd_jadwal_skripsi,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?>
        </td>
        <td width="20px" onclick="return confirm('Apakah anda yakin, ingin menghapus data ini?')">
        <?php echo anchor('administrator/penjadwalan/hapus/'.$js->kd_jadwal_skripsi,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?>
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

      <!-- Footer -->
<script>
  function deletedata()
  {
        swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        type : "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText:"Yes, delete it!",
        closeOnConfirm: false
      },
      function(){
          $.ajax({
            url: "<?php echo base_url('administrator/mahasiswa/hapus/')?>",
            type:"post",
            data:{id:id},
            success:function(){
              swal('Data Berhasil di Hapus','success');
            },
            error:function(){
              swal('data gagal di hapus','error');
            }
          });
    });
</script>


