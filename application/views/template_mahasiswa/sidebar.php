<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
				<h1 class="site-title"><a href="<?php echo base_url('mahasiswa/dasbor/home')?>"><em class="fa fa-university"></em> SISPENSI-UTS</a></h1>
													
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link active" href="<?php echo base_url('mahasiswa/dasbor/home') ?>"><em class="fa fa-dashboard"></em> Dashboard <span class="sr-only">(current)</span></a></li>
					<li class="parent nav-item"><a class="nav-link" data-toggle="collapse" href="#sub-item-3">
						<em class="fa fa-file-text-o">&nbsp;</em> Pendaftaran <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><i class="fa fa-plus"></i></span>
					</a>
						<ul class="children collapse" id="sub-item-3">
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url('mahasiswa/pengajuan/judul')?>">
								Pengajuan Judul
							</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url('mahasiswa/pengajuan/sempro')?>">
								Pendaftaran Seminar Proposal
							</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url('mahasiswa/pengajuan/sidang_skripsi')?>">
								Pendaftaran Sidang Skripsi
							</a></li>
						</ul>
					</li>
					<?php
						// echo $mahasiswa['id'];
						$cek=$this->db->where('nim', $mahasiswa['id'])->where('status',1)->get('proposal')->result();
					?>
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url('mahasiswa/lists') ?>"><em class="fa fa-info"></i></em> Info Pengajuan <span class="badge badge-secondary"><?php echo COUNT($cek); ?></span></a> </li>
					<li class="parent nav-item"><a class="nav-link" data-toggle="collapse" href="#sub-item-2">
						<em class="fa fa-calendar-o">&nbsp;</em> Info Jadwal <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><i class="fa fa-plus"></i></span>
					</a>
						<ul class="children collapse" id="sub-item-2">
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url('mahasiswa/jadwal/sempro')?>">
								Jadwal Seminar Proposal
							</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url('mahasiswa/jadwal/sidang')?>">
								Jadwal Sidang Skripsi
							</a></li>
						</ul>
					</li>
					<li class="parent nav-item"><a class="nav-link" data-toggle="collapse" href="#sub-item-1">
						<em class="fa fa-info-circle">&nbsp;</em> Info <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><i class="fa fa-plus"></i></span>
					</a>
						<ul class="children collapse" id="sub-item-1">
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url('mahasiswa/info/persyaratan') ?>">
								Info Persyaratan
							</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url('mahasiswa/info/kategori') ?>">
								Info Kategori
							</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url('mahasiswa/info/sispensi') ?>"><em class="fa fa-info"></i></em> Info SISPENSI</a></li>
				</ul>
				<a href="<?php echo base_url('mahasiswa/dasbor/logout')?>" class="logout-button"><em class="fa fa-power-off"></em> Signout</a>
			</nav>