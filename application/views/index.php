<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/eskripsi.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/main.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/sispensi.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/sispensi-footer.css">
 	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/logo.jpg">

    <title>SISPENSI | 2019 Skripsi UTS</title>
  </head>
  <body>

	<nav class="navbar navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand font-weight-bold" href="">
				<img src="<?php echo base_url() ?>assets/img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> SISPENSI
			</a>
			
			<form class="form-inline">
				<button class="btn btn-outline-primary" type="submit"><a href="#loginsispensi" name="loginsispensi">login</a></button>
			</form>
		</div>
	</nav>

	<div class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
			<img src="assets/img/slider-web.png" class="img-fluid d-block w-100" alt="...">
				<div class="carousel-caption narrow d-none d-md-block">
				    <h1>Universitas Teknologi Sumbawa</h1>
				    <p>Jl. Raya Olat Maras, Batu Alang, Moyo Hulu, Pernek, Moyohulu, Kabupaten Sumbawa, Nusa Tenggara Barat. 84371</p>
				</div>
			</div>
		</div>
	</div>

<!-- Jumbotron Pofil -->
	<div class="jumbotron jumbotron-fluid bg-light">
		<div class="container narrow text-center">
			<h2 class="heading">Profil</h2>

			<p class="lead">Universitas Teknologi Sumbawa (UTS) berlokasi di kaki bukit Olat Maras (Bukit Kebahagian) Kabupaten Sumbawa - Nusa Tenggara Barat. Kampus yang asri ini berjarak kurang lebih 15 km dari Kota Sumbawa Besar dan menjadi kampus berbasis teknologi di belahan Indonesia bagian Timur.</p>
		</div>
	</div>
<!-- End Jumbotron Profil -->

<!--Pricing-->
  <section id="loginsispensi" class="section-padding">
    <div class="container-akses text-center">
    	<div class="container-fluid">
	    <h2 class="heading">Login</h2>
	    <p class="lead">Silahkan Pilih hak Akses dibawah ini untuk Login</p>
	     <div class="heading-underline"></div>
	    <br>
	    		<br>
	   

	    	<div class="row no-padding">

	    		<div class="col-sm-4">
	    			<div class="loginakun">
	    			<a href="<?php echo site_url('masukmhs') ?>" target="_blank">
	    			<img src="<?php echo base_url() ?>assets/img/mahasiswa.png" width="30%" height="30%">
	    			</a>
	    			<h5>MAHASISWA</h5>
	    			</div>
	    		</div>

	    		<div class="col-sm-4">
	    			<div class="loginakun">
	    			<a href="<?php echo site_url('masukdsn') ?>" target="_blank">
	    			<img src="<?php echo base_url() ?>assets/img/dosen.png" width="30%" height="30%">
	    			</a>
	    			<h5>DOSEN</h5>
	    			</div>
	    		</div>

	    		<div class="col-sm-4">
	    			<div class="loginakun">
	    			<a href="<?php echo site_url('masukprd') ?>" target="_blank">
	    			<img src="<?php echo base_url() ?>assets/img/admin.png" width="30%" height="30%">
	    			</a>
	    			<h5>PRODI</h5>
	    			</div>
	    		</div>
	    	
	    	
	    	</div>
	    </div>
    </div>
  </section>
  <!-- End Pricing -->

  <br>

<!-- footer -->
	<div class="sispensi-footer">
      <h5 class="heading">
        SISPENSI
      </h5>
      <p>Program Studi INFORMATIKA<a href="https://uts.ac.id/">
      <br> Fakultas Teknik
      <br>
       Universitas Teknologi Sumbawa</a> 
       <br>2019
       <br>&copy; Allright Reserved
      	
      </p>
    </div>
<!-- End Footer -->

	  <script type="text/javascript" src="<?php echo base_url() ?>assets/css/js/jquery-3.4.1.min.js"></script>
	  <script>
	  	$(document).ready(function(){
	  		$('loginsispensi').on('click', function(event){
	  			if (this.hash !== "") {
			      event.preventDefault();
			      var hash = this.hash;
	  		$('html, body').animate({
		        scrollTop: $(hash).offset().top
		      }, 800, function(){
		   
		        // Add hash (#) to URL when done scrolling (default click behavior)
		        window.location.hash = hash;
		      });
		    } // End if
		  });
		});
	  </script>
	  <script type="text/javascript" src="<?php echo base_url() ?>assets/css/js/bootstrap.min.js"></script>
	  <script defer src="<?php echo base_url() ?>assets/fontawesome5/svg-with-js/js/fontawesome-all.min.js"></script>
	 <!--  <script>
	  $('.loginsispensi').click(function(){
		$("html, body").animate({
			scrollBot: $(document).height() }, 1000);
		return false;
	  });
	  </script> -->

  </body>
</html>