
		<style>
		.pagination {
			display: inline-block;
		}

		.pagination a {
			color: black;
			float: left;
			padding: 8px 16px;
			text-decoration: none;
			transition: background-color .3s;
			border: 1px solid #ddd;
		}

		.pagination a.active {
			background-color: #4CAF50;
			color: white;
			border: 1px solid #4CAF50;
		}

		.pagination a:hover:not(.active) {background-color: #ddd;}
		</style>
		<!-- Content
		============================================= -->
		<section id="page-title" class="page-title-left" style="background-image: url('<?php echo base_url('assets/user_template/images/bgtittle.jpg'); ?>'); background-attachment: fixed;">

			<div class="container clearfix">
				<h1 style="color: white; text-shadow: 2px 2px 5px black;"><b><?php echo ucfirst($this->uri->segment(1)); ?> DESA</b></h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#"><b style="color: white">Home</b></a></li>
					<li class="breadcrumb-item active" aria-current="page"><b style="color: #DFDFDFDF"><?php echo ucfirst($this->uri->segment(1)); ?> Desa</b></li>
				</ol>
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="heading-block center">
						<h1><?php echo ucfirst($this->uri->segment(1)); ?> DESA</h1>
					</div>

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix">

						<!-- Posts
						============================================= -->
						<div id="posts" class="small-thumbs">

							<?php foreach ($data as $n_data) : ?>
							<div class="entry clearfix">
								<div class="entry-image">
									<a href="<?php echo base_url('assets/upload/'.$n_data->foto); ?>" data-lightbox="image"><img class="image_fade" src="<?php echo base_url('assets/upload/'.$n_data->foto); ?>" alt="Standard Post with Image"></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="<?php echo base_url('index/detail_kegiatan/'.$n_data->$id) ?>"><?php echo $n_data->judul; ?></a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i><?php echo date('d-m-Y', strtotime($n_data->date_created)); ?></li>
										<li><i class="icon-folder-open"></i> <a href="#">Kegiatan</a></li>
									</ul>
									<div class="entry-content">
										<?php echo $n_data->konten; ?>
										<a href="<?php echo base_url('index/detail_kegiatan/'.$n_data->$id) ?>"class="more-link">Read More</a>
									</div>
								</div>
							</div>
							<?php endforeach; ?>

						</div><!-- #posts end -->

						<!-- Pagination
						============================================= -->
						<div class="row mb-3">
							<div class="col-12">
								<?php
								if ($this->uri->segment(1) != 'berita') {
									echo $this->pagination->create_links();
								} 
								?>
							</div>
						</div>
						<!-- .pager end -->

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin col_last clearfix">

					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->

