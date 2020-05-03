<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url('assets/user_template/css/bootstrap.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url('assets/user_template/style.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url('assets/user_template/css/swiper.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url('assets/user_template/css/dark.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url('assets/user_template/css/font-icons.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url('assets/user_template/css/animate.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url('assets/user_template/css/magnific-popup.css'); ?>" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url('assets/user_template/css/responsive.css'); ?>" type="text/css" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<link rel="stylesheet" href="<?php echo base_url('assets/admin_template/bower_components/bootstrap-daterangepicker/daterangepicker.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/user_template/js/swal/swal.min.css'); ?>">
	<link rel="icon" type="image/png" href="images/logo.png" sizes="32x32" />

	<!-- Document Title
	============================================= -->
	<title>Brainbox Equipment</title>

</head>

<body class="" style="background-image: url('images/pattern3.png'); background-attachment: fixed;">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<h3 style="font-family: 'Fugaz One',sans-serif; margin-top: 10px;">Brainbox Equipment</h3>
						<!-- <a href="<?php echo base_url('/');?>" class="standard-logo" data-dark-logo="<?php echo base_url('assets/user_template/images/brainbox.png')?>"><img src="<?php echo base_url('assets/user_template/images/brainbox.png'); ?>" alt="Canvas Logo"></a>
						<a href="<?php echo base_url('/');?>" class="retina-logo" data-dark-logo="<?php echo base_url('assets/user_template/images/brainbox.png')?>"><img src="<?php echo base_url('assets/user_template/images/brainbox.png'); ?>" alt="Canvas Logo"></a> -->
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="dark">

						<ul>
							<li class="current"><a href="<?php echo base_url(); ?>"><div>Home</div></a></li>
							<!-- <li class="current"><a href="<?php echo base_url(); ?>"><div>Profile</div></a></li> -->
							<li class="current"><a href="#"><div>Products <i class="icon-angle-down"></i></div></a>
								<ul>
									<li><a href="<?php echo base_url('index/product');?>"><div>Show All Product</div></a></li>
									<?php foreach ($kategoris as $kategori) : ?>
										<li><a href="<?php echo base_url('index/product/'. $kategori->id_kategori);?>"><div><?=$kategori->nama_kategori?></div></a></li>
									<?php endforeach; ?>
								</ul>
							</li>
							<!-- <li class="current"><a href="<?php echo base_url('artikel');?>"><div>Article</div></a></li> -->
							<!-- <li class="current"><a href="<?php echo base_url('peraturan-desa');?>"><div>Term and Condition</div></a></li> -->
							<?php 
							// print_r($this->session->userdata("admin")); 
							if(!$this->session->userdata("status")) : 
							?>
							<li class="current"><a href="<?php echo base_url('index/sign');?>"><div>Register/Login</div></a></li>
							<?php else : ?>
							<li class="current"><a href="#"><div><i class="icon-user"></i><?=substr($this->session->userdata('name'), 0, 7)?><i class="icon-angle-down"></i></div></a>
								<ul>
									<li><a href="<?php echo base_url('index/cart');?>"><div><i class="icon-shopping-cart"></i>Cart</div></a></li>
									<li><a href="<?php echo base_url('index/order');?>"><div><i class="icon-clipboard"></i>Order</div></a></li>
									<li><a href="<?php echo base_url('index/signOut');?>"><div><i class="icon-signout"></i>Logout</div></a></li>
									<!-- <li><a href="<?php echo base_url('galeri-desa');?>"><div>Galeri Desa</div></a></li>
									<li><a href="<?php echo base_url('peraturan-desa');?>"><div>Peraturan Desa</div></a></li>
									<li><a href="<?php echo base_url('anggaran-desa');?>"><div>Anggaran Desa</div></a></li>
									<li><a href="<?php echo base_url('berita');?>"><div>Berita Desa</div></a></li>
									<li><a href="<?php echo base_url('kegiatan');?>"><div>Kegiatan Desa</div></a></li>
									<li><a href="<?php echo base_url('buruh-migran');?>"><div>Buruh Migran</div></a></li> -->
								</ul>
							</li>
							<?php endif; ?>
						</ul>

						<!-- Top Search
						============================================= -->
						<!-- <div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="<?php echo base_url('berita/');?>" method="get">
								<input type="text" name="search" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div> -->
						<!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->