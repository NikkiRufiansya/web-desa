
<header id="header" class="fixed-top">
	<div class="container d-flex">

		<div class="logo mr-auto">
			<h1 class="text-light"><a href="<?php echo base_url('/')?>">Web Desa</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
<!--			 <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
		</div>

		<nav class="nav-menu d-none d-lg-block">
			<ul>

				<li><a href="<?php echo base_url('/tentang_desa')?>">Tentang Desa</a></li>

				<li><a href="<?php echo base_url('/kabar_desa')?>">Kabar Desa</a></li>
				<li><a href="<?php echo base_url('/home_penduduk')?>">Penduduk</a></li>
				<li><a href="<?php echo base_url('/galeri')?>">Galeri</a></li>
				<li class="get-started"><a href="<?php echo base_url('/auth')?>">login</a></li>
			</ul>
		</nav><!-- .nav-menu -->

	</div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
	<div class="hero-container" data-aos="fade-up">
		<h1>Selamat Datang di Web Desa</h1>
		<h2>Seluruh informasi mengenai desa berada disini</h2>

	</div>
</section><!-- End Hero -->

<main id="main">

	<!-- ======= About Section ======= -->
	<section id="about" class="about">
		<div class="container" data-aos="fade-up">

			<div class="row justify-content-end">
				<div class="col-lg-11">
					<div class="row justify-content-end">

						<div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
							<div class="count-box py-5">
								<i class="icofont-baby"></i>
								<?php foreach ($totalBalita as $key):?>
								<span data-toggle="counter-up"><?php echo $key->totalBalita?></span>
								<?php endforeach;?>
								<p>Total Balita</p>
							</div>
						</div>

						<div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
							<div class="count-box py-5">
								<i class="icofont-simple-smile"></i>
								<?php foreach ($totalDewasa as $key):?>
								<span data-toggle="counter-up"><?php echo $key->totalDewasa?></span>
								<?php endforeach;?>
								<p>Total Dewasa</p>
							</div>
						</div>

						<div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
							<div class="count-box pb-5 pt-0 pt-lg-5">
								<i class="icofont-nerd-smile"></i>
								<?php foreach ($totalLansia as $key):?>
								<span data-toggle="counter-up"><?= $key->totalLansia?></span>
								<?php endforeach;?>
								<p>Total Lansia</p>
							</div>
						</div>

						<div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
							<div class="count-box pb-5 pt-0 pt-lg-5">
								<i class="icofont-people"></i>
								<?php foreach ($totalPenduduk as $key):?>
								<span data-toggle="counter-up"><?= $key->jumlahPenduduk?></span>
								<?php endforeach;?>
								<p>Total Penduduk</p>
							</div>
						</div>

					</div>
				</div>
			</div>


		</div>
	</section><!-- End About Section -->

	<!-- ======= Cta Section ======= -->
	<section id="cta" class="cta">
		<div class="container" data-aos="fade-in">

			<div class="text-center">
				<h3>Staff Desa</h3>
			</div>

		</div>
	</section><!-- End Cta Section -->

	<!-- ======= Services Section ======= -->
	<section id="services" class="services  section-bg ">
		<div class="container">
			<br>
			<!-- ======= Team Section ======= -->
			<section id="team" class="team">
				<div class="container">

					<div class="row">
						<?php foreach ($staff as $key):?>
						<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
							<div class="member" data-aos="fade-up">
								<div class="member-img">
									<img src="<?php echo base_url()?>/assets/foto/staff/<?= $key->foto ?>" class="img-fluid" alt="">
								</div>
								<div class="member-info">
									<h4><?= $key->nama?></h4>
									<span><?= $key->jabatan?></span>
								</div>
							</div>
						</div>

					<?php endforeach;?>

					</div>

				</div>
			</section><!-- End Team Section -->
		</div>
	</section><!-- End Services Section -->
