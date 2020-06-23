

<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
	<header class="page-header row justify-center">
		<div class="col-md-6 col-lg-8" >
		</div>
		<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img src="<?php echo base_url('assets/uploads/').$mahasiswa['photo']; ?>"  class="circle float-left profile-photo" width="100" height="auto">
				<div class="username mt-1">
					<h4 class="mb-1"><?php echo $mahasiswa['nama_lengkap']; ?></h4>
					<h6 class="text-muted"><?php echo $mahasiswa['nim']; ?></h6>
				</div>
			</a>
			<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="<?php echo base_url('mahasiswa/dasbor/profil_mahasiswa')?>"><em class="fa fa-user-circle mr-1"></em> Lihat Profil</a>
			     <a class="dropdown-item" href="<?php echo base_url('keluar')?>"><em class="fa fa-power-off mr-1"></em> Logout</a></div>
		</div>
		<div class="clear"></div>
	</header>