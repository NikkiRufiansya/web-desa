<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">SB Admin Desa</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('/admin')?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('admin_tentang_desa')?>">
			<i class="fa fa-info-circle"></i>
			<span>Tentang Desa</span></a>
	</li>


	<!-- Nav Item - Charts -->

	<li class="nav-item active">
		<a class="nav-link" href="<?php echo base_url('penduduk')?>">
			<i class="fa fa-users"></i>
			<span>Data Penduduk</span></a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('admin_staf_desa')?>">
			<i class="fas fa-user-friends"></i>
			<span>Staff Desa</span></a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('admin_kabar_desa')?>">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Kabar Desa</span></a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('admin_galeri')?>">
			<i class="fa fa-camera-retro"></i>
			<span>Galeri</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('logout')?>">
			<i class="fas fa-sign-out-alt"></i>
			<span>Logout</span></a>
	</li>
	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>


</ul>
<!-- End of Sidebar -->
