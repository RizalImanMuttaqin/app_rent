
		
		<section id="map-overlay" style="background-color: #EEEEEE">

			<div class="container clearfix">
				<!-- Contact Form Overlay
				============================================= -->
				<div style="padding-top: 10px">
					<?php echo $this->session->flashdata('info');  ?>
				</div>
				<div class="row">
					<div id="contact-form-overlay" class="clearfix col-md-6">
						
					
					<div class="fancy-title title-dotted-border">
						<h3>Register</h3>
					</div>
					
					<!-- <div class="contact-widget"> -->
						
						
						<div class="contact-form-result"></div>
						
						<!-- Contact Form
						============================================= -->
						<form class="nobottommargin" action="<?php echo base_url('index/register');?>" method="post" enctype="multipart/form-data">

						<div class="col_full">
							<label for="template-contactform-name">Name <small>*</small></label>
							<input type="text" required id="template-contactform-name" name="name" value="" class="sm-form-control required" />
						</div>

						
						<div class="col_full">
							<label for="template-contactform-email">Email <small>*</small></label>
							<input type="email" required id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
						</div>
						
						<div class="clear"></div>
						
						<div class="col_full">
							<label for="template-contactform-phone">Phone <small>*</small></label>
							<input type="text" required id="telepon" name="phone" value="" class="sm-form-control" />
						</div>
						
						
						<div class="col_full">
							<label for="template-contactform-name">Password <small>*</small></label>
							<input type="password" required id="template-contactform-name" name="password" value="" class="sm-form-control required" />
						</div>
						
						<div class="col_full">
							<label for="template-contactform-name">Confirm Password <small>*</small></label>
							<input type="password" id="template-contactform-name" name="cpassword" value="" class="sm-form-control required" />
						</div>
						<!-- <div class="col_full hidden">
							<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
						</div> -->
						
						<div class="col_full">
							<label for="template-contactform-message">Address <small></small></label>
							<textarea class="required sm-form-control" id="template-contactform-message" name="address" rows="6" cols="30"></textarea>
						</div>
							<div class="col_full">
								<button class="button button-3d nomargin" type="submit">Submit</button>
							</div>
							
						</form>
						<!-- </div> -->

					</div><!-- Contact Form Overlay End -->

					<div id="contact-form-overlay" class="clearfix col-md-6">
						
					
					<div class="fancy-title title-dotted-border" >
						<h3>Login</h3>
					</div>
					
					<!-- <div class="contact-widget"> -->
						
						
						<div class="contact-form-result"></div>
						
						<!-- Contact Form
						============================================= -->
						<form class="nobottommargin" action="<?php echo base_url('index/signIn');?>" method="post" enctype="multipart/form-data">
						
						<div class="col_full">
							<label for="template-contactform-email">Email <small>*</small></label>
							<input type="email" id="template-contactform-email" name="emaillogin" value="" class="required email sm-form-control" />
							</div>
							
							<div class="clear"></div>
							
							<div class="col_full">
								<label for="template-contactform-phone">Password <small>*</small></label>
								<input type="password" id="telepon" name="passlogin" value="" class="sm-form-control" />
							</div>
							
							
							<div class="col_full">
								<button class="button button-3d nomargin" type="submit" style="float: right;">Submit</button>
							</div>
							
						</form>
						<!-- </div> -->

					</div><!-- Contact Form Overlay End -->
					
				</div>
			</div>
				
			</section><!-- Contact Form & Map Overlay Section End -->

			