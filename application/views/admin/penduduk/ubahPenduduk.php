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
			<div class="container" style="margin-top: 20px;">
				<div class="card shadow">
					<div class="card-header">
						<h6 class="m-0 font-weight-bold text-primary">Masukan Data Penduduk</h6>
					</div>
					<div class="card-body">
						<?php foreach ($penduduk as $key):?>
						<form action="<?php echo base_url('proses_ubah_penduduk')?>" method="post">
							<div class="form-group">
								<label><b>NIK</b></label>
								<input type="hidden" name="id"  id="" value="<?= $key['id'] ?>">
								<input type="text" name="nik" class="form-control" id="" value="<?= $key['nik']?>" placeholder="Masukan NIK">
							</div>
							<div class="form-group">
								<label><b>Nama</b></label>
								<input type="text" name="nama" class="form-control" id="" value="<?= $key['nama']?>" placeholder="Masukan Nama">
							</div>
							<div class="form-group">
								<label><b>Jenis Kelamin</b></label>
								<select class="form-control" name="gender" aria-label="Default select example">
									<option selected><?= $key['gender']?></option>
									<option value="Pria">Pria</option>
									<option value="Wanita">Wanita</option>
								</select>
							</div>
							<div class="form-group">
								<label><b>Usia</b></label>
								<input type="number" name="usia" class="form-control" id="" value="<?= $key['usia']?>" placeholder="Masukan Usia">
							</div>
							<div class="form-group">
								<label><b>Pendidikan</b></label>
								<select class="form-control" name="pendidikan" aria-label="Default select example">
									<option selected><?= $key['pendidikan']?></option>
									<option value="Belum Sekolah">Belum Sekolah</option>
									<option value="Tidak Tamat SD">Tidak Tamat SD</option>
									<option value="SD">SD</option>
									<option value="SMP">SMP</option>
									<option value="SMA">SMA</option>
									<option value="S1">S1</option>
									<option value="S2">S2</option>
									<option value="S3">S3</option>
								</select>
							</div>
							<div class="form-group">
								<label><b>Pekerjaan</b></label>
								<input type="text" name="pekerjaan" class="form-control" id="" value="<?= $key['pekerjaan']?>" placeholder="Masukan Pekerjaan">
							</div>
							<div class="form-group">
								<input type="submit" value="Submit" class="btn btn-primary">
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




