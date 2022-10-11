<!doctype html>
<html lang="en">

<head>
	<title>Pat Project
		<?php if ($title) {
			echo ' - ' . $title;
		} ?>
	</title>
	<link rel="icon" href="<?= base_url(); ?>/library/img/favicon.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="msapplication-TileColor" content="#212121">
	<meta name="theme-color" content="#212121">
	<meta name="author" content="Lucas Cezar Trentin" />

	<!-- bootstrap -->
	<link href="<?= base_url(); ?>/library/bootstrap4.1.1/css/bootstrap.min.css" rel="stylesheet" />

	<!-- bootstrap icons -->
	<link rel="stylesheet" href="<?= base_url(); ?>/library/icons-1.5.0/font/bootstrap-icons.css" />

	<!-- Jquery -->
	<script type="text/javascript" src="<?= base_url(); ?>/library/js/jquery-3.6.0.min.js"></script>

	<!-- General JavasScript -->
	<script type="text/javascript" src="<?= base_url(); ?>/library/js/scripts.js"></script>

	<!-- General CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>/library/css/style.css" />

	<?php if ($general == 'home') { ?>

		<!-- home atributes -->
		<script type="text/javascript" src="<?= base_url(); ?>/library/js/home.js"></script>
		<link rel="stylesheet" href="<?= base_url(); ?>/library/css/home.css" />

	<?php } else if ($general == 'about') { ?>

		<!-- about atributes -->
		<script type="text/javascript" src="<?= base_url(); ?>/library/js/about.js"></script>
		<link rel="stylesheet" href="<?= base_url(); ?>/library/css/about.css" />

	<?php } else if ($general == 'contact') { ?>

		<!-- contact atributes -->
		<script type="text/javascript" src="<?= base_url(); ?>/library/js/contact.js"></script>
		<link rel="stylesheet" href="<?= base_url(); ?>/library/css/contact.css" />

	<?php }  ?>

</head>

<body id="body" itemscope itemtype="https://schema.org/WebPage">

	<div id="container">
		<header id="header" class="header header-maior w-100" role="banner" itemscope itemtype="https://schema.org/WPHeader">
			<input type="hidden" name="baseURL" id="baseURL" value="<?= base_url() ?>">
			<div id="inner-header" class="container d-flex justify-content-xl-between justify-content-center align-items-center">
				<img id="open-menu" class="d-flex d-xl-none burguer" src="<?= base_url(); ?>/library/img/burguer.svg" alt="open-menu">
				<img id="close-menu" class="d-none close_it" src="<?= base_url(); ?>/library/img/close.svg" alt="close-menu">

				<p id="logo" class="h1" itemscope itemtype="https://schema.org/Organization">
					<a href="<?= base_url(); ?>" rel="nofollow">
						<img src="<?= base_url(); ?>/library/img/logo_header.svg" height="150" width="150" alt="logo">
					</a>
				</p>

				<nav role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
					<ul class="d-lg-flex d-none justify-content-xl-between justify-content-center  align-items-center m-0">
						<li class="mr-5 d-none d-xl-block">
							<a id="home-btn-dsk" class="mb-0" href="<?= base_url(); ?>">Home</a>
						</li>
						<li class="mr-5 d-none d-xl-block">
							<a id="cat-btn-dsk" class="mb-0" href="<?= base_url() ?>about">Sobre</a>
						</li>
						<li class="mr-5 d-none d-xl-block">
							<a id="cat-btn-dsk" class="mb-0" href="#contato">Contato</a>
						</li>
						<li class="mr-5 d-none d-xl-block">
							<a class="mb-0" href="https://github.com/czarist/pat" target="_blank">
								<img src=" <?= base_url();  ?>/library/img/github.svg" alt="github">
							</a>
						</li>
					</ul>
				</nav>

			</div>

			<nav id='menu-mobile' class="d-none" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
				<ul class="mobile-list">
					<li class="mb-3 d-flex">
						<a id="home-btn-mob" class="mb-0" href="<?= base_url(); ?>">Home</a>
					</li>
					<li class="mb-3 d-flex">
						<a id="cat-btn-mob" class="text-left" href="<?= base_url() ?>about">Sobre</a>
					</li>
					<li class="mb-3 d-flex">
						<a id="cat-btn-mob" class="text-left" href="#contato">Contato</a>
					</li>
					<li class="mb-3 d-flex">
						<a class="mb-0" href="https://github.com/czarist/pat" target="_blank">
							<img src="<?= base_url();  ?>/library/img/github.svg" alt="github">
						</a>
					</li>
				</ul>
			</nav>
		</header>
		<?php if ($general == 'home') { ?>
			<section id="search-zone" class=" d-flex justify-content-center align-items-center">
				<div class="container">
					<div class="row justify-content-start align-items-center">
						<div class="col-12 col-xl-6">
							<select id="location-select" name="regioes" id="regioes">
								<option selected disabled>Selecionar por Região</option>
								<option value="norte">NORTE</option>
								<option value="nordeste">NORDESTE</option>
								<option value="centro-oeste">CENTRO-OESTE</option>
								<option value="sudeste">SUDESTE</option>
								<option value="sul">SUL</option>
							</select>
						</div>
					</div>
				</div>
			</section>
		<?php } ?>
