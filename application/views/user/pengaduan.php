
		
		<section id="map-overlay" style="background-color: #EEEEEE">

			<div class="container clearfix">
				<!-- Contact Form Overlay
				============================================= -->
				<div id="contact-form-overlay" class="clearfix">
					<div style="padding-top: 10px">
						<?php echo $this->session->flashdata('info'); ?>
					</div>

					<div class="fancy-title title-dotted-border">
						<h3>Send us an Email</h3>
					</div>

					<!-- <div class="contact-widget"> -->
						

						<div class="contact-form-result"></div>

						<!-- Contact Form
						============================================= -->
						<form class="nobottommargin" action="<?php echo base_url('index/addPengaduan');?>" method="post" enctype="multipart/form-data">

							<div class="col_half">
								<label for="template-contactform-name">Name <small>*</small></label>
								<input type="text" id="template-contactform-name" name="nama" value="" class="sm-form-control required" />
							</div>

							<div class="col_half col_last">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_half">
								<label for="template-contactform-phone">Phone</label>
								<input type="text" id="telepon" name="telepon" value="" class="sm-form-control" />
							</div>

							<div class="col_half col_last">
								<label for="template-contactform-service">Category</label>
								<select id="template-contactform-service" name="kategori" class="sm-form-control">
									<?php foreach ($pengaduans as $pengaduan) : ?>
									<option value="<?php echo $pengaduan->id_kategori_pengaduan; ?>"><?php echo $pengaduan->nama_kategori; ?></option>
									<?php endforeach; ?> 
								</select>
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-subject">Subject <small>*</small></label>
								<input type="text" id="template-contactform-subject" name="judul" value="" class="required sm-form-control" />
							</div>

							<div class="col_full">
								<label for="template-contactform-message">Message <small>*</small></label>
								<textarea class="required sm-form-control" id="template-contactform-message" name="pesan" rows="6" cols="30"></textarea>
							</div>

							<div class="col_full hidden">
								<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
							</div>

							<div class="col_full">
								<button class="button button-3d nomargin" type="submit">Send Message</button>
							</div>

						</form>
					<!-- </div> -->

				</div><!-- Contact Form Overlay End -->

			</div>

		</section><!-- Contact Form & Map Overlay Section End -->

