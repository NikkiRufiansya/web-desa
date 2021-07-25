<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
	<!-- Sidebar -->
	<?= require 'Sidebar.php'?>
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
						<h6 class="m-0 font-weight-bold text-primary">Tentang Desa</h6>
					</div>
					<div class="card-body">
						<?php foreach ($tentang_desa as $key):?>
						<form action="<?php echo base_url('proses_ubah_tentang_desa')?>" method="post">
							<input type="hidden" name="id" value="<?= $key['id']?>">
							<div class="form-group">
								<label><b>Isi</b></label>
								<div id="toolbar-container"></div>
								<textarea id="editor" name="isi"><?php echo $key['isi']?></textarea>
							</div>
							<div class="form-group">
								<input type="submit" name="submit" value="Ubah Data" class="btn btn-success">
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




