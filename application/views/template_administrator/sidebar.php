
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('administrator/dasbor')?>">
        <div class="sidebar-brand-icon">
          <i class="fas fa-university"></i>
        </div>
        <div class="sidebar-brand-text mx-1">SISPENSI-UTS</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('administrator/dasbor') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Beranda Administrator
      </div>

      <!-- Menu Mahasiswa-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-users"></i>
          <span>Mahasiswa</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub-menu Mahasiswa:</h6>
            <a class="collapse-item" href="<?php echo base_url('administrator/mahasiswa') ?>">Data Mahasiswa</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/mahasiswa/tambah_mahasiswa') ?>">Tambah Mahasiswa</a>
          </div>
        </div>
      </li>

      <!-- Menu Dosen -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-user"></i>
          <span>Dosen</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub-menu Dosen:</h6>
            <a class="collapse-item" href="<?php echo base_url('administrator/dosen') ?>">Data Dosen</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/dosen/tambah_dosen') ?>">Tambah Dosen</a>
          </div>
        </div>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Skripsi
      </div>

      <!-- Menu Dosen -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Konfigurasi</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub-menu Konfigurasi:</h6>
            <a class="collapse-item" href="<?php echo base_url('administrator/topik_skripsi') ?>">Topik Skripsi</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/daftar_ruangan') ?>">Daftar Ruangan</a>
          </div>
        </div>
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-calendar-alt"></i>
          <span>Pengajuan Skripsi</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub-menu Pendaftaran:</h6>
            <?php
              $cekjudul=$this->db->where('status',0)->get('proposal')->result();
            ?>
            <a class="collapse-item" href="<?php echo base_url('administrator/pengajuan_judul')?>">Judul <span class="badge badge-danger"><?= count($cekjudul) ?></span></a>
            <?php
              $ceksempro=$this->db->where('status',0)->get('sempro')->result();
            ?>
            <a class="collapse-item" href="<?php echo base_url('administrator/pendaftaran_sempro')?>">Pendaftaran Sempro <span class="badge badge-danger"><?= count($ceksempro)?></span></a>
            <?php
              $ceksidang=$this->db->where('status',0)->get('sidang')->result();
            ?>
            <a class="collapse-item" href="<?php echo base_url('administrator/pendaftaran_sidangskripsi')?>">Pendaftaran Sidang <span class="badge badge-danger"><?= count($ceksidang) ?></span></a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Sub-menu Jadwal:</h6>
            <a class="collapse-item" href="<?php echo base_url('administrator/penjadwalan')?>">Jadwal Sempro</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/penjadwalan/sidang')?>">Jadwal Sidang Skripsi</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('administrator/auth/logout') ?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

  
        