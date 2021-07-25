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
						<?php foreach ($galeri as $key):?>
						<form action="<?php echo base_url('proses_ubah_galeri')?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="">Judul</label>
								<input type="hidden" name="id" value="<?= $key['id']?>">
								<input type="text" name="judul" value="<?= $key['judul']?>" class="form-control" placeholder="Judul Dokumentasi">
							</div>
							<div class="form-group">
								<label><b>Upload foto</b></label>
								<input type="hidden" name="foto_old" value="<?= $key['foto']?>">
								<input type="file" name="foto_new" class="form-control" id="">
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-success">
							</div>
						</form>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>




