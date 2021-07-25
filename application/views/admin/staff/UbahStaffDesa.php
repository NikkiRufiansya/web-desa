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
						<?php foreach ($staff as $key):?>
						<form action="<?php echo base_url('proses_ubah_staff')?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="">Nama</label>
								<input type="hidden" name="id" value="<?= $key['id']?>">
								<input type="text" name="nama" value="<?= $key['nama']?>" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
								<label for="">Jabatan</label>
								<input type="text" name="jabatan" value="<?= $key['jabatan']?>" class="form-control" placeholder="Jabatan">
							</div>
							<div class="form">
								<label for="">Foto</label>
								<input type="hidden" name="foto_old" value="<?= $key['foto']?>">
								<input type="file" name="foto_new" class="form-control">
							</div>
							<br>
							<div class="form-group">
								<input type="submit" value="Simpan" class="btn btn-success">
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




