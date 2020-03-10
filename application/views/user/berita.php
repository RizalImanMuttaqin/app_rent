

		<!-- Content
			============================================= -->
			<section id="page-title" class="page-title-left" style="background-image: url('<?php echo base_url('assets/user_template/images/bgtittle.jpg'); ?>'); background-attachment: fixed;">

				<div class="container clearfix">
					<h1 style="color: white; text-shadow: 2px 2px 5px black;"><b>Our Product</b></h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#"><b style="color: white">Home</b></a></li>
						<li class="breadcrumb-item active" aria-current="page"><b style="color: #DFDFDFDF">Product</b></li>
					</ol>
				</div>

			</section>

			<section id="content">

				<div class="content-wrap">

					<?php $this->load->view('_partials_user/_breaking_news'); ?>

					<div class="container clearfix">
						
						
						<div class="single-post nobottommargin">
							<div class="clearfix">
								<div class="col-lg-12 col-md-12 center" style="background-color:white; padding: 20px 0px 100px 0px;">
										<div class="col_one_third">
											<label for="category" style="float: left;">Category : </label>
											<select type="text" id="category" name="category" value="" class="sm-form-control">
												<option>Show All Product</option>
												<option>Camera</option>
												<option>Lens</option>
											</select>
										</div>
										<div class="col_one_third">
											<label for="category" style="float: left;">Search : </label>
											<input type="text" id="telepon" name="passlogin" value="" class="sm-form-control" />
										</div>
										<div class="col_one_third col_last">
											<!-- <label for="category" style="float: left;"></label> -->
											<button class="btn btn-info" type="submit" style="float: right; margin-top: 30px; font-weight: bold;">Filter</button>
										</div>
								</div>
							</div>

							<div class="container clearfix" style="padding-top: 40px;">

								<div class="container nobottommargin">
		
									<div class="col_full clearfix">
										<div id="posts">
		
											<div class="entry clearfix" >
												<?php //foreach ($kategoris as $kategori) : 
													for($i=1; $i<=12; $i++) :
												?>
		
													<div class="col_one_third col_last" >
														<div class="entry-title" align="center">
															<h2  style="font-size: 15px"><a href="<?php //echo base_url('index/detail_berita/'.$kategori->id_kategori);?>"> ARRI ALEXA MINI LF <?php //echo $kategori->nama_kategori; ?></a></h2>
														</div>
														<div class="entry-image" style="margin-bottom:10px;">
															<a href="<?php //echo base_url('assets/upload/'.$berita->foto); ?>" data-lightbox="image"><img class="image_fade" src="<?php echo base_url('assets/upload/1583262062slide.jpg'); ?>" alt="Standard Post with Image"></a>
														</div>
														<div class="entry-title" style="padding-left: 20px; padding-right: 20px;">
															<a  href="<?php echo base_url('index/detail_berita/10'); ?>" class="btn btn-secondary form-control">RENT PRODUCT</a>
															<!-- <h2  style="font-size: 15px"><a href="<?php //echo base_url('index/detail_berita/'.$kategori->id_kategori);?>"> ARRI ALEXA MINI LF <?php //echo $kategori->nama_kategori; ?></a></h2> -->
														</div>
													</div>
		
												<?php 
												endfor;
												//endforeach; ?>
											</div>
		
										</div>
		
		
		
		
									</div>
		
								</div>
		
		
		
							</div>

							

							</div><!-- .postcontent end -->


						</div>

					</div>

				</section><!-- #content end -->

