<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
	<div class="container d-flex">

		<div class="logo mr-auto">
			<h1 class="text-light"><a href="<?php echo base_url('/')?>">Web Desa</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!--			 <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
		</div>

		<nav class="nav-menu d-none d-lg-block">
			<ul>

				<li class="active"><a href="<?php echo base_url('/tentang_desa')?>">Tentang Desa</a></li>

				<li><a href="<?php echo base_url('/kabar_desa')?>">Kabar Desa</a></li>
				<li><a href="<?php echo base_url('/home_penduduk')?>">Penduduk</a></li>
				<li><a href="<?php echo base_url('/galeri')?>">Galeri</a></li>
				<li class="get-started"><a href="<?php echo base_url('/auth')?>">login</a></li>
			</ul>
		</nav><!-- .nav-menu -->

	</div>
</header><!-- End Header -->


<main id="main">



	<!-- ======= Cta Section ======= -->
	<section id="cta" class="cta">
		<div class="container" data-aos="fade-in">

			<div class="text-center">
				<h3>Tentang Desa</h3>
			</div>

		</div>
	</section><!-- End Cta Section -->

	<!-- ======= Services Section ======= -->
	<section id="services" class="services  section-bg ">
		<div class="container">
			<br>
			<?php foreach ($tentang_desa as $key):?>
				<p><?= $key['isi']?></p>
			<?php endforeach;?>
		</div>
	</section><!-- End Services Section -->
