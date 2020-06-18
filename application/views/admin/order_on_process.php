<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Order on Process
    </h1>
    <div style="padding-top: 10px">
      <?php echo $this->session->flashdata('info'); ?>
    </div>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="">Transaction</li>
      <li class="active">Order on Process</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <!-- /.box -->
        <div class="box">
          <div class="box-body">
            <!-- //disini -->
            <div class="box-body">
              <table id="example" class="table table-bordered">
                <thead>
                  <tr>
                    <th>Account Detail</th>
                    <th>Orders Detail</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($orders as $key => $value) : ?>
                    <tr>
                      <td>
                        <p><?= $value->name ?></p>
                        <p onclick="chatWa('Mengenai No Order <?= $value->order_code ?>', '<?= $value->phone ?>')"><?= $value->phone ?></p>
                        <p><?= $value->email ?></p>
                      </td>
                      <td>
                        <div class="col-md-12" style="overflow: scroll;">
                          <div class="accordion">
                            <div class="card">
                              <div class="card-header ml-0 headingOne">
                                <div class="row">
                                  <div class="col-md-3">
                                    <h4>No Order : <br><small><?= $value->order_code ?></small></h4>
                                    <button class="btn btn-link btn-sm" data-toggle="collapse" data-target="#collapseOne<?= $value->id_order ?>" aria-expanded="true" aria-controls="#collapseOne<?= $value->id_order ?>">
                                      Click to view products
                                    </button>
                                  </div>
                                  <div class="col-md-2">Date Order : <br><b><?= date("d-m-Y h:i:s", strtotime($value->date_created)) ?></b></div>
                                  <div class="col-md-3">Status : <b>
                                      <?php
                                      $st = $value->status;
                                      if ($st == '1') echo "Waiting Payment";
                                      elseif ($st == '2') echo "User Offers";
                                      elseif ($st == '3') echo "Admin Offers";
                                      elseif ($st == '4') echo "Checking Payment";
                                      elseif ($st == '5') echo "Order Success";
                                      elseif ($st == '6') echo "Order Finish";
                                      elseif ($st == '0') echo "Order Rejected";
                                      ?>
                                    </b></div>
                                  <div class="col-md-4">
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
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapseOne<?= $value->id_order ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body" style="overflow: scroll;">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <td>ID</td>
                                    <td>Product</td>
                                    <td>Rental Price / Day</td>
                                    <td>Qty</td>
                                    <td>Rental Date</td>
                                    <td>Total Price / Admin Offers</td>
                                    <!-- <td>Discount</td> -->
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $products = $this->MyQuery->getProductOrder($value->id_order);
                                  // print_r($products);
                                  foreach ($products as $product) :
                                  ?>
                                    <tr>
                                      <td style="width: 5%;">
                                        <b><?= $product->id_product ?></b>
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
                                      <!-- <td><input  type="text"></td> -->
                                    </tr>
                                    <tr>
                                      <td colspan="6">
                                        <span><b>Description</b></span>
                                        <br>
                                        <!-- <textarea  rows="7" class="form-control" style="width: 100%;"> -->
                                        <?=$product->description?>
                                        <!-- </textarea> -->
                                      </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <?php if ($st == 4) : ?>
                          <a href="<?= base_url('assets/upload/payment/' . $value->bukti_tf) ?>" target="_blank" class="btn btn-sm btn-default col-md-12"><small>View Payment Slip</small></a>
                          <br><br>
                        <?php endif; ?>
                        <a href="<?= base_url('admin/transaction/update_confirm/' . $value->id_order); ?>" class="btn btn-sm btn-info col-md-12" onclick="return confirm('Are you sure want to confirm this order?')">Confirm Payment</a>
                        <br><br>
                        <a href="<?= base_url('admin/transaction/update_reject/' . $value->id_order); ?>" class="btn btn-sm btn-danger col-md-12" onclick="return confirm('Are you sure want to reject this order?')">Reject Order</a>
                      </td>
                    </tr>

                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>