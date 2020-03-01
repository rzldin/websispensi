
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
        <a class="nav-link" href="<?php echo base_url('homes') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Heading -->
      <div class="sidebar-heading">
        
      </div>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Daftar Bimbingan -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-file"></i>
          <span>Pengajuan Judul Skripsi</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub-menu Konfigurasi:</h6>
            <?php
            $cek=$this->db->where('dosbing1', $dosen['nama_dosen'])->order_by('id_proposal')->get('proposal')->result();
            ?>
            <a class="collapse-item" href="<?php echo base_url('dosen/pengajuan') ?>">Pengajuan Judul <span class="badge badge-secondary"><?php echo COUNT($cek); ?></span></a>
          </div>
        </div>
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-users"></i>
          <span>Daftar Bimbingan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub-menu Bimbingan:</h6>
            <a class="collapse-item" href="<?php echo base_url('dosen/bimbingan')?>">Bimbingan Skripsi</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kelu-ar') ?>">
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

  
        