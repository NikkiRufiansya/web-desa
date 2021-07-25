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
						<h6 class="m-0 font-weight-bold text-primary">Dokumentasi Kegiatan Desa</h6>
					</div>
					<div class="card-body">
						<a href="<?php echo base_url('/tambah_galeri') ?>" class="btn btn-primary"
						   style="margin-bottom: 10px;">Tambah Dokumentasi</a>
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
								<tr>
									<th>Judul</th>
									<th>Gambar</th>
									<th>Aksi</th>
								</tr>
								</thead>
								<tfoot>
								<tr>
									<th>Judul</th>
									<th>Foto</th>
									<th>Aksi</th>
								</tr>
								</tfoot>
								<tbody>
								<?php foreach ($galeri as $key): ?>
									<tr>
										<td><?= $key->judul ?></td>
										<td><img src="<?php echo base_url() ?>/assets/foto/galeri/<?= $key->foto ?>"
												 style="max-height: 100px; max-width: 100px"
												 class="d-block w-100" alt="..."></td>
										<td>
											<a href="<?php echo base_url()?>ubah_galeri/<?= $key->id?>"
											   class="fas fa-edit"></a>
											|
											<a href="<?php echo base_url() ?>hapus_galeri/<?= $key->id ?>"
											   class="fas fa-trash"></a>
										</td>
									</tr>
								<?php endforeach; ?>
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




