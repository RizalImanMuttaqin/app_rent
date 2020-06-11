<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Product Schedule
        </h1>
        <div style="padding-top: 10px">
            <?php echo $this->session->flashdata('info'); ?>
        </div>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="">Product</li>
            <li class="active">Product Schedule</li>
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
                                        <th>Account</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $key => $value) : ?>
                                        <tr>
                                            <td><?= $value->name ?></td>
                                            <td><?= $value->email ?></td>
                                            <td><?= $value->phone ?></td>
                                            <td><?= $value->address ?></td>
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