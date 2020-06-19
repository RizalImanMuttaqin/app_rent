<!-- Content
		============================================= -->
<!-- <img src=""> -->
<section id="page-title" class="page-title-left"
	style="background-image: url('<?php echo base_url('assets/user_template/images/bgtittle.jpg'); ?>'); background-attachment: fixed;">

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
							<a href="<?php echo base_url('assets/upload/'.$data->foto); ?>" data-lightbox="image"><img
									class="image_fade" src="<?php echo base_url('assets/upload/'.$data->foto); ?>"
									alt="Standard Post with Image"></a>
						</div><!-- .entry-image end -->

					</div><!-- .entry end -->

					<!-- Post Navigation
							============================================= -->
				</div>
				<div class="col-md-6 nobottommargin">
					<form method="POST">
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
									IDR <b id="harga_sewa"><?=number_format($data->harga_sewa,0,",",".")?></b> / Day
									<input type="hidden" value="<?=$data->id_product?>" name="id_product[]">
								</h3>
								<small>
									Crew fee : IDR <b
										id="crew_sewa"><?=number_format($data->harga_sewa_crew,0,",",".")?></b> / Day
									<br>
									Sewa 7 hari bayar 4 hari (tidak ada potongan untuk crew).
									<br>
									Harga belum termasuk pajak.
								</small>
								<div class="col-md-12">
									<table class="table">
										<tr>
											<td style="width: 50%;">
												<div class="input-group mb-3">
													<div class="input-group-prepend" style="height: 30px;">
														<span style="cursor: pointer;" onClick="(()=>{
															let  qty = $('#qty_sewa');
															if(qty.val() > 1 ){
																qty.val(Number(qty.val())-1);
															}
															countPrice();
															return false;
														})();" class="input-group-text">-</span>
													</div>
													<input type="text" name="qty_sewa[]" id="qty_sewa" onchange="(()=>{
														if(this.value > <?=$data->stock?>){
															this.value = <?=$data->stock?>;
														}
														countPrice();
														return false;
													})();" value="1" class="form-control formatNumbers"
														style="height: 30px; width: 60px; flex: none; text-align: center;">
													<div class="input-group-append" style="height: 30px;">
														<span style="cursor: pointer;" onClick="(()=>{
															let  qty = $('#qty_sewa');
															if(qty.val() < <?=$data->stock?> ){
																qty.val(Number(qty.val())+1);
															}
															countPrice();
															return false;
														})();" class="input-group-text">+</span>
													</div>
												</div>
												<small>Available <b class="formatNumbers"><?=$data->stock?></b></small>
											</td>
											<td style="width: 50%;">
												<input type="text" id="tgl_sewa" name="tgl_sewa[]" onchange="countPrice();"
													class="daterange form-control"
													style="flex: none; width: 210px; height: 30px;">
											</td>
										</tr>
										<tr>
											<td>Total Price</td>
											<td>IDR <b class="formatNumbers"
													id="total_price"><?=$data->harga_sewa+$data->harga_sewa_crew?></b>
													<input type="hidden" name="total_price[]" id="total_price_h">
											</td>
										</tr>
									</table>
								</div>
								<div class="col-md-12">
									<button formaction="<?php echo base_url('index/add_cart');?>" class="btn btn-secondary">Add to Cart</button>
									<button formaction="<?php echo base_url('index/add_order');?>" class="btn btn-info">Rent Product</button>
								</div>

							</div>
						</div><!-- .entry end -->
					</form>
				</div>
				<div class="col-md-12">
					<span class="col-md-12">
						<h4 style="margin-bottom: 0px; padding:7px; background-color:rgba(0,0,0,.02);">Product
							Description</h4>
					</span>
					<div style="padding: 10px;">
						<?php echo $data->konten; ?>
					</div>
				</div>
				<div class="col-md-12">
					<?php $this->load->view('_partials_user/_share_konten'); ?>
					<!-- Post Single - Share End -->
				</div>

			</div><!-- .postcontent end -->
		</div>

	</div>

</section><!-- #content end -->