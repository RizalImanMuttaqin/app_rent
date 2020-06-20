<!-- Content
		============================================= -->
<!-- <img src=""> -->
<section id="page-title" class="page-title-left" style="background-image: url('<?php echo base_url('assets/user_template/images/bgtittle.jpg'); ?>'); background-attachment: fixed;">

    <div class="container clearfix">
        <h1 style="color: white; text-shadow: 2px 2px 5px black;"><i class="icon-shopping-cart"></i> Cart</h1>
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

                <!-- <div class="col-md-12">
							<h3><i class="icon-shopping-cart"></i> Cart</h3>
						</div> -->
                <!-- .entry-title end -->
                <div class="col-md-12" style="overflow: scroll;">
                    <form method="POST" action="<?=base_url("index/checkout")?>">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>
                                    <!-- <input checked type="checkbox" id="top_selectall"> -->
                                </td>
                                <td></td>
                                <td>Product</td>
                                <td>Rental Price / Day</td>
                                <td>Qty</td>
                                <td>Rental Date</td>
                                <td>Total Price</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cart as $key => $value) : ?>
                                <tr>
                                    <td>
                                        <!-- <input type="checkbox" onclick="unCheck(this)" class="selecteditem" value="1" checked name="ischecked[<?=$value->id_cart?>]"> -->
                                    </td>
                                    <td style="width: 10%;">
                                        <a href="<?php echo base_url('assets/upload/' . $value->foto); ?>" data-lightbox="image"><img class="image_fade" src="<?php echo base_url('assets/upload/' . $value->foto); ?>"></a>
                                    </td>
                                    <td style="width: 20%;"><b><?= $value->judul ?></b></td>
                                    <td style="width: 20%;">
                                        Product&emsp;: <p style="margin-bottom: 5px;">Rp. <b class="formatNumbers harga_sewa"><?= $value->harga_sewa ?></b></p>
                                        Crew &emsp;&emsp;: <p>Rp. <b class="formatNumbers crew_sewa"><?= $value->harga_sewa_crew ?></b></p>
                                    </td>
                                    <td style="width: 15%;">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend" style="height: 30px;">
                                                <!-- <span class="input-group-text">-</span> -->
                                            </div>
                                            <input type="text" name="qty[<?=$value->id_cart?>]" value="<?= $value->qty ?>" class="form-control qty_i" style="height: 30px; width: 55px; flex: none; text-align: center;" onchange="(()=>{
														if(this.value > <?= $value->stock ?>){
															this.value = <?= $value->stock ?>;
														}
														// countCart();
														return false;
													})();">
                                            <div class="input-group-append" style="height: 30px;">
                                                <!-- <span class="input-group-text">+</span> -->
                                            </div>
                                        </div>
                                        <small>Available <b class="formatNumbers"><?= $value->stock ?></b></small>

                                    </td>
                                    <td style="width: 20%;">
                                        <input type="text" name="tgl_sewa[<?=$value->id_cart?>]" class="tgl_sewa daterange form-control" value="<?= date('d/m/Y', strtotime($value->order_start_date)) . " - " . date('d/m/Y', strtotime($value->order_end_date)) ?>" style="flex: none; width: 210px; height: 30px;">
                                    </td>
                                    <td style="width: 15%;">
                                        Rp. <b class="formatNumbers total_price"><?= $value->total_price ?> </b>
                                        <br>
                                        <input type="hidden" name="total_price[<?=$value->id_cart?>]" value="<?= $value->total_price ?>" class="total_price_i">
                                        <input type="hidden" name="id_cart[<?=$value->id_cart?>]" value="<?=$value->id_cart?>">
                                    </td>
                                    <td style="width: 5%;">
                                        <a href="<?= base_url('index/delete_cart/' . $value->id_cart); ?>" class="btn btn-danger form-control">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>
                                    <!-- <input checked type="checkbox" id="bot_selectall"> -->
                                </td>
                                <td colspan="4">
                                    <h4>Sub Total Price :</h4>
                                </td>
                                <td style="text-align: right; font-size: 17px;">Rp.</td>
                                <td style="text-align: right; font-size: 17px;"><b id="subtotal" class="formatNumbers"><?= $sub_total ?></b>
                                    <!-- <input type="hidden" name="subtotal" class="subtotal_i" value="<?= $sub_total ?>"> -->
                                </td>
                                <td><button type="submit" class="btn btn-info form-control">Checkout</button></td>
                            </tr>
                        </tfoot>
                    </table>
                    </form>
                </div>

            </div><!-- .postcontent end -->
        </div>

    </div>

</section><!-- #content end -->