  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengaduan Desa
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
              <h5>Tambah Kategori Pengaduan</h5>
              <form class="form-inline" method="post" action="<?php echo base_url('admin/pengaduan/addKategori')?>">
                <div class="form-group">
                  <label>Nama Kategori : </label>
                  <input required="required" name="nama" type="text" class="form-control">
                </div>
                <div class="form-group pull-right">
                  <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#tambah_kategori" aria-expanded="false" aria-controls=""><span class="fa fa-eye"></span> Lihat Kategori</button>
                </div>
                <div class="form-group pull-right" style="padding-right: 30px">
                  <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Tambah Kategori</button>
                </div>
              </form>
              <div class="collapse" id="tambah_kategori" style="padding-top: 20px">
                <div class="well">
                  <h5>Kategori Pengaduan</h5>
                  <table  class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width: 80%">Nama Kategori Pengaduan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($kategoris as $kategori) : ?>
                        <tr>
                          <td><?php echo $kategori->nama_kategori ?></td>
                          <td><button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit_modal_<?php echo $kategori->id_kategori_pengaduan ?>"><span class="fa fa-edit"></span> Ubah</button>
                          <!-- <a class="btn btn-danger btn-xs confirmation" href="<?php echo base_url('admin/pengaduan/deleteKategori/'.$kategori->id_kategori_pengaduan);?>"><span class="fa fa-trash"></span> Hapus</a> -->
                          </td>
                        </tr>
                        <div class="modal fade" id="edit_modal_<?php echo $kategori->id_kategori_pengaduan ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit Kategori Berita</h4>
                              </div>
                              <form method="post" action="<?php echo base_url('admin/berita/updateKategori/'.$kategori->id_kategori_pengaduan)?>">
                                <div class="modal-body">
                                  <input type="text" name="nama" class="form-control" value="<?php echo $kategori->nama_kategori ?>">
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
             
              <table id="example" class="table table-bordered table-striped" ">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kategori</th>
                    <th>Judul Pengaduan</th>
                    <th style="width: 40%">Konten</th>
                    <th>Waktu Pengaduan</th>
                    <!-- <th>Action</th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pengaduans as $pengaduan) : ?>
                    <tr>
                      <td id="t_judul"><?php echo $pengaduan->nama ?></td>
                      <td id="t_judul"><?php echo $pengaduan->email ?></td>
                      <td id="t_judul"><?php echo $pengaduan->nama_kategori ?></td>
                      <td id="t_judul"><?php echo $pengaduan->judul ?></td>
                      <!-- <td id="t_nama_kategori"><?php echo $Pengaduan->nama_kategori ?></td> -->
                      <td id="t_konten"><?php echo htmlspecialchars($pengaduan->pesan) ?></td>
                      <td><?php echo date('d-m-Y h:i:s', strtotime($pengaduan->date_created)); ?></td>
                      <!-- <input type="hidden" id="t_foto" value="<?php echo $pengaduan->foto ?>"> -->
                      <input type="hidden" id="t_id_pengaduan" value="<?php echo $pengaduan->id_pengaduan ?>">
                      <!-- <td><a href="<?php echo base_url('admin/Pengaduan/deletePengaduan/'.$pengaduan->id_pengaduan);?>" title="Hapus" class="btn btn-danger confirmation"><span class="fa fa-trash"></span></a>
                        <a title="Edit Pengaduan" class="btn btn-warning editModal">
                          <span class="fa fa-edit"></span>
                        </a>
                      </td> -->
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
          <!-- <h4 class="modal-title" id="myModalLabel">Edit Pengaduan</h4> -->
        </div>
        <div class="modal-body">
          <section class="content" id="">
            <div class="row">
              <div class="col-md-12">
                <div class="box box-info">
                  <div class="box-header">
                    <h3 class="box-title">
                      Ubah Pengaduan Desa
                    </h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                    </div>
                    <!-- /. tools -->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body pad">
                    <form action="<?php echo base_url('admin/pengaduan/updatePengaduan');?>" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-md-6">
                          <label>Judul Pengaduan : </label>
                          <input type="hidden" id="id_pengaduan" name="id_pengaduan">
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