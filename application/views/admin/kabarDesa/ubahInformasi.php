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
						<h6 class="m-0 font-weight-bold text-primary">Tambah Informasi Kabar Desa</h6>
					</div>
					<div class="card-body">
						<?php foreach ($informasi as $key):?>
						<form action="<?php echo base_url('proses_ubah_informasi')?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label><b>Judul</b></label>
								<input type="hidden" name="id" value="<?php echo $key['id']?>">
								<input type="text" value="<?php echo $key['judul']?>" name="judul" class="form-control" id="" placeholder="Masukan Judul">
							</div>
							<div class="form-group">
								<label><b>Deskripsi Singkat</b></label>
								<input type="text" value="<?php echo $key['deskripsi_singkat']?>" name="deskripsi" class="form-control" id="" placeholder="Masukan Deskripsi Singkat">
							</div>

							<div class="form-group">
								<label><b>Isi</b></label>
								<div id="toolbar-container"></div>
								<textarea id="editor" name="isi"><?php echo $key['isi']?></textarea>
							</div>
							<div class="form-group">
								<label><b>Upload Gambar</b></label>
								<input type="hidden" name="foto_old" id="" value="<?php echo $key['foto']?>">
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




