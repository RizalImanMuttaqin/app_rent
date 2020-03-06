

		<!-- Content
		============================================= -->
		<section id="page-title" class="page-title-left" style="background-image: url('<?php echo base_url('assets/user_template/images/bgtittle.jpg'); ?>'); background-attachment: fixed;">

			<div class="container clearfix">
				<h1 style="color: white; text-shadow: 2px 2px 5px black;"><b>PROFILE DESA</b></h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#"><b style="color: white">Home</b></a></li>
					<li class="breadcrumb-item"><a href="#"><b style="color: white">Informasi Publik</b></a></li>
					<li class="breadcrumb-item"><a href="#"><b style="color: white">Profile Desa</b></a></li>
					<li class="breadcrumb-item active" aria-current="page"><b style="color: #DFDFDFDF"><?php echo $profile->judul; ?></b></li>
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
									<h2><?php echo $profile->judul; ?></h2>
								</div><!-- .entry-title end -->

								<!-- Entry Meta
								============================================= -->
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> <?php echo date('d-m-Y', strtotime($profile->date_created)); ?> </li>
									<li><i class="icon-folder-open"></i> <a href="#">Profile Desa</a></li>
								</ul><!-- .entry-meta end -->

								<!-- Entry Image
								============================================= -->
								<div class="entry-image">
									<?php if($profile->id == 1 || $profile->id == 2 ) : ?>
									<a href="<?php echo base_url('assets/upload/'.$profile->foto); ?>" data-lightbox="image"><img class="image_fade" src="<?php echo base_url('assets/upload/'.$profile->foto); ?>" alt="Standard Post with Image"></a>
								<?php endif; ?>
								</div><!-- .entry-image end -->

								<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin">

									<?php echo $profile->konten; ?>
									<!-- Post Single - Content End -->

								</div>

						</div>

					</div><!-- .postcontent end -->

						<?php $this->load->view('_partials_user/_sidebar_left'); ?>


				</div>

			</div>

		</section><!-- #content end -->

