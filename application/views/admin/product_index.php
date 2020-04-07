  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product
      </h1>
      <div style="padding-top: 10px">
        <?php echo $this->session->flashdata('info'); ?>
      </div>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li><a href="#">Tables</a></li> -->
        <li class="active">Product</li>
      </ol>
    </section>

    <section class="content collapse" id="tambah_berita">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">
                Add Product
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm"  data-toggle="collapse" data-target="#tambah_berita" title="">
                  <i class="fa fa-times"></i></button>

                </div>
                <!-- /. tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body pad">
                <form action="<?php echo base_url('admin/product/addProduct');?>" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Product Name : </label>
                      <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label>Product Category : </label>
                      <select id="" name="id_kategori" class="form-control select2" style="width: 100%;">
                        <?php foreach ($kategoris as $kategori) : ?>
                          <option value="<?php echo $kategori->id_kategori; ?>"><?php echo $kategori->nama_kategori; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="col-md-5" style="padding-top: 10px;">
                      <label>Rental Price / Day (IDR) : </label>
                      <input type="text" name="harga_sewa" class="form-control formatNumbers">
                    </div>
                    <div class="col-md-5" style="padding-top: 10px;">
                      <label>Crew Fee / Day (IDR) : </label>
                      <input type="text" name="harga_sewa_crew" class="form-control formatNumbers">
                    </div>
                    <div class="col-md-2" style="padding-top: 10px;">
                      <label>Product Stock : </label>
                      <input type="text" name="stock" class="form-control formatNumbers">
                    </div>
                  </div>
                  <div class="row" style="padding-top: 30px; padding-bottom: 30px">

                    <!-- <div class="col-md-6"><label></label></div> -->
                    <div class="col-md-2">
                      <div class="thumbnail">
                      <a href="#">
                        <img src="#" id="imgPre" >
                      </a>
                    </div>
                  </div>
                  <div class="col-md-10">
                    <input id="imgInp" class="pull-right" type="file" name="foto">
                  </div>
                </div>
                <div class="col-md-12">
                  <textarea class="ckeditor" name="konten" rows="15" cols="80">
                  </textarea>
                </div>
                <div class="col-md-12" style="padding-top: 30px">
                  <button type="submint" class="btn btn-primary pull-right">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h5>Add Product Category</h5>
              <form class="form-inline" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/product/addKategori')?>">
                <div class="form-group" style="padding-right: 20px;">
                  <label>Category : </label>
                  <input required="required" name="nama" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                  <label>Category Image : </label>
                  <input id="imgInp" class="pull-right" type="file" name="foto">
                </div>
                <div class="form-group pull-right">
                  <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#tambah_kategori" aria-expanded="false" aria-controls=""><span class="fa fa-eye"></span> View Category</button>
                </div>
                <div class="form-group pull-right" style="padding-right: 30px">
                  <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Add Category</button>
                </div>
              </form>
              <div class="collapse" id="tambah_kategori" style="padding-top: 20px">
                <div class="well">
                  <h5>Product Category</h5>
                  <table  class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width: 80%">Category Product</th>
                        <th colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($kategoris as $kategori) : ?>
                        <tr>
                          <td><?php echo $kategori->nama_kategori ?></td>
                          <td><button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit_modal_<?php echo $kategori->id_kategori ?>"><span class="fa fa-edit"></span> Edit</button>
                            <td><a href="<?php echo base_url('admin/product/deleteKategori/'.$kategori->id_kategori);?>" title="Delete" class="btn btn-danger btn-xs confirmation"><span class="fa fa-trash">Delete</span></a>
                            </td>
                          </td>
                        </tr>
                        <div class="modal fade" id="edit_modal_<?php echo $kategori->id_kategori ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit Product Category</h4>
                              </div>
                              <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/product/updateKategori/'.$kategori->id_kategori)?>">
                                <div class="modal-body">
                                  <label>Category :</label>
                                  <input type="text" name="nama" class="form-control" value="<?php echo $kategori->nama_kategori ?>">
                                  <br>
                                  <div class="col-md-12" style="padding: 0px 10px, 0px 10px;">
                                    <div class="thumbnail">
                                      <img id="m_foto_"  src="<?php echo base_url('assets/upload/'. $kategori->image) ?>" class="">
                                    </div>
                                  </div>
                                  <br>
                                  <label>Update Image</label>
                                  <input id="imgInp" class="" type="file" name="foto">
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <!-- <div class="clearfix"></div> -->
            <div class="box-body">
              <button style="margin-bottom: 20px; margin-top: 15px" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#tambah_berita" aria-expanded="false" aria-controls=""><span class="fa fa-plus"></span> Add Product</button>
              <table id="example" class="table table-bordered table-striped" ">
                <thead>
                  <tr>
                    <th>Product Title</th>
                    <th>Category</th>
                    <th style="width: 40%">Content</th>
                    <th>Rental Price</th>
                    <th>Crew Fee</th>
                    <th>Stock</th>
                    <th>Date Post</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($beritas as $berita) : ?>
                    <tr>
                      <input type="hidden" id="t_foto" value="<?php echo $berita->foto ?>">
                      <input type="hidden" id="t_id_product" value="<?php echo $berita->id_product ?>">
                      <td id="t_judul"><?php echo $berita->judul ?></td>
                      <td id="t_nama_kategori"><?php echo $berita->nama_kategori ?></td>
                      <td id="t_konten"><?php echo htmlspecialchars($berita->konten) ?></td>
                      <td>Rp. <?=number_format($berita->harga_sewa, 0,",",".")?></td>
                      <td>Rp. <?=number_format($berita->harga_sewa_crew, 0,",",".")?></td>
                      <td><?=number_format($berita->stock, 0,",",".")?></td>
                      <td><?php echo date('d-m-Y h:i:s', strtotime($berita->date_created)); ?></td>
                      <td><a href="<?php echo base_url('admin/product/deleteProduct/'.$berita->id_product);?>" title="Hapus" class="btn btn-danger confirmation"><span class="fa fa-trash"></span></a>
                        <a title="Edit Berita" class="btn btn-warning editModal">
                          <span class="fa fa-edit"></span>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
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


