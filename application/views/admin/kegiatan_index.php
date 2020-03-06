  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kegiatan Desa
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

    <section class="content collapse" id="tambah_kegiatan">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">
                Tambah Kegiatan Desa
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm"  data-toggle="collapse" data-target="#tambah_Kegiatan" title="">
                  <i class="fa fa-times"></i></button>

                </div>
                <!-- /. tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body pad">
                <form action="<?php echo base_url('admin/kegiatan/addKegiatan');?>" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Judul Kegiatan : </label>
                      <input type="text" name="judul" class="form-control">
                    </div>
                  </div>
                  <div class="row" style="padding-top: 30px; padding-bottom: 30px">
                    <!-- <div class="col-md-6"><label></label></div> -->
                    <div class="col-md-2">
                      <div class="thumbnail">
                      <a href="#">
                        <img src="#" id="imgPre" class="">
                      </a>
                    </div>
                  </div>
                  <div class="col-md-10">
                    <input class="pull-right" id="imgInp" type="file" name="foto">
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
            <!-- <div class="box-header">
              
            </div> -->
            <!-- /.box-header -->
            <!-- <div class="clearfix"></div> -->
            <div class="box-body">
              <button style="margin-bottom: 20px; margin-top: 15px" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#tambah_kegiatan" aria-expanded="false" aria-controls=""><span class="fa fa-plus"></span> Tambah Kegiatan</button>
              <table id="example" class="table table-bordered table-striped" ">
                <thead>
                  <tr>
                    <th>Judul Kegiatan</th>
                    <!-- <th>Kategori</th> -->
                    <th style="width: 40%">Konten</th>
                    <th>Waktu Posting</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($kegiatans as $kegiatan) : ?>
                    <tr>
                      <td id="t_judul"><?php echo $kegiatan->judul ?></td>
                      <!-- <td id="t_nama_kategori"><?php echo $Kegiatan->nama_kategori ?></td> -->
                      <td id="t_konten"><?php echo htmlspecialchars($kegiatan->konten) ?></td>
                      <td><?php echo date('d-m-Y h:i:s', strtotime($kegiatan->date_created)); ?></td>
                      <input type="hidden" id="t_foto" value="<?php echo $kegiatan->foto ?>">
                      <input type="hidden" id="t_id_kegiatan" value="<?php echo $kegiatan->id_kegiatan ?>">
                      <td><a href="<?php echo base_url('admin/Kegiatan/deleteKegiatan/'.$kegiatan->id_kegiatan);?>" title="Hapus" class="btn btn-danger confirmation"><span class="fa fa-trash"></span></a>
                        <a title="Edit Kegiatan" class="btn btn-warning editModal">
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
          <!-- <h4 class="modal-title" id="myModalLabel">Edit Kegiatan</h4> -->
        </div>
        <div class="modal-body">
          <section class="content" id="">
            <div class="row">
              <div class="col-md-12">
                <div class="box box-info">
                  <div class="box-header">
                    <h3 class="box-title">
                      Ubah Kegiatan Desa
                    </h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                    </div>
                    <!-- /. tools -->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body pad">
                    <form action="<?php echo base_url('admin/kegiatan/updateKegiatan');?>" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-md-6">
                          <label>Judul Kegiatan : </label>
                          <input type="hidden" id="id_kegiatan" name="id_kegiatan">
                          <input type="text" id="judul" name="judul" class="form-control">
                        </div>
                      </div>
                      <div class="row" style="padding-top: 30px; padding-bottom: 30px">

                        <!-- <div class="col-md-6"><label></label></div> -->
                        <div class="col-md-2">
                          <div class="thumbnail">
                            <!-- <a href="<?php echo base_url('assets/upload/')?>"> -->
                              <img id="m_foto"  class="">
                              <!-- </a> -->
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
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>