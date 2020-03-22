

		<!-- Content
		============================================= -->
		<!-- <img src=""> -->
		<section id="page-title" class="page-title-left" style="background-image: url('<?php echo base_url('assets/user_template/images/bgtittle.jpg'); ?>'); background-attachment: fixed;">

			<div class="container clearfix">
				<h1 style="color: white; text-shadow: 2px 2px 5px black;"><b>PRODUCT DETAIL</b></h1>
				<ol class="breadcrumb">
					<!-- <li class="breadcrumb-item"><a href="#"><b style="color: white">Home</b></a></li>
					<li class="breadcrumb-item"><a href="#"><b style="color: white">Berita Desa</b></a></li>
					<li class="breadcrumb-item active" aria-current="page"><b style="color: #DFDFDFDF">Kategori Berita</b></li> -->
				</ol>
			</div>

		</section>

		<section id="content">

			<div class="content-wrap">

				<?php $this->load->view('_partials_user/_breaking_news'); ?>
				

				<div class="container clearfix">
					
					<div class="row nobottommargin clearfix">
						
						<div class="col-md-12">
							<h2><?php echo $data->judul; ?></h2>
						</div>
						<!-- .entry-title end -->
						<div class="col-md-6 nobottommargin">

							<!-- Single Post
							============================================= -->
							<div class="entry">
								<div class="entry-image">
									<a href="<?php echo base_url('assets/upload/'.$data->foto); ?>" data-lightbox="image"><img class="image_fade" src="<?php echo base_url('assets/upload/'.$data->foto); ?>" alt="Standard Post with Image"></a>
								</div><!-- .entry-image end -->

							</div><!-- .entry end -->

							<!-- Post Navigation
							============================================= -->
						</div>
						<div class="col-md-6 nobottommargin">

							<!-- Single Post
							============================================= -->
							<div class="entry">
								<!-- <div class="col-md-12">
									<h2><?php echo $data->judul; ?>
								</div> -->
								<!-- .entry-title end -->

								<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin">
									<h3 style="background-color: rgba(0,0,0,.02); padding: 12px;">
										IDR <?=number_format($data->harga_sewa,0,",",".")?> / Day
									</h3>

									<div class="col-md-12">
										<button class="btn btn-secondary">Add to Chart</button>
										<button class="btn btn-info">Rent Product</button>
									</div>
									
								</div>
							</div><!-- .entry end -->
						</div>
						<div class="col-md-12">
							<span class="col-md-12" > <h4 style="margin-bottom: 0px; padding:7px; background-color:rgba(0,0,0,.02);">Deskripsi Product</h4></span>
								<div style="padding: 10px;">
									<?php echo $data->konten; ?>
								</div>
							</div>
						<div class="col-md-12">
							<?php $this->load->view('_partials_user/_share_konten'); ?><!-- Post Single - Share End -->
						</div>

					</div><!-- .postcontent end -->
				</div>

			</div>

		</section><!-- #content end -->
