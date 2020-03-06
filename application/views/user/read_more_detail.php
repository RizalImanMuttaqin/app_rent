

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

					<div class="postcontent nobottommargin clearfix">

						<div class="single-post nobottommargin">

							<!-- Single Post
							============================================= -->
							<div class="entry clearfix">

								<!-- Entry Title
								============================================= -->
								<div class="entry-title">
									<h2><?php echo $data->judul; ?></h2>
								</div><!-- .entry-title end -->

								<!-- Entry Meta
								============================================= -->
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> <?php echo date('d-m-Y', strtotime($data->date_created)); ?> </li>
									<li><i class="icon-folder-open"></i> <a href="#">Berita Desa</a></li>
								</ul><!-- .entry-meta end -->

								<!-- Entry Image
								============================================= -->
								<div class="entry-image">
									<a href="<?php echo base_url('assets/upload/'.$data->foto); ?>" data-lightbox="image"><img class="image_fade" src="<?php echo base_url('assets/upload/'.$data->foto); ?>" alt="Standard Post with Image"></a>
								</div><!-- .entry-image end -->

								<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin">

									<?php echo $data->konten; ?>
									<!-- Post Single - Content End -->

									<!-- Post Single - Share
									============================================= -->
									<?php $this->load->view('_partials_user/_share_konten'); ?><!-- Post Single - Share End -->

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

					</div><!-- .postcontent end -->

					<?php $this->load->view('_partials_user/_sidebar_left'); ?>
					

				</div>

			</div>

		</section><!-- #content end -->

