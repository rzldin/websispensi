<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-users"></i> DAFTAR DOSEN
	</div>


	<?php echo $this->session->flashdata('pesan') ?>
	
    
    <table class="table table hover table-bordered table-striped">

    <?php foreach($detail as $dtl) : ?>

             <img class="mb-5" src="<?php echo base_url('assets/uploads2/').$dtl->photo ?>" style=" width: 10%">
             <br>
            <tr>
                <td>Nama :</td>
                <td><?php echo $dtl->nama_dosen; ?></td>
                <td></td>
             </tr>
              <tr>
                <td>NIDN :</td>
                <td><?php echo $dtl->nidn; ?></td>
            </tr>
             <tr>
                <td>Username :</td>
                <td><?php echo $dtl->username; ?></td>
            </tr>
             <tr>
                <td>ALAMAT :</td>
                <td><?php echo $dtl->alamat; ?></td>
            </tr>
              <tr>
                <td>Email :</td>
                <td><?php echo $dtl->email; ?></td>
                <td></td>
             </tr>
              <tr>
                <td>Telepon</td>
                <td><?php echo $dtl->telp; ?></td>
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
          <br><br>
    <div class="pull-right">
        <?php echo anchor('administrator/dosen','<div class="btn btn-sm btn-primary"><i class="fa fa-undo"></i>Kembali</div>')?>
        <br><br><br><br>
    </div>
</div>