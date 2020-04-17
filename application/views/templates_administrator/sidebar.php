<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
        <i class="fas fa-university"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sistem Informasi Akademik</div>
      </a>

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('administrator/dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-university"></i>
          <span>Akademi</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub-Menu Akademi :</h6>
            <a class="collapse-item" href="<?php echo base_url('administrator/jurusan') ?>">Jurusan</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/prodi') ?>">Program Studi</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/matakuliah') ?>">Mata Kuliah</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/mahasiswa') ?>">Mahasiswa</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/tahun_akademi') ?>">Tahun Akademi</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/krs') ?>">KRS</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/dosen') ?>">Dosen</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Info Kampus</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub-Menu Kampus :</h6>
            <a class="collapse-item" href="<?php echo base_url ('administrator/identitas') ?>">Identitas</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/informasi') ?>">Informasi Kampus</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/tentang_kampus') ?>">Tentang Kampus</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('administrator/auth/logout') ?>">
        <i class="fas fa-sign-out-alt"></i>
          <span>Log-Out</span></a>
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          


        </nav>