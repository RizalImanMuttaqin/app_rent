

		<!-- Content
		============================================= -->
		<!-- <img src=""> -->
		<section id="page-title" class="page-title-left" style="background-image: url('<?php echo base_url('assets/user_template/images/bgtittle.jpg'); ?>'); background-attachment: fixed;">

			<div class="container clearfix">
				<h1 style="color: white; text-shadow: 2px 2px 5px black;"><b>BERITA DESA</b></h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#"><b style="color: white">Home</b></a></li>
					<li class="breadcrumb-item"><a href="#"><b style="color: white">Berita Desa</b></a></li>
					<li class="breadcrumb-item active" aria-current="page"><b style="color: #DFDFDFDF">Kategori Berita</b></li>
				</ol>
			</div>

		</section>

		<section id="content">

			<div class="content-wrap">

				<?php $this->load->view('_partials_user/_breaking_news'); ?>
				

				<div class="container clearfix">
					
					<div class="row nobottommargin clearfix">
						
						<div class="col-md-12">
							<h2><?php //echo $data->judul; ?>
								COOKE ANAMORPHIC Set 32mm, 40mm, 50mm, 75mm, 100mm (T2.3)</h2>
						</div><!-- .entry-title end -->
						<div class="col-md-6 nobottommargin">

							<!-- Single Post
							============================================= -->
							<div class="entry clearfix">

								<!-- Entry Title
								============================================= -->

								<!-- Entry Meta
								============================================= -->
								
								<!-- Entry Image
								============================================= -->
								<div class="entry-image">
									<a href="<?php echo base_url('assets/upload/'.$data->foto); ?>" data-lightbox="image"><img class="image_fade" src="<?php echo base_url('assets/upload/'.$data->foto); ?>" alt="Standard Post with Image"></a>
								</div><!-- .entry-image end -->

								<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin">

									<?php //echo $data->konten; ?>
									<!-- Post Single - Content End -->

									<!-- Post Single - Share
									============================================= -->
									<?php //$this->load->view('_partials_user/_share_konten'); ?><!-- Post Single - Share End -->

								</div>
							</div><!-- .entry end -->

							<!-- Post Navigation
							============================================= -->
							<div class="post-navigation clearfix">

								<!-- <div class="col_half nobottommargin">
									<a href="<?php echo (int)$data->$id-1 ?>">&lArr; Previous</a>
								</div>

								<div class="col_half col_last tright nobottommargin">
									<a href="<?php echo (int)$data->$id+1 ?>"><b></b> Next &rArr;</a>
								</div> -->

							</div><!-- .post-navigation end -->

						</div>
						<div class="col-md-6 nobottommargin">

							<!-- Single Post
							============================================= -->
							<div class="entry">

								<!-- Entry Title
								============================================= -->
								<div class="entry-title">
									<h2><?php //echo $data->judul; ?></h2>
								</div><!-- .entry-title end -->

								<!-- Entry Meta
								============================================= -->

								<!-- Entry Image
								============================================= -->
								<!-- <div class="entry-image">
									<a href="<?php echo base_url('assets/upload/'.$data->foto); ?>" data-lightbox="image"><img class="image_fade" src="<?php echo base_url('assets/upload/'.$data->foto); ?>" alt="Standard Post with Image"></a>
								</div> -->
								<!-- .entry-image end -->

								<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin" style="padding:0px 50px 0px 50px;">
									<h3>
										IDR 7.500.000 / DAY
									</h3>
									<?php //echo $data->konten; ?>
									<p style="text-align: left;">
											Camera alexa mini body ( ARRI RAW  & ANAMORPHIC LICENSED )
											ARRI Electronic viewfinder & Cable
											ARRI FF4 follow focus set
											Bridge plate, quick release, sliding plate
											3x Lexar 256 GB C fast
											1x CODEC card reader
											5x FX lion 14,7 Volt V Mount Battery Pack with  4 ways Charger 
											Shoulder pad
											TV logic 5.8" or 5.6" multiformat onboard monitor & noga arm
											TV logic 17" SDI monitor multiformat 
											2575D O connor Fluid head/ Sachtler 9+9 Fluid head
											Tripod set ( Hi leg/ baby leg/ Hi hat )
											Clapper board set (small, medium, large)
											BNC Cable 25 meters
									</p>
									<!-- Post Single - Content End -->

									<!-- Post Single - Share
									============================================= -->

								</div>
							</div><!-- .entry end -->

							<!-- Post Navigation
							============================================= -->
							<div class="post-navigation clearfix">

								<!-- <div class="col_half nobottommargin">
									<a href="<?php echo (int)$data->$id-1 ?>">&lArr; Previous</a>
								</div>

								<div class="col_half col_last tright nobottommargin">
									<a href="<?php echo (int)$data->$id+1 ?>"><b></b> Next &rArr;</a>
								</div> -->

							</div><!-- .post-navigation end -->

						</div>
						<div class="col-md-12">
								ORDER<!-- Post Single - Share End -->
							</div>
						<div class="col-md-12">
							<?php $this->load->view('_partials_user/_share_konten'); ?><!-- Post Single - Share End -->
						</div>

					</div><!-- .postcontent end -->

					<!-- <?php $this->load->view('_partials_user/_sidebar_left'); ?> -->
					

				</div>

			</div>

		</section><!-- #content end -->

