<!-- Content
		============================================= -->
<!-- <img src=""> -->
<section id="page-title" class="page-title-left"
    style="background-image: url('<?php echo base_url('assets/user_template/images/bgtittle.jpg'); ?>'); background-attachment: fixed;">

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

                <!-- <div class="col-md-12">
							<h3><i class="icon-shopping-cart"></i> Cart</h3>
						</div> -->
                <!-- .entry-title end -->
                <div class="col-md-12" style="overflow: scroll;">
                    <div class="accordion">
                        <div class="card">
                            <div class="card-header ml-0 headingOne">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h4>Order : ABB12371</h4>
                                        <button class="btn btn-link btn-sm" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Click to view products
                                        </button>
                                    </div>
                                    <div class="col-md-2">Date Order : <b>24-04-2020</b></div>
                                    <div class="col-md-3">Status : <b>Waiting Adjusment</b></div>
                                    <div class="col-md-3">
                                        <ul class="list-unstyled">
                                            <li><span style="padding-right: 10%;">Total (Rp)</span> <b
                                                    style="float: right;">7.000.0000</b></li>
                                            <li><span style="padding-right: 10%;">Discount (Rp)</span> <b
                                                    style="float: right; color: red;">100.0000</b></li>
                                            <li><span style="padding-right: 10%;">Total Ammount (Rp)</span> <b
                                                    style="float: right; color: green;">6.900.0000</b></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2 pull-right">
                                        <button type="button" class="btn btn-sm btn-info col-md-12">Upload Payment
                                            Slip</button>
                                        <button type="button" class="btn btn-sm btn-success col-md-12 mt-2"
                                            id="offer">Submit Offer</button>
                                        <!-- <button type="button" class="btn btn-sm btn-success col-md-12">Cancel Ordet</button> -->
                                    </div>
                                </div>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordion">
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
                                                <td>Total Price</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 10%;">
                                                    <a href="<?php echo base_url('assets/upload/1584293128product.jpg'); ?>"
                                                        data-lightbox="image"><img class="image_fade"
                                                            src="<?php echo base_url('assets/upload/1584293128product.jpg'); ?>"></a>
                                                </td>
                                                <td style="width: 20%;"><b>Camera</b></td>
                                                <td style="width: 20%;">
                                                    Product&emsp;: <p style="margin-bottom: 5px;">Rp. 7.050.000</p>
                                                    Crew &emsp;&emsp;: <p>Rp. 100.000</p>
                                                </td>
                                                <td style="width: 15%;">
                                                    <input type="text" readonly name="qty" value="5"
                                                        class="form-control"
                                                        style="height: 30px; width: 60px; flex: none; text-align: center;">
                                                </td>
                                                <td style="width: 20%;">
                                                    <input type="text" readonly value="03/29/2020 - 03/29/2020"
                                                        class="form-control"
                                                        style="flex: none; width: 210px; height: 30px;">
                                                </td>
                                                <td style="width: 15%;">Rp. 10.000.000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- .postcontent end -->
        </div>

    </div>

</section><!-- #content end -->