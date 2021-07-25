<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
	<!-- Sidebar -->
	<?php require 'Sidebar.php'?>
	<!-- End of Sidebar -->

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">
			<!-- Begin Page Content -->
			<div class="container">
				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Data Staff Desa</h6>
					</div>
					<div class="card-body">
						<a href="<?php echo base_url('/tambah_staff') ?>" class="btn btn-primary"
						   style="margin-bottom: 10px;">Tambah Staff</a>
						<a href="<?php echo base_url('/lihat_admin') ?>" class="btn btn-warning"
						   style="margin-bottom: 10px;">Lihat Admin</a>
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
								<tr>
									<th>Nama</th>
									<th>Jabatan</th>
									<th>Foto</th>
									<th>Action</th>
								</tr>
								</thead>

								<tbody>
								<?php foreach ($staff as $key): ?>
									<tr>
										<td><?php echo $key->nama ?></td>
										<td><?php echo $key->jabatan ?></td>
										<td><img src="<?php echo base_url() ?>/assets/foto/staff/<?= $key->foto ?>"
												 style="max-height: 100px; max-width: 100px"
												 class="d-block w-100" alt="..."></td>
										<td>
											<a href="<?php echo base_url(); ?>ubah_staff/<?= $key->id ?>"
											   class="fas fa-edit"></a>
											|
											<a href="<?php echo base_url(); ?>hapus_staff/<?= $key->id ?>"
											   class="fas fa-trash"></a>
										</td>
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




