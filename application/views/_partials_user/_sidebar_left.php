						<div class="sidebar nobottommargin col_last">

							<div class="sidebar-widgets-wrap">

								<div class="widget clearfix">

									<div class="tabs nobottommargin clearfix" id="sidebar-tabs">

										<h4><a href="<?php echo base_url('artikel');?>">Artikel</a></h4>

										<div class="bottommargin-sm">
											<?php foreach ($artikels as $artikel) : ?>
												<div class="spost clearfix">
													<div class="entry-image">
														<a href="<?php echo base_url('assets/upload/'.$artikel->foto); ?>" data-lightbox="image"><img class="rounded-circle" src="<?php echo base_url('assets/upload/'.$artikel->foto); ?>" alt="Standard Post with Image"></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="<?php echo base_url('index/detail_artikel/'.$artikel->id_artikel);?>"><?php echo $artikel->judul; ?></a></h4>
														</div>
														<ul class="entry-meta">
															<li><i class="icon-calendar3"></i><?php echo date('d-m-Y', strtotime($artikel->date_created)); ?></li>
														</ul>
													</div>
												</div>
											<?php endforeach; ?>

										</div>

									</div>

								</div>

								<div class="widget clearfix">

									<h4><a href="<?php echo base_url('kegiatan');?>">INFORMASI KEGIATAN</a></h4>
									<div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">
										<?php foreach ($kegiatans as $kegiatan) : ?>
											<div class="oc-item">
												<div class="iportfolio">
													<div class="portfolio-image">
														<a href="portfolio-single.html">
															<img src="<?php echo base_url('assets/upload/'.$kegiatan->foto); ?>" alt="Open Imagination">
														</a>
														<div class="portfolio-overlay">
															<a href="<?php echo base_url('assets/upload/'.$kegiatan->foto); ?>" class="center-icon" data-lightbox="image"><i class="icon-search"></i></a>
														</div>
													</div>
													<div class="portfolio-desc center nobottompadding">
														<h3><a href="<?php echo base_url('index/detail_kegiatan/'.$kegiatan->id_kegiatan);?>"><?php echo $kegiatan->judul; ?></a></h3>
														<!-- <span>Information Description</span> -->
													</div>
												</div>
											</div>
										<?php endforeach; ?>

									</div>

								</div>

							</div>

						</div>