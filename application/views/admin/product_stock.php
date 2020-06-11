<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Product Stock
        </h1>
        <div style="padding-top: 10px">
            <?php echo $this->session->flashdata('info'); ?>
        </div>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="">Product</li>
            <li class="active">Product Stock</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                    <div class="box-body">
                        <div class="col-md-12" style="padding-bottom: 20px;">
                            <form method="GET">
                                <div class="col-md-2">
                                    <h4>Date of Stock :</h4>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control datepicker" name="date" value="<?=$this->input->get('date')?$this->input->get('date'):date('d-m-Y') ?>" type="text" style="font-size: 17px; text-align: center;">
                                </div>
                                <div class="col-md-2">
                                    <button class="form-control btn btn-info" type="submit">Show</button>
                                </div>
                            </form>
                        </div>
                        <!-- //disini -->
                        <div class="box-body">
                            <table id="example" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Product Categori</th>
                                        <th>Stock Total</th>
                                        <th>Stock Used</th>
                                        <th>Stock Available</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($products as $key => $value) : ?>
                                        <tr>
                                            <td><?= $value->judul ?></td>
                                            <td><?= $value->nama_kategori ?></td>
                                            <td><?= $value->stock ?></td>
                                            <td><?= $value->used ?></td>
                                            <td><?= $value->available ?></td>
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