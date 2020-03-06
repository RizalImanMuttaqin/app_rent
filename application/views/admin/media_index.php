
<link rel="stylesheet" href="<?php echo base_url('assets/user_template/custom_style.css'); ?>" type="text/css" />

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Media
    </h1>
    <div style="padding-top: 10px">
      <?php echo $this->session->flashdata('info'); ?>
    </div>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Data tables</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <!-- /.box -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">
              Tambah Gambar Slide Show
            </h3>
          </div>
          <!-- /.box-header -->
          <!-- <div class="clearfix"></div> -->
          <div class="box-body">
            <form action="<?php echo base_url('admin/media/addSlide');?>" class="" method="post" enctype="multipart/form-data" style="padding-bottom: 30px">
              <div class="row">
                <div class="col-md-3">
                  <label>Judul : </label>
                  <input name="judul" class="form-control" >
                </div>
                <div class="col-md-3">
                  <label>Keterangan : </label>
                  <textarea name="keterangan" class="form-control" rows="3"></textarea>
                </div>
                <!-- <div class="col-md-6"><label></label></div> -->
                <div class="col-md-3" style="padding-top: 30px">
                  <!-- <label>Masukan Gambar : </label> -->
                  <input class="pull-right" type="file" required="required" name="foto">
                </div>
                <div class="col-md-3" style="padding-top: 30px">
                  <button type="submint" class="btn btn-primary pull-left">Tambah</button>
                </div>
              </div>
            </form>

            <div class="row">
              <?php foreach ($sliders as $slide) : ?>
                <div class="col-md-3">
                  <div class="thumbnail">
                    <a href="<?php echo base_url('assets/upload/'.$slide->filename) ?>" target="_blank">
                      <img src="<?php echo base_url('assets/upload/'.$slide->filename) ?>" alt="Lights" style="width:100%">
                      <div class="caption">
                        <b><?php echo $slide->judul; ?></b><br>
                        <?php echo $slide->keterangan; ?>
                      </div>
                      <a href="<?php echo base_url('admin/media/deleteMedia/'.$slide->id_media);?>" title="Hapus" class="btn btn-danger btn-xs confirmation"><span class="fa fa-trash"></span></a>
                    </a>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
             <!--  <table id="example" class="table table-bordered table-striped" ">
                <thead>
                  <tr>
                    <th style="width: 20%">gambar</th>
                    <th>Keterangan Gambar</th>
                    <th>Waktu Posting</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($medias as $media) : ?>
                    <tr>
                      <td id="t_konten">
                        <div class="thumbnail">
                          <img id="m_foto" src="<?php echo base_url('assets/upload/1gambar.jpg') ?>" class="1gambar.jpg">
                        </div>
                      </td>
                      <td id="t_judul"><?php echo $media->keterangan ?></td>
                      <td><?php echo date('d-m-Y h:i:s', strtotime($media->date_created)); ?></td>
                      <td><a href="<?php echo base_url('admin/media/deleteArtikel/'.$media->id_media);?>" title="Hapus" class="btn btn-danger confirmation"><span class="fa fa-trash"></span></a>
                        <a title="Edit Artikel" class="btn btn-warning editModal">
                          <span class="fa fa-edit"></span>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach;?>
                </tbody>
              </table> -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                Tambah File Anggaran
              </h3>
            </div>
            <!-- /.box-header -->
            <!-- <div class="clearfix"></div> -->
            <div class="box-body">
              <form action="<?php echo base_url('admin/media/addAnggaran');?>" class="" method="post" enctype="multipart/form-data" style="padding-bottom: 30px">
                <div class="row">
                  <div class="col-md-4">
                    <label>Keterangan : </label>
                    <textarea name="keterangan" class="form-control" rows="3"></textarea>
                  </div>
                  <!-- <div class="col-md-6"><label></label></div> -->
                  <div class="col-md-4" style="padding-top: 30px">
                    <!-- <label>Masukan Gambar : </label> -->
                    <input class="pull-right" type="file" required="required" name="foto">
                  </div>
                  <div class="col-md-3" style="padding-top: 30px">
                    <button type="submint" class="btn btn-primary pull-left">Tambah</button>
                  </div>
                </div>
              </form>

              <table id="example" class="table table-bordered table-striped" ">
                <thead>
                  <tr>
                    <!-- <th style="width: 20%">gambar</th> -->
                    <th>File</th>
                    <th>Keterangan</th>
                    <th>Tanggal Upload</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($anggarans as $anggaran) : ?>
                    <tr>
                      <td>
                        <a href="<?php echo base_url('admin/media/download/'.$anggaran->filename)?>">
                          <?php echo $anggaran->filename; ?>
                        </a>
                      </td>
                      <td id="t_keterangan"><?php echo $anggaran->keterangan ?></td>
                      <td><?php echo date('d-m-Y h:i:s', strtotime($anggaran->date_created)); ?></td>
                      <!-- <input id="tb_id_media" value="<?php echo $anggaran->id_media ?>"> -->
                      <input type="hidden" id="t_id_media" value="<?php echo $anggaran->id_media ?>">

                      <td><a href="<?php echo base_url('admin/media/deleteMedia/'.$anggaran->id_media);?>" title="Hapus" class="btn btn-danger confirmation"><span class="fa fa-trash"></span></a>
                        <a title="Edit Artikel" class="btn btn-warning editModal">
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

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                Tambah Foto Galeri
              </h3>
            </div>
            <!-- /.box-header -->
            <!-- <div class="clearfix"></div> -->
            <div class="box-body">
              <form action="<?php echo base_url('admin/media/addGaleri');?>" class="" method="post" enctype="multipart/form-data" style="padding-bottom: 30px">
                <div class="row">
                  <div class="col-md-3">
                    <label>Judul : </label>
                    <input name="judul" class="form-control" >
                  </div>
                  <div class="col-md-4">
                    <label>Keterangan : </label>
                    <textarea name="keterangan" class="form-control" rows="3"></textarea>
                  </div>
                  <div class="col-md-3">
                    <label>Kategori Foto : </label>
                    <select class="form-control" name="kategori_foto">
                      <option >Makanan Khas</option>
                      <option >Kesenian</option>
                      <option >Tradisional</option>
                      <option >Produk Lokal</option>
                    </select>
                  </div>
                  <!-- <div class="col-md-6"><label></label></div> -->
                  <div class="col-md-3" style="padding-top: 30px">
                    <!-- <label>Masukan Gambar : </label> -->
                    <input class="pull-right" type="file" required="required" name="foto">
                  </div>
                  <div class="col-md-2" style="padding-top: 30px">
                    <button type="submint" class="btn btn-primary pull-left">Tambah</button>
                  </div>
                </div>
              </form>

              <div class="row">
                <ul style="margin-left: 15px" id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

                          <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
                          <?php foreach ($kategoris as $kategori) : ?>
                            <li><a href="#" data-filter=".pf-<?php echo str_replace(' ', '_', $kategori->kategori_foto); ?>"><?php echo $kategori->kategori_foto; ?></a></li>
                          <?php endforeach; ?>
                          

                        </ul><!-- #portfolio-filter end -->
                        <br>
                        <br>
                        <br>
                      <div id="portfolio" style="padding-left: 30px" class="portfolio grid-container portfolio-nomargin clearfix">

                        <?php $x=0; foreach ($galeris as $galeri) : ?>
                          <!-- <?php if ($x==4) { echo '<div class="row">'; } ?> -->
                          <div style="margin: 3%;" class="col-md-3 portfolio-item pf-<?php echo str_replace(' ', '_', $galeri->kategori_foto); ?>">
                            <div class="thumbnail">
                              <a href="<?php echo base_url('assets/upload/'.$galeri->filename) ?>" target="_blank">
                                <img src="<?php echo base_url('assets/upload/'.$galeri->filename) ?>" alt="Lights" style="width:100%">
                                <div class="caption">
                                  <b><?php echo $galeri->judul; ?></b><br>
                                  <p><?php echo $galeri->keterangan; ?></p>
                                  <!-- <p><?php echo $galeri->kategori_foto; ?></p> -->
                                </div>
                                <a href="<?php echo base_url('admin/media/deleteGaleri/'.$galeri->id_galeri);?>" title="Hapus" class="btn btn-danger btn-xs confirmation"><span class="fa fa-trash"></span></a>
                              </a>
                            </div>
                          </div>
                          <!-- <?php if ($x==4) { echo '</div>'; } $x++; $x=0; ?> -->
                        <?php endforeach; ?>
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



      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <!-- <h4 class="modal-title" id="myModalLabel">Edit Artikel</h4> -->
            </div>
            <div class="modal-body">
              <section class="content" id="">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box box-info">
                      <div class="box-header">
                        <h3 class="box-title">
                          Ubah File Anggaran
                        </h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                        </div>
                        <!-- /. tools -->
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body pad">
                        <form  action="<?php echo base_url('admin/media/updateAnggaran');?>" class="" method="post" enctype="multipart/form-data" style="padding-bottom: 30px">
                          <div class="row">
                            <div class="col-md-4">
                              <label>Keterangan : </label>
                              <input type="hidden" name="id_media" id="id_media">
                              <textarea id="m_keterangan" name="keterangan" class="form-control" rows="3"></textarea>
                            </div>
                            <!-- <div class="col-md-6"><label></label></div> -->
                            <div class="col-md-4" style="padding-top: 30px">
                              <!-- <label>Masukan Gambar : </label> -->
                              <input class="pull-right" type="file" name="foto">
                            </div>
                            <div class="col-md-3" style="padding-top: 30px">
                              <button type="submint" class="btn btn-primary pull-left">Tambah</button>
                            </div>
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