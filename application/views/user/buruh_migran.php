

		<!-- Content
		============================================= -->
		<section id="page-title" class="page-title-left" style="background-image: url('<?php echo base_url('assets/user_template/images/bgtittle.jpg'); ?>'); ?>'); background-attachment: fixed;">

			<div class="container clearfix">
				<h1 style="color: white; text-shadow: 2px 2px 5px black;"><b>BURUH MIGRAN</b></h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#"><b style="color: white">Home</b></a></li>
					<li class="breadcrumb-item active" aria-current="page"><b style="color: #DFDFDFDF">Buruh Migran</b></li>
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
									<h2>BURUH MIGRAN</h2>
								</div><!-- .entry-title end -->

								<!-- Entry Meta
								============================================= -->
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i><?php echo date('d-m-Y', strtotime($buruh->date_updated)) ?></li>
									<li><i class="icon-folder-open"></i> <a href="#">Buruh Migran</a></li>
								</ul><!-- .entry-meta end -->
								<div class="entry-content notopmargin">

									<?php echo $buruh->konten; ?>

								</div>

								<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin">

									<div class="fancy-title title-border">
									<h3>Kategori Berita Buruh Migran</h3>
									</div>
									<?php foreach ($data as $n_data) : ?>
									<div class="col_one_third nobottommargin">
										<div class="ipost clearfix">
											<div class="entry-image">
												<a href="<?php echo base_url('assets/upload/'.$n_data->foto); ?>"><img class="image_fade" src="<?php echo base_url('assets/upload/'.$n_data->foto); ?>" alt="Image"></a>
											</div>
											<div class="entry-title">
												<h3><a href="<?php echo base_url('index/detail_berita/'.$n_data->id_berita) ?>"><?php echo $n_data->judul; ?></a></h3>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-calendar3"></i> <?php echo date('d-m-Y', strtotime($n_data->tanggal)); ?></li>
												<!-- <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li> -->
											</ul>
											<div class="entry-content">
												<?php echo $n_data->konten; ?>
											</div>
										</div>
									</div>
									<?php endforeach; ?>
								</div>

						</div>

					</div><!-- .postcontent end -->

					<?php $this->load->view('_partials_user/_sidebar_left'); ?>					

				</div>

			</div>

		</section><!-- #content end -->

