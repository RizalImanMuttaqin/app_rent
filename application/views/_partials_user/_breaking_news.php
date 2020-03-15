<div class="section header-stick clearfix" style="padding: 20px 0;">
	<div class="container clearfix">
		<span class="badge badge-danger bnews-title">New Arrival:</span>

		<div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
			<div class="flexslider">
				<div class="slider-wrap">
					<?php foreach ($newss as $news) : ?>
						<div class="slide"><a href="<?php echo base_url('index/detail_product/'.$news->id_product);?>"><strong><?php echo $news->judul; ?></strong></a></div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>