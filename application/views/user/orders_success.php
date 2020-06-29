<!-- Content
		============================================= -->
<!-- <img src=""> -->
<section id="page-title" class="page-title-left" style="background-image: url('<?php echo base_url('assets/user_template/images/bgtittle.jpg'); ?>'); background-attachment: fixed;">

    <div class="container clearfix">
        <h1 style="color: white; text-shadow: 2px 2px 5px black;"><i class="icon-clipboard"></i> Order</h1>
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
                    <h3><i class="icon-ok"></i> Order Success</h3>
                    <!-- <p>Lakukan pembayaran menggunakan bla . . . . . . </p> -->
                </div>
                <!-- .entry-title end -->
                <?php if (!$orders) : ?>
                    <div class="col-md-12" style="overflow: scroll;">
                        <div class="card">
                            <br>
                            <h4 style="padding-left:45%">Order Data Empty</h4>
                        </div>
                    </div>
                <?php endif; ?>
                <?php
                // $orders = [1,2];
                foreach ($orders as $key => $value) : ?>
                    <div class="col-md-12" style="overflow: scroll;">
                        <div class="accordion">
                            <div class="card">
                                <div class="card-header ml-0 headingOne">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <h4>Order : <small><?= $value->order_code ?></small></h4>
                                            <button class="btn btn-link btn-sm" data-toggle="collapse" data-target="#collapseOne<?= $value->id_order ?>" aria-expanded="true" aria-controls="#collapseOne<?= $value->id_order ?>">
                                                Click to view products
                                            </button>
                                        </div>
                                        <div class="col-md-2">Date Order : <br><b><?= date("d-m-Y h:i:s", strtotime($value->date_created)) ?></b></div>
                                        <div class="col-md-3">Status : <b>
                                                <?php
                                                $st = $value->status;
                                                if ($st == '1') echo "Waiting Payment";
                                                elseif ($st == '2') echo "Submits Offers";
                                                elseif ($st == '3') echo "Admin Offers";
                                                elseif ($st == '4') echo "Checking Payment";
                                                elseif ($st == '5') echo "Order Success";
                                                elseif ($st == '6') echo "Order Finish";
                                                elseif ($st == '0') echo "Order Canceled";
                                                ?>
                                            </b></div>
                                        <div class="col-md-3">
                                            <ul class="list-unstyled">
                                                <li><span style="padding-right: 10%;">Total (Rp)</span> <b style="float: right;" class="formatNumbers"><?= $value->total_harga ?></b>
                                                </li>
                                                <li>
                                                    <span style="padding-right: 10%;">Admin Offers (Rp)</span> <b style="float: right; color: green;" class="formatNumbers"><?= ($value->potongan_harga) ?></b>
                                                </li>
                                                <li>
                                                    <span style="padding-right: 10%;">Discount (Rp)</span>
                                                    <b style="float: right; color: red;" class="formatNumbers"><?= $value->potongan_harga ? $value->total_harga - $value->potongan_harga : "" ?></b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2 pull-right">
                                            <?php if ($value->bukti_tf) : ?>
                                                <a class="btn btn-sm btn-default col-md-12" href="<?php echo base_url('assets/upload/payment/' . $value->bukti_tf); ?>" data-lightbox="image"><small>View Payment Slip</small></a>
                                            <?php endif; ?>
                                            <br><br>
                                            <a href="<?=base_url('index/invoice/'. $value->order_code)?>" class="btn btn-sm btn-success col-md-12" target="_blank" style="color: white !important;"><small>Print Invoice</small></a>
                                        </div>
                                    </div>
                                </div>

                                <div id="collapseOne<?= $value->id_order ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body" style="overflow: scroll;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>
                                                    </td>
                                                    <td>Product</td>
                                                    <td>Rental Price / Day</td>
                                                    <td>Qty</td>
                                                    <td>Rental Date</td>
                                                    <!-- <td>Total Price</td> -->
                                                    <td>Total Price / Admin Offers</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $products = $this->MyQuery->getProductOrder($value->id_order);
                                                // print_r($products);
                                                foreach ($products as $product) :
                                                ?>
                                                    <tr>
                                                        <td style="width: 10%;">
                                                            <a href="<?php echo base_url('assets/upload/' . $product->foto); ?>" data-lightbox="image"><img class="image_fade" src="<?php echo base_url('assets/upload/' . $product->foto); ?>"></a>
                                                        </td>
                                                        <td style="width: 20%;"><b><?= $product->judul ?></b></td>
                                                        <td style="width: 20%;">
                                                            Product&emsp;: <p style="margin-bottom: 5px;">Rp. <b class="formatNumbers"><?= $product->harga_sewa ?></b></p>
                                                            Crew &emsp;&emsp;: <p>Rp. <b class="formatNumbers"><?= $product->harga_sewa_crew ?></b></p>
                                                        </td>
                                                        <td style="width: 15%;">
                                                            <input type="text" readonly name="qty" value="<?= $product->qty ?>" class="form-control" style="height: 30px; width: 60px; flex: none; text-align: center;">
                                                        </td>
                                                        <td style="width: 20%;">
                                                            <input type="text" readonly value="<?= date('d/m/Y', strtotime($product->order_start_date)) . " - " . date('d/m/Y', strtotime($product->order_end_date)) ?>" class="form-control" style="flex: none; width: 210px; height: 30px;">
                                                        </td>
                                                        <td style="width: 15%;">
                                                            Rp. <b class="formatNumbers"><?= $product->total_price ?></b>
                                                            <br>
                                                            Rp. <b class="formatNumbers" style="color:green"><?= $product->offer_price ?></b>
                                                        </td>
                                                        <!-- <td style="width: 15%;">Rp. <b class="formatNumbers"><?= $product->total_price ?></b></td> -->
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6">
                                                            <span><b>Description</b></span>
                                                            <br>
                                                            <!-- <textarea  rows="7" class="form-control" style="width: 100%;"> -->
                                                            <?= $product->description ?>
                                                            <!-- </textarea> -->
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div><!-- .postcontent end -->
        </div>

    </div>

</section><!-- #content end -->