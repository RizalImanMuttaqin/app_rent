

		<!-- Content
			============================================= -->
			<section id="page-title" class="page-title-left" style="background-image: url('<?php echo base_url('assets/user_template/images/bgtittle.jpg'); ?>'); background-attachment: fixed;">

				<div class="container clearfix">
					<h1 style="color: white; text-shadow: 2px 2px 5px black;"><b>GALLERY DESA</b></h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#"><b style="color: white">Home</b></a></li>
						<li class="breadcrumb-item active" aria-current="page"><b style="color: #DFDFDFDF">Gallery Desa</b></li>
					</ol>
				</div>

			</section>

			<section id="content">

				<div class="content-wrap">

					<?php $this->load->view('_partials_user/_breaking_news'); ?>


					<div class="container clearfix">

						<div class="postcontent nobottommargin clearfix">

							<div class="single-post nobottommargin">

							<!-- Single Post
								============================================= -->
								<!-- Entry Title
									============================================= -->
									<div class="entry-title">
										<h2>Gallery Desa</h2>
									</div><!-- .entry-title end -->

								<!-- Entry Meta
									============================================= -->
									<ul class="entry-meta clearfix">
										<!-- <li><i class="icon-calendar3"></i> </li> -->
										<li><i class="icon-folder-open"></i> <a href="#">Gallery Desa</a></li>
									</ul><!-- .entry-meta end -->

								<!-- Entry Content
									============================================= -->
									<div class="entry-content notopmargin">

										<div class="section nobottommargin">

											<div class="container clearfix">

											<!-- Portfolio Filter
												============================================= -->
												<ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

													<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
													<?php foreach ($kategoris as $kategori) : ?>
														<li><a href="#" data-filter=".pf-<?php echo str_replace(' ', '_', $kategori->kategori_foto); ?>"><?php echo $kategori->kategori_foto; ?></a></li>
													<?php endforeach; ?>


												</ul><!-- #portfolio-filter end -->

												<div class="clear"></div>

											<!-- Portfolio Items
												============================================= -->
												<div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix">

													<?php foreach ($galeris as $galeri) : ?>
														<article class="portfolio-item pf-<?php echo str_replace(' ', '_', $galeri->kategori_foto); ?>" style="margin : 2.5%;">
															<div class="portfolio-image">
																<a href="<?php echo base_url('assets/upload/'.$galeri->filename); ?>">
																	<img src="<?php echo base_url('assets/upload/'.$galeri->filename); ?>" alt="Open Imagination">
																</a>
																<div class="portfolio-overlay">
																	<a href="<?php echo base_url('assets/upload/'.$galeri->filename); ?>" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
																	<a href="#myModal<?php echo $galeri->id_galeri; ?>" data-lightbox="inline" class="right-icon"><i class="icon-line-ellipsis"></i></a>
																</div>
															</div>
															<div class="portfolio-desc">
																<h3><a href="detail_galery.html"><?php echo $galeri->judul; ?></a>
																</h3>
																<!-- <span><p>Penjelasan singkat</p></span> -->
															</div>

															<!-- #modal start -->
															<div class="modal1 mfp-hide" id="myModal<?php echo $galeri->id_galeri;?>">
																<div class="block divcenter" style="background-color: #FFF; max-width: 500px;">
																	<div class="entry-image">
																		<a href="<?php echo base_url('assets/upload/'.$galeri->filename); ?>" data-lightbox="image"><img class="image_fade" src="<?php echo base_url('assets/upload/'.$galeri->filename); ?>" alt="Standard Post with Image"></a>
																	</div>
																	<div class="center" style="padding: 20px;">
																		<h3><?php echo $galeri->judul; ?></h3>
																		<p class="nobottommargin">
																			<?php echo $galeri->keterangan; ?>
																		</p>
																	</div>
																	<div class="section center nomargin" style="padding: 30px;">
																		<a href="#" class="button" onClick="$.magnificPopup.close();return false;">Tutup</a>
																	</div>
																</div>
															</div>
															<!-- #modal end -->
														</article>
													<?php endforeach; ?>

												</div><!-- #portfolio end -->


											</div>

										</div>

									</div>

								</div>

							</div><!-- .postcontent end -->

							<?php $this->load->view('_partials_user/_sidebar_left'); ?>

						</div>

					</div>

				</section><!-- #content end -->



