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
                <form action="<?php echo base_url('admin/berita/addBerita');?>" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6">
                      <label> : </label>
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
                  <button type="submint" class="btn btn-primary pull-right">Simpan</button>
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
              <form class="form-inline" method="post" action="<?php echo base_url('admin/berita/addKategori')?>">
                <div class="form-group">
                  <label>Category : </label>
                  <input required="required" name="nama" type="text" class="form-control">
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
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($kategoris as $kategori) : ?>
                        <tr>
                          <td><?php echo $kategori->nama_kategori ?></td>
                          <td><button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit_modal_<?php echo $kategori->id_kategori ?>"><span class="fa fa-edit"></span> Ubah</button>
                          </td>
                        </tr>
                        <div class="modal fade" id="edit_modal_<?php echo $kategori->id_kategori ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit Product Category</h4>
                              </div>
                              <form method="post" action="<?php echo base_url('admin/berita/updateKategori/'.$kategori->id_kategori)?>">
                                <div class="modal-body">
                                  <input type="text" name="nama" class="form-control" value="<?php echo $kategori->nama_kategori ?>">
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
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Date Post</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($beritas as $berita) : ?>
                    <tr>
                      <input type="hidden" id="t_foto" value="<?php echo $berita->foto ?>">
                      <input type="hidden" id="t_id_berita" value="<?php echo $berita->id_berita ?>">
                      <td id="t_judul"><?php echo $berita->judul ?></td>
                      <td id="t_nama_kategori"><?php echo $berita->nama_kategori ?></td>
                      <td id="t_konten"><?php echo htmlspecialchars($berita->konten) ?></td>
                      <td>7.500.000</td>
                      <td>10</td>
                      <td><?php echo date('d-m-Y h:i:s', strtotime($berita->date_created)); ?></td>
                      <td><a href="<?php echo base_url('admin/berita/deleteBerita/'.$berita->id_berita);?>" title="Hapus" class="btn btn-danger confirmation"><span class="fa fa-trash"></span></a>
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
                      Ubah Product
                    </h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                      <form action="<?php echo base_url('admin/berita/updateBerita');?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-md-6">
                            <label>Add Product : </label>
                            <input type="hidden" id="id_berita" name="id_berita">
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