<!-- EDIT PRODUCT -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
        </div>
        <div class="modal-body">
          <section class="content" id="">
            <div class="row">
              <div class="col-md-12">
                <div class="box box-info">
                  <div class="box-header">
                    <h3 class="box-title">
                      Edit Product
                    </h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                      <form action="<?php echo base_url('admin/product/updateProduct');?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-md-6">
                            <label>Product Name : </label>
                            <input type="hidden" id="id_product" value="<?=$berita->id_product?>" name="id_product">
                            <input type="text" id="judul" name="judul" class="form-control">
                          </div>
                          <div class="col-md-6">
                            <label>Product Category : </label>
                            <select id="id_kategori" name="id_kategori" class="form-control select2" style="width: 100%;">
                              <?php foreach ($kategoris as $kategori) : ?>
                                <option value="<?php echo $kategori->id_kategori; ?>"><?php echo $kategori->nama_kategori; ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                          <div class="col-md-5" style="padding-top: 10px;">
                            <label>Rental Price / Day (IDR) : </label>
                            <input type="text" name="harga_sewa" value='<?=number_format($berita->harga_sewa, 0,",",".")?>' class="form-control formatNumbers">
                          </div>
                          <div class="col-md-5" style="padding-top: 10px;">
                            <label>Crew Fee / Day (IDR) : </label>
                            <input type="text" name="harga_sewa_crew" value='<?=number_format($berita->harga_sewa, 0,",",".")?>' class="form-control formatNumbers">
                          </div>
                          <div class="col-md-2" style="padding-top: 10px;">
                            <label>Product Stock : </label>
                            <input type="text" value='<?=number_format($berita->stock, 0,",",".")?>' name="stock" class="form-control formatNumbers">
                          </div>
                        </div>
                        <div class="row" style="padding-top: 30px; padding-bottom: 30px">

                          <!-- <div class="col-md-6"><label></label></div> -->
                          <div class="col-md-2">
                            <div class="thumbnail">
                              <img id="m_foto"  class="">
                            </div>
                          </div>
                  <div class="col-md-10">
                    <input class="pull-right" type="file" name="foto">
                  </div>
                </div>
                <div class="col-md-12">
                  <textarea id="ckeditor_edit" name="konten" rows="15" cols="80">
                  </textarea>
                </div>
                <div class="col-md-12" style="padding-top: 30px">
                  <button type="submint" class="btn btn-primary pull-right">Save Changes</button>
                </div>
              </form>
            </div>
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
