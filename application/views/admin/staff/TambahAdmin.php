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
						<h6 class="m-0 font-weight-bold text-primary">Data Admin Desa</h6>
					</div>
					<div class="card-body">
						<form action="<?php echo base_url('proses_tambah_admin')?>" method="post">
							<div class="form-group">
								<label for="">Nama</label>
								<input type="text" name="nama" class="form-control" placeholder="Nama">
							</div>
							<div class="form-group">
								<label for="">Email</label>
								<input type="text" name="email" class="form-control" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" name="password" class="form-control">
							</div>
							<div class="form-group">
								<input type="submit" value="Simpan" class="btn btn-success">
							</div>
						</form>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>
</div>




