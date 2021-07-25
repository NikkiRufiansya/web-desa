<header id="header" class="fixed-top">
	<div class="container d-flex">

		<div class="logo mr-auto">
			<h1 class="text-light"><a href="<?php echo base_url('/') ?>">Web Desa</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!--			 <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
		</div>

		<nav class="nav-menu d-none d-lg-block">
			<ul>

				<li class=""><a href="<?php echo base_url('tentang_desa') ?>">Tentang Desa</a></li>

				<li class="active"><a href="">Kabar Desa</a></li>
				<li><a href="<?php echo base_url('/home_penduduk') ?>">Penduduk</a></li>
				<li><a href="<?php echo base_url('/galeri') ?>">Galeri</a></li>
				<li class="get-started"><a href="<?php echo base_url('/auth') ?>">login</a></li>
			</ul>
		</nav><!-- .nav-menu -->

	</div>
</header><!-- End Header -->

<main id="main">

	<!-- ======= Breadcrumbs ======= -->
	<section id="breadcrumbs" class="breadcrumbs">
		<div class="breadcrumb-hero">
			<div class="container">
				<div class="breadcrumb-hero">
					<h2>Kabar Desa</h2>
					<p>Kabar Terbaru Desa</p>
				</div>
			</div>
		</div>

	</section><!-- End Breadcrumbs -->
	<br>
	<!-- ======= Blog Section ======= -->
	<section id="blog" class="blog" style="align-content: center">
		<div class="container">
			<?php foreach ($informasi as $key): ?>
				<img src="<?php echo base_url() ?>/assets/foto/kabar_desa/<?= $key['foto'] ?>" alt=""
					 class="img-fluid"><br>
				<h5><b><?= $key['judul'] ?></b></h5>
				<p><?= $key['isi']?></p>
			<?php endforeach; ?>


		</div>
	</section><!-- End Blog Section -->


