

		<!-- Content
			============================================= -->
			<section id="page-title" class="page-title-left" style="background-image: url('<?php echo base_url('assets/user_template/images/bgtittle.jpg'); ?>'); background-attachment: fixed;">

				<div class="container clearfix">
					<h1 style="color: white; text-shadow: 2px 2px 5px black;"><b>BERITA DESA</b></h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#"><b style="color: white">Home</b></a></li>
						<li class="breadcrumb-item active" aria-current="page"><b style="color: #DFDFDFDF">Berita Desa</b></li>
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
										<h2>Berita Desa</h2>
									</div><!-- .entry-title end -->

								<!-- Entry Meta
									============================================= -->
									<ul class="entry-meta clearfix">
										<!-- <div class="fancy-title title-border">
											<h3>Kategori Berita Terbaru</h3>
										</div> -->
										<!-- <li><i class="icon-calendar3"></i> 10th July 2014</li> -->
										<li><i class="icon-folder-open"></i> <a href="#">Berita Desa</a></li>
									</ul><!-- .entry-meta end -->
									<?php foreach ($data as $kategori) : ?>
									<div class="fancy-title title-border">
										<h3>Kategori Berita <?php echo $kategori->nama_kategori; ?></h3>
									</div>
									<div id="oc-images" class="owl-carousel image-carousel carousel-widget  bottommargin-sm" data-margin="30" data-nav="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-xl="4">
										<?php $ndatas = $this->ModBerita->get_berita_id($kategori->id_kategori); ?>

										<?php foreach ($ndatas as $ndata) : ?>
										<div class="oc-item">
											<div class="ipost clearfix">
												<div class="entry-image">
													<a href="read_more_detail.html"><img class="image_fade" src="<?php echo base_url('assets/upload/'.$ndata->foto);?>" alt="Image"></a>
												</div>
												<div class="entry-title">
													<h4><a href="<?php echo base_url('index/detail_berita/'.$ndata->id_berita) ?>"><?php echo $ndata->judul; ?></a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li><i class="icon-calendar3"></i><?php echo date('d-m-Y', strtotime($ndata->date_created)); ?></li>
												</ul>
											</div>
										</div>
										<?php endforeach; ?>


									</div>
									<div class="clear"></div>
									<?php endforeach; ?>

								<!-- Entry Content
									============================================= -->


								</div>

							</div><!-- .postcontent end -->

							<?php $this->load->view('_partials_user/_sidebar_left'); ?>

						</div>

					</div>

				</section><!-- #content end -->

