

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
								<form method="GET" action="<?=base_url('index/product');?>">
								<div class="col-lg-12 col-md-12 center" style="background-color:white; padding: 20px 0px 100px 0px;">
										<div class="col_one_third">
											<label for="category" style="float: left;">Category : </label>
											<select type="text" id="category" name="category" value="" style="height: 40px;" class="sm-form-control">
												<option value="all">Show All Product</option>
												<?php foreach ($kategoris as $kategori) : ?>
													<option value="<?=$kategori->id_kategori?>" <?php echo ($this->uri->segment(3)==$kategori->id_kategori || $this->input->get('category')== $kategori->id_kategori ) ? 'selected' : ''; ?>>
														<?=$kategori->nama_kategori?>
													</option>
												<?php endforeach; ?>
												<!-- <option value="all" selected><?=$this->uri->segment(3)?></option> -->
											</select>
										</div>
										<div class="col_one_third">
											<label for="category" style="float: left;">Search : </label>
											<input type="text" id="telepon" name="search" value="" class="sm-form-control" />
										</div>
										<div class="col_one_third col_last">
											<!-- <label for="category" style="float: left;"></label> -->
											<button class="btn btn-info" type="submit" style="float: right; margin-top: 30px; font-weight: bold;">Filter</button>
											<a class="btn btn-info"  href="<?=base_url('index/product');?>" style="float: right; margin-top: 30px; font-weight: bold; margin-right: 10px;">Clear</a>
										</div>
								</div>
								</form>
							</div>

							<div class="container clearfix" style="padding-top: 40px;">

								<div class="container nobottommargin">
		
									<div class="col_full clearfix">
										<div id="posts">
		
											<div class="entry clearfix" >
												<?php //foreach ($kategoris as $kategori) : 
													foreach ($data as $item) :
												?>
		
													<div class="col_one_third col_last" style="padding: 20px;">
														<div class="entry-title" align="center">
															<h2  style="font-size: 15px"><a href="<?php echo base_url('index/detail_product/'.$item->id_product);?>"> <?php echo $item->judul; ?></a></h2>
														</div>
														<div class="entry-image" style="margin-bottom:10px;">
															<a href="<?php echo base_url('assets/upload/'.$item->foto); ?>" data-lightbox="image"><img class="image_fade" style="width:350px;height:350px;object-fit:scale-down;" src="<?php echo base_url('assets/upload/'. $item->foto); ?>" alt="Standard Post with Image"></a>
														</div>
														<div class="entry-title" style="padding-left: 20px; padding-right: 20px;">
															<a  href="<?php echo base_url('index/detail_product/'.$item->id_product); ?>" class="btn btn-secondary form-control">RENT PRODUCT</a>
															<!-- <h2  style="font-size: 15px"><a href="<?php //echo base_url('index/detail_berita/'.$kategori->id_kategori);?>"> ARRI ALEXA MINI LF <?php //echo $kategori->nama_kategori; ?></a></h2> -->
														</div>
													</div>
		
												<?php 
												endforeach;
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

