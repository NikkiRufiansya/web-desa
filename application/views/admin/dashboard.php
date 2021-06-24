<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

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
		<li class="nav-item active">
			<a class="nav-link" href="index.html">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Dashboard</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">


		<!-- Nav Item - Charts -->
		<li class="nav-item">
			<a class="nav-link" href="charts.html">
				<i class="fa fa-user"></i>
				<span>Staff</span></a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="charts.html">
				<i class="fa fa-users"></i>
				<span>Data Penduduk</span></a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="charts.html">
				<i class="fas fa-user-friends"></i>
				<span>Staff Desa</span></a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="charts.html">
				<i class="fas fa-fw fa-chart-area"></i>
				<span>Kabar Desa</span></a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="charts.html">
				<i class="fa fa-camera-retro"></i>
				<span>Galeri</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('/logout')?>">
				<i class="fas fa-sign-out-alt"></i>
				<span>Logout</span></a>
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


			<!-- Begin Page Content -->
			<div class="container-fluid">

				<!-- Content Row -->
				<div class="row" style="padding-top: 20px;">

					<!-- Earnings (Monthly) Card Example -->
					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
											Total Balita
										</div>
										<?php foreach ($totalBalita as $total): ?>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total->totalBalita ?></div>
										<?php endforeach ?>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Earnings (Monthly) Card Example -->
					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-success shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
											Total Dewasa
										</div>
										<?php foreach ($totalDewasa as $total): ?>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total->totalDewasa ?></div>
										<?php endforeach ?>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Earnings (Monthly) Card Example -->
					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-info shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Lansia
										</div>
										<div class="row no-gutters align-items-center">
											<div class="col-auto">
												<?php foreach ($totalLansia as $total): ?>
													<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $total->totalLansia ?></div>
												<?php endforeach; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Pending Requests Card Example -->
					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-warning shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
											Total Penduduk
										</div>
										<?php foreach ($totalPenduduk as $total): ?>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total->jumlahPenduduk ?></div>
										<?php endforeach; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-8">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">Pendidikan</h6>
							</div>
							<div class="card-body">
								<div class="chart-bar">
									<canvas id="myBarChart"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card shadow mb-4">
							<!-- Card Header - Dropdown -->
							<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
								<h6 class="m-0 font-weight-bold text-primary">Jenis Kelamin</h6>
							</div>
							<!-- Card Body -->
							<div class="card-body">
								<div class="chart-pie pt-4 pb-2">
									<canvas id="myPieChart"></canvas>
								</div>
								<div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Pria
                                        </span>
									<span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Wanita
                                        </span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="container">
				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Data Penduduk</h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
								<tr>
									<th>Nama</th>
									<th>Usia</th>
									<th>Jenis Kelamin</th>
									<th>Pendidikan</th>
									<th>Pekerjaan</th>
								</tr>
								</thead>
								<tfoot>
								<tr>
									<th>Nama</th>
									<th>Usia</th>
									<th>Jenis Kelamin</th>
									<th>Pendidikan</th>
									<th>Pekerjaan</th>
								</tr>
								</tfoot>
								<tbody>
								<?php foreach ($penduduk as $key): ?>
									<tr>
										<td><?php echo $key->nama ?></td>
										<td><?php echo $key->usia ?></td>
										<td><?php echo $key->gender ?></td>
										<td><?php echo $key->pendidikan ?></td>
										<td><?php echo $key->pekerjaan ?></td>
									</tr>
								<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>
</div>




