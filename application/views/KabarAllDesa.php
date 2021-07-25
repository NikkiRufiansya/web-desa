
<header id="header" class="fixed-top">
	<div class="container d-flex">

		<div class="logo mr-auto">
			<h1 class="text-light"><a href="<?php echo base_url('/')?>">Web Desa</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!--			 <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
		</div>

		<nav class="nav-menu d-none d-lg-block">
			<ul>

				<li  class=""><a href="<?php echo base_url('tentang_desa')?>">Tentang Desa</a></li>

				<li  class="active"><a href="">Kabar Desa</a></li>
				<li><a href="<?php echo base_url('/home_penduduk')?>">Penduduk</a></li>
				<li><a href="<?php echo base_url('/galeri')?>">Galeri</a></li>
				<li class="get-started"><a href="<?php echo base_url('/auth')?>">login</a></li>
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
	<section id="blog" class="blog">
		<div class="container">

			<div class="row">
				<?php foreach ($informasi as $key):?>
					<div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
						<article class="entry">

							<div class="entry-img">
								<img src="<?php echo base_url()?>/assets/foto/kabar_desa/<?= $key->foto ?>" alt="" class="img-fluid">
							</div>

							<h2 class="entry-title">
								<a href="blog-single.html"><?= $key->judul?></a>
							</h2>

							<div class="entry-content">
								<p>
									<?= $key->deskripsi_singkat?>
								</p>
								<div class="read-more">
									<form action="<?php echo base_url('baca_informasi')?>" method="post">
										<input type="hidden" name="id" value="<?= $key->id?>">
										<input type="submit" value="Baca Lebih Lanjut" class="btn btn-link">
									</form>

								</div>
							</div>

						</article><!-- End blog entry -->
					</div>
				<?php endforeach;?>
			</div>

			<div class="blog-pagination" data-aos="fade-up">
				<center>
					<h5><a href="kabar_desa_all">lihat lainnya</a></h5>
				</center>

			</div>

		</div>
	</section><!-- End Blog Section -->


