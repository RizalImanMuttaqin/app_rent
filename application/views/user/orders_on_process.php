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

<section>
  <!-- <section id="content"> -->

  <div class="content-wrap">

    <?php $this->load->view('_partials_user/_breaking_news'); ?>


    <div class="container clearfix">
      <div class="row nobottommargin clearfix">
        <div class="col-md-12">
          <?php echo $this->session->flashdata('info');  ?>
        </div>
        <div class="col-md-12">
          <h3><i class="icon-tags"></i> Order On Process</h3>
          <h4><?= $payment->judul ?></h4>
          <span style="line-height: 0;">
            <?php echo $payment->konten; ?>
          </span>
        </div>

        <?php if (!$orders) : ?>
          <div class="col-md-12" style="overflow: scroll;">
            <div class="card">
              <br>
              <h4 style="padding-left:45%">Order Data Empty</h4>
            </div>
          </div>
        <?php endif; ?>
        <!-- .entry-title end -->
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
                      <button type="button" value="<?= $value->id_order ?>" class="btn btn-sm btn-info col-md-12 uploadModal">Upload Payment Slip</button>

                      <?php if ($st == 1) :  ?>
                        <a href="<?= base_url('index/order_submit_offers/' . $value->id_order) ?>" class="btn btn-sm btn-success col-md-12 mt-2">Submit Offer</a>
                      <?php endif; ?>
                      <button type="button" onclick="cancelOrder('<?=$value->id_order?>')" class="btn btn-sm btn-danger col-md-12 mt-2">Cancel Order</button>
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



<!-- modal updload -->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <b style="font-size: 17px;">Upload Payment Slip</b>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
      </div>
      <div class="modal-body">
        <section class="content" id="">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-info">
                <div class="box-header">

                  <!-- tools box -->
                  <div class="pull-right box-tools">
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <form action="<?php echo base_url('index/upload_payment'); ?>" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                        <input type="hidden" id="id_orders" name="id_orders">
                        <input class="pull-right" id="payment_picture" type="file" accept="image/*" name="foto" onchange="loadFile(event)">
                        <div class="thumbnail" style="padding-top: 10px">
                          <img id="output" class="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
                    <div class="row">
                      <div class="col-md-12" style="padding-top: 10px;">
                        <button type="submit" class="btn btn-info">Upload</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col-->
          </div>
          <!-- ./row -->
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function() {
      const output = document.getElementById('output');
      output.src = reader.result;
      output.style.visibility = 'visible';
    };
    reader.readAsDataURL(event.target.files[0]);
  };

  function cancelOrder(id) {
    if (confirm('Are you sure to cancel this orders?')) {
      console.log(id)
       window.location.href = `<?= base_url('index/delete_order/${id}'); ?>`
    } else {
      return false;
    }
  }
</script>