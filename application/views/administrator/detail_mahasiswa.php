<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-users"></i> DAFTAR MAHASISWA
	</div>


	<?php echo $this->session->flashdata('pesan') ?>
	
    
    <table class="table table hover table-bordered table-striped">

    <?php foreach($detail as $dtl) : ?>

             <img class="mb-5" src="<?php echo base_url('assets/uploads/').$dtl->photo ?>" style=" width: 10%">
             <br>
            <tr>
                <td>Nama :</td>
                <td><?php echo $dtl->nama_lengkap; ?></td>
                <td></td>
             </tr>
              <tr>
                <td>NIM :</td>
                <td><?php echo $dtl->nim; ?></td>
            </tr>
              <tr>
                <td>Email :</td>
                <td><?php echo $dtl->email; ?></td>
                <td></td>
             </tr>
              <tr>
                <td>Telepon</td>
                <td><?php echo $dtl->telepon; ?></td>
                <td></td>
             </tr>
              <tr>
                <td>Tanggal Bergabung :</td>
                <td><?php echo date('d M Y',strtotime($dtl->tanggal_bergabung)) ?></td>
                <td></td>
             </tr>
              <tr>
                <td>Jenis Kelamin :</td>
                <td><?php echo $dtl->jenis_kelamin; ?></td>
                <td></td>
             </tr>


              <?php endforeach;
				?>

          </table>
          
    <div class="pull-right">
        <?php echo anchor('administrator/mahasiswa','<div class="btn btn-sm btn-primary"><i class="fa fa-undo"></i>Kembali</div>')?>
        <br><br><br><br>
    </div>
</div>