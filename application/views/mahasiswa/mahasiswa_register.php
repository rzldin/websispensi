
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SISPENSI | 2019 Skripsi UTS</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/fontawesome5/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/fontawesome5/css/fontawesome.css">
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/logo.jpg">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-image: url('https://cdn.csu.edu.au/__data/assets/image/0006/2875965/M_Inclusive_Education_Banner_01.jpg'); background-size: cover">

  <div class="container"><br>

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-6 col-md-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">

                    <h1 class="h4 text-gray-900 mb-4">Register Mahasiswa</h1>
                    
                    <?php echo $this->session->flashdata('pesan') ?>
                  </div>
                  <form method="post" action="<?php echo base_url('mahasiswa/register/proses_registrasi')?>" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" name="nama_lengkap" required>
                      <?php echo form_error('nama_lengkap', '<div class="text-danger small ml-3">','</div>')?>
                    </div>
                     <div class="form-group">
                      <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" required>
                      <?php echo form_error('nim', '<div class="text-danger small ml-3">','</div>')?>
                    </div>
                     <div class="form-group">
                      <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
                      <?php echo form_error('email', '<div class="text-danger small ml-3">','</div>')?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" required>
                       <?php echo form_error('password', '<div class="text-danger small ml-3">','</div>')?>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="telepon" placeholder="No. Telepon" name="telepon" required>
                       <?php echo form_error('telepon', '<div class="text-danger small ml-3">','</div>')?>
                    </div>
                    <div class="form-group">
                      <select name="jenis_kelamin" class="form-control" >
                        <?php
                           if ($jenis_kelamin == 'Laki-laki') {
                        ?>
                          <option value="Laki-laki" selected>Laki - Laki</option>
                          <option value="Perempuan">Perempuan</option>

                        <?php
                          } elseif ($jenis_kelamin == 'Perempuan') {
                        ?>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan" selected>Perempuan</option>

                        <?php
                          }else{
                        ?>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>

                      <?php } ?>
                      </select>
                    </div>
                    <br>
                    <div class="col-xs-4">
                        <button type="submit" name="login" class="btn btn-primary btn-block">register</button>
                    </div>

                    <br><br>
                    <div class="text-center">
                      Sudah punya Akun? Login 
                      <a href="<?php echo base_url('login/mahasiswa'); ?>" class="text-center" style="text-decoration: none;">Disini</a><br>
                    </div>
                    
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/admin/js/sb-admin-2.min.js"></script>

</body>

</html>
