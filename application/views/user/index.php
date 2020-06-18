		<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">
			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<?php foreach ($sliders as $slide) : ?>
							<div class="swiper-slide dark" style="background-image: url('<?php echo base_url('assets/upload/'.$slide->filename); ?>');">
								<div class="container clearfix">
									<div class="slider-caption slider-caption-center">
										<h2 data-caption-animate="fadeInUp" style="-webkit-text-stroke: 1.5px black;"><?php echo $slide->judul ?></h2>
										<h3 type="button" style="margin-top: 20px; font-weight: bold;"  data-caption-animate="fadeInUp" data-caption-delay="200" disabled class="btn btn-dark "><?php echo $slide->keterangan ?></h3>
										<!-- <h3 class="d-none d-sm-block"  style="-webkit-text-stroke: 0.8px black; font-weight: bold;"><?php echo $slide->keterangan ?></h3> -->
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
				</div>

				<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

			</div>
		</section>

		<!-- Content
			============================================= -->
			<section id="content">

				<div class="content-wrap">

					<?php $this->load->view('_partials_user/_breaking_news'); ?>

					<div class="container clearfix">
						<div class="row clearfix">

							<div class="col-xl-7">
								<div class="heading-block topmargin">
									<h1><?php echo $profile->judul ?></h1>
								</div>
								<p class="lead"><?php echo $profile->konten ?></p>
							</div>

							<div class="col-xl-5">

								<div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-xl="426" data-height-lg="567" data-height-md="470" data-height-sm="287" data-height-xs="183">
									<img src="<?php echo base_url('assets/upload/'.$profile->foto); ?>" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome">
								</div>

							</div>

						</div>
					</div>

					<div class="row clearfix common-height">

						<!-- <div class="col-lg-12 col-md-12 dark center" style="background-color: #515875; padding-top: 20px; padding-bottom: 40px;"> -->
						<div class="col-lg-12 col-md-12 dark center" style="background-color: #fb8c00; padding-top: 20px; padding-bottom: 40px;">
							<div>
								<!-- <a href="<?php echo base_url('kegiatan'); ?>" style="color: white"> -->
									<h3>
										Search Our Product
									</h3>
								<div class="counter counter-lined" style="padding-right: 30%; padding-left: 30%;">
								<form method="GET" action="<?=base_url('index/product');?>">
									<input type="text" style="color: white;" class="form-control" placeholder="type enter to search" name="search" ></input>
								</form>
									<!-- <i class="i-plain i-xlarge divcenter icon-search" ></i> -->
								</div>
								<!-- </a> -->
							</div>
						</div>
<!-- 
						<div class="col-lg-3 col-md-6 dark center" style="background-color: #576F9E; padding-top: 60px; padding-bottom: 60px">
							<div>
								<a href="<?php echo base_url('galeri-desa'); ?>" style="color: white">
									<i class="i-plain i-xlarge divcenter icon-line2-layers"></i>
									<div class="counter counter-lined">GALERI <br> DESA</div>
								</a>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 dark center" style="background-color: #6697B9; padding-top: 60px; padding-bottom: 60px">
							<div>
								<a href="<?php echo base_url('buruh-migran'); ?>" style="color: white">
									<i class="i-plain i-xlarge divcenter icon-line2-graph"></i>
									<div class="counter counter-lined">BURUH MIGRAN</div>
								</a>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 bottommargin-lg dark center" style="background-color: #88C3D8; padding-top: 60px; padding-bottom: 60px">
							<div>
								<a href="<?php echo base_url('pengaduan'); ?>" style="color: white">
									<i class="i-plain i-xlarge divcenter icon-line2-clock"></i>
									<div class="counter counter-lined">PORTAL PENGADUAN</div>
								</a>
							</div>
						</div> -->

					</div>

					<div class="container clearfix" style="padding-top: 40px;">

						<div class="container nobottommargin">

							<div class="col_full clearfix">

								<div class="fancy-title title-border" align="center">
									<h3>WE OFFERED</h3>
								</div>

								<div id="posts">

									<div class="entry clearfix row">
										<?php foreach ($kategoris as $kategori) : ?>

											<div class="col-md-4 col-xs-4" style="padding: 30px">
												<div class="entry-image">
													<a href="<?php echo base_url('index/product/'. $kategori->id_kategori); ?>" ><img class="image_fade" src="<?php echo base_url('assets/upload/'. $kategori->image); ?>" style="width:350px;height:350px;object-fit:scale-down;" alt="Standard Post with Image"></a>
												</div>
												<div class="entry-title" align="center">
													<h2  style="font-size: 15px"><a href="<?php echo base_url('index/product/'. $kategori->id_kategori); //echo base_url('index/detail_berita/'.$kategori->id_kategori);?>"><?php echo $kategori->nama_kategori; ?></a></h2>
												</div>
											</div>

										<?php endforeach; ?>
									</div>

								</div>




							</div>

						</div>



					</div>
						 <?php //$this->load->view('_partials_user/_sidebar_left'); ?> 

				</div>

			</section><!-- #content end -->

