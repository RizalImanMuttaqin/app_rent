

		<!-- Content
		============================================= -->
		<section id="page-title" class="page-title-left" style="background-image: url('<?php echo base_url('assets/user_template/images/bgtittle.jpg'); ?>'); background-attachment: fixed;">

			<div class="container clearfix">
				<h1 style="color: white; text-shadow: 2px 2px 5px black;"><b>ANGGARAN DESA</b></h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#"><b style="color: white">Home</b></a></li>
					<li class="breadcrumb-item active" aria-current="page"><b style="color: #DFDFDFDF">Anggaran Desa</b></li>
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
									<h2>Anggaran Desa</h2>
								</div><!-- .entry-title end -->

								<!-- Entry Meta
								============================================= -->
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 10th July 2014</li>
									<li><i class="icon-folder-open"></i> <a href="#">Anggaran Desa</a></li>
								</ul><!-- .entry-meta end -->

								<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin">

									<div id="post-lists" class="widget clearfix">
										<?php foreach ($medias as $media) : ?>
										<div id="post-list-footer">
											<div class="spost clearfix">
												<div class="entry-image">
													<a href="<?php echo base_url('index/download/'.$media->filename)?>" class="nobg"><img src="assets/user_template/images/icons/download.png" alt=""></a>
												</div>
												<div class="entry-c">
													<div class="entry-title">
														<h4><a href="<?php echo base_url('index/download/'.$media->filename)?>"><?php echo $media->keterangan; ?></a></h4>
													</div>
													<ul class="entry-meta">
														<li><?php echo date('d-m-Y', strtotime($media->date_updated)); ?></li>
													</ul>
												</div>
											</div>

										</div>
										<?php endforeach; ?>


									</div>

									<!-- Post Single - Content End -->

								</div>

						</div>

					</div><!-- .postcontent end -->

						<?php $this->load->view('_partials_user/_sidebar_left'); ?>


				</div>

			</div>

		</section><!-- #content end -->

