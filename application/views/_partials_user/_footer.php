		<!-- Footer
		============================================= -->
		<!-- <footer id="footer" class="dark"> -->
		<footer id="footer" class="dark" style="background-color: #fb8c00;">
		<!-- <footer id="footer" class="dark" style="background-color: #515875;"> -->


			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix" style="color: white;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<iframe src="https://maps.google.com/maps?q=Jalan%20DD%20Menteng%20Dalam%20Tebet%20Kota%20Jakarta%20Selatan%20DKI%20Jakarta%2012870%20Indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 450px; height: 300px;" allowfullscreen></iframe>
						</div>
						<!-- .entry-image end -->

						<div class="col-md-6" >
							<span style="line-height: 0.5;">
								<?php echo $address->konten; ?>
							</span>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							Copyrights &copy; 2020 RIM.<br>
						</div>

						<div class="col-md-6">
							<div class="fright clearfix">
								<a href="http://www.facebook.com/sharer.php?u=<?php echo base_url(uri_string()); ?>" target="_blank" class="social-icon si-small si-borderless si-facebook">
									<i class="icon-facebook" style="color: white;"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="https://twitter.com/share?url=<?php echo base_url(uri_string()); ?>" target="_blank" class="social-icon si-small si-borderless si-twitter">
									<i class="icon-twitter" style="color:white"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="https://plus.google.com/share?url=<?php echo base_url(uri_string()); ?>" target="_blank" class="social-icon si-small si-borderless si-gplus">
									<i class="icon-gplus" style="color:white"></i>
									<i class="icon-gplus"></i>
								</a>

							</div>

							<i class="icon-phone"></i> <a style="color: white;" target="_blank" href="https://api.whatsapp.com/send?phone=<?=$admin->phone?>&text=Hallo,%20Ada%20yang%20ingin%20saya%20tanyakan%20tentang%20product%20Brainbox"><?=$admin->phone?></a>
						</div>

					</div>
					<!-- Entry Image
					============================================= -->

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

		</div><!-- #wrapper end -->

		<!-- Go To Top
	============================================= -->
		<div id="gotoTop" class="icon-angle-up"></div>

		<!-- External JavaScripts
	============================================= -->
		<script src="<?php echo base_url('assets/user_template/js/jquery.js') ?>"></script>
		<script src="<?php echo base_url('assets/user_template/js/plugins.js') ?>"></script>

		<!-- Footer Scripts
	============================================= -->
		<script src="<?php echo base_url('assets/user_template/js/functions.js') ?>"></script>
		<script src="<?php echo base_url('assets/user_template/js/swal/swal.js') ?>"></script>

		<script src="<?php echo base_url('assets/admin_template/bower_components/moment/min/moment.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin_template/bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
		<script src="<?php echo base_url('assets/admin_template/bower_components/number/jquery.number.min.js'); ?>"></script>

		<script>
			$('.daterange').daterangepicker({
				locale: {
					format: 'D/MM/YYYY'
				}
			})

			$('.formatNumbers').number(true, 0, ',', '.');
			$('b.formatNumbers').number(true, 0, ',', '.');
			(function() {
				const cart = "<?php echo $this->session->flashdata('info_cart');  ?>";
				const order = "<?php echo $this->session->flashdata('info_order');  ?>";
				const err = "<?php echo $this->session->flashdata('error');  ?>";
				// console.log(show, "lol")
				if (err) {
					Swal.fire({
						icon: 'error',
						title: 'Oops...',
						text: 'Something went wrong!',
						footer: '<a href="https://api.whatsapp.com/send?phone=<?=$admin->phone?>" target="_blank">Please contact administrator for this issue</a>'
					})
				} else if (cart) {

					Swal.fire({
						title: '<strong>Succes</strong>',
						icon: 'info',
						html: 'Your Product Has Added to Cart',
						showCloseButton: true,
						showCancelButton: true,
						focusConfirm: false,
						confirmButtonText: '<i class="icon-shopping-cart"></i> Check Your Cart',
						cancelButtonText: '<i class=""></i> Continue',
					}).then((result) => {
						if (result.value) {
							return window.location = "<?= base_url('index/cart') ?>";
						}
					})
				} else if (order) {
					Swal.fire({
						title: '<strong>Succes</strong>',
						icon: 'info',
						html: 'Please Complete Your Payment Process',
						showCloseButton: true,
						showCancelButton: true,
						focusConfirm: false,
						confirmButtonText: '<i class="icon-clipboard"></i> Check Your Order',
						cancelButtonText: '<i class=""></i> Continue',
					}).then((result) => {
						if (result.value) {
							return window.location = "<?= base_url('index/order_on_process') ?>";
						}
					})
				}
			})();

			function countPrice() {
				const harga = $('#harga_sewa').text().split('.').join('');
				const crew = $('#crew_sewa').text().split('.').join('');
				const qty = $('#qty_sewa').val();
				let date = $('#tgl_sewa').val().split(" - ");
				let total_days = moment.duration(moment(date[1], "DD-MM-YYYY").diff(moment(date[0], "DD-MM-YYYY"))).asDays() + 1;
				let sum_crew = (Number(crew) * qty) * total_days;
				let sum_prod = (Number(harga) * qty) * (total_days >= 7 ? total_days - 3 : total_days);
				$('#total_price').text(sum_prod + sum_crew).number(true, 0, ',', '.')
				$('#total_price_h').val(sum_prod + sum_crew)
				// console.log(sum_prod);
				return false;
			}

			// $("#top_selectall").click(() => $("input[type='checkbox']").prop("checked", $("#top_selectall").prop("checked")))
			$("#bot_selectall").click(() => $("input[type='checkbox']").prop("checked", $("#bot_selectall").prop("checked")))
			function unCheck(e){
				// console.log(e, "event")
				$("#bot_selectall").prop('checked', false);
			}

			// let offers = null;
			const offers = "<?php echo $this->session->flashdata('submit_offers') ?>";

			// console.log(offers, "kkk")
			if (offers) {
				Swal.fire({
					title: '<strong>Succes</strong>',
					icon: 'info',
					html: 'Your Offer Already Send to Admin <br> Please Send Message to Admin for Fast Response',
					showCloseButton: true,
					showCancelButton: true,
					focusConfirm: false,
					confirmButtonText: '<i class=""></i> Send Message',
					cancelButtonText: '<i class=""></i> No thanks',
				}).then((result) => {
					if (result.value) {
						let msg = "Saya ingin mengajukan penawaran untuk id Order " + offers.split(" ").join("%20")
						console.log(msg)
						return window.open("https://api.whatsapp.com/send?phone=<?=$admin->phone?>&text=" + msg, "_blank");
					}
				})
			}





			$(function() {
				$('.uploadModal').on('click', function() {
					const output = document.getElementById('output');
					output.src = "null";
					output.style.visibility = 'hidden';
					$('#id_orders').val(null);
					$('#payment_picture').val(null);
					$('#uploadModal').modal('show');
					$('#id_orders').val(this.value);
				})
			})
		</script>
		</body>

		</html>