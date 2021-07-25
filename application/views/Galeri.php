<style>
	body {
		font-family: "Asap", sans-serif;
		color:#989898;
		font-size:16px;
	}

	#demo {
		height:100%;
		position:relative;
		overflow:hidden;
	}


	.green{
		background-color:#6fb936;
	}
	.thumb{
		margin-bottom: 30px;
	}

	.page-top{
		margin-top:85px;
	}


	img.zoom {
		width: 100%;
		height: 200px;
		border-radius:5px;
		object-fit:cover;
		-webkit-transition: all .3s ease-in-out;
		-moz-transition: all .3s ease-in-out;
		-o-transition: all .3s ease-in-out;
		-ms-transition: all .3s ease-in-out;
	}


	.transition {
		-webkit-transform: scale(1.2);
		-moz-transform: scale(1.2);
		-o-transform: scale(1.2);
		transform: scale(1.2);
	}
	.modal-header {

		border-bottom: none;
	}
	.modal-title {
		color:#000;
	}
	.modal-footer{
		display:none;
	}

</style>
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
				<h3>Dokumentasi Kegiatan Desa</h3>
			</div>

		</div>
	</section><!-- End Cta Section -->

	<!-- ======= Services Section ======= -->
	<section id="services" class="services  section-bg ">
		<div class="container">
			<br>
			<div class="row">
			<?php foreach ($galeri as $key):?>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb">
					<a href="<?php echo base_url() ?>/assets/foto/galeri/<?= $key->foto ?>" class="fancybox" rel="ligthbox">
						<img  src="<?php echo base_url() ?>/assets/foto/galeri/<?= $key->foto ?>" class="zoom img-fluid "  alt="">
					</a>
					<label for=""><?= $key->judul?></label>
				</div>
			<?php endforeach;?>
			</div
		</div>
	</section><!-- End Services Section -->

