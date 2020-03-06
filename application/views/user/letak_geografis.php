

		<!-- Content
		============================================= -->
		<section id="page-title" class="page-title-left" style="background-image: url('<?php echo base_url('assets/user_template/images/bgtittle.jpg'); ?>'); background-attachment: fixed;">

			<div class="container clearfix">
				<h1 style="color: white; text-shadow: 2px 2px 5px black;"><b>PROFILE DESA</b></h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#"><b style="color: white">Home</b></a></li>
					<li class="breadcrumb-item"><a href="#"><b style="color: white">Informasi Publik</b></a></li>
					<li class="breadcrumb-item"><a href="#"><b style="color: white">Profile Desa</b></a></li>
					<li class="breadcrumb-item active" aria-current="page"><b style="color: #DFDFDFDF">Letak Geografis</b></li>
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
									<h2>LETAK GEOGRAFIS</h2>
								</div><!-- .entry-title end -->

								<!-- Entry Meta
								============================================= -->
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> <?php echo date('d-m-Y', strtotime($profile->date_updated)) ?></li>
									<li><i class="icon-folder-open"></i> <a href="#">Profile Desa</a></li>
								</ul><!-- .entry-meta end -->

								<!-- Entry Image
								============================================= -->
								<div class="entry-image">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44855.74063081327!2d108.3898505604315!3d-6.429390092637586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a0062c8c1403371!2sKantor+Kepala+Desa+Juntinyuat!5e0!3m2!1sid!2sid!4v1546160427697" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div><!-- .entry-image end -->

								<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin">

									<?php echo $profile->konten; ?>
									<!-- Post Single - Content End -->

									<!-- Post Single - Share
										============================================= -->
										<?php $this->load->view('_partials_user/_share_konten'); ?><!-- Post Single - Share End -->

									</div>

						</div>

					</div><!-- .postcontent end -->

						<?php $this->load->view('_partials_user/_sidebar_left'); ?>


				</div>

			</div>

		</section><!-- #content end -->

