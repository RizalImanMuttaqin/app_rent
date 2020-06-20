 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Company Profile
      <!-- <small>Advanced form element</small> -->
    </h1>
    <div style="padding-top: 10px">
      <?php echo $this->session->flashdata('info'); ?>
    </div>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"> Company Profile</li>
    </ol>
  </section>

  <!-- Main content -->
  <?php foreach ($profiles as $profile):?>
    <section class="content">
      <form action="<?php echo base_url('admin/profile/update/'.$profile->id);?>" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                  <?php if($profile->id == 6 || $profile->id == 8) : ?>
                    <h3 class="box-title">
                    <input type="text" name="judul" class="form" value="<?php echo $profile->judul ?>">
                  </h3>
                    <?php else : ?>
                      <h3 class="box-title"><?php echo $profile->judul ?>
                    <?php endif; ?>
                  <!-- <small>Advanced and full of features</small> -->
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="">
                  <i class="fa fa-minus"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body pad">
                <?php if($profile->id == 1 || $profile->id == 2 || $profile->id == 6) : ?>
                  <div class="col-md-2">
                    <div class="thumbnail">
                      <a href="<?php echo base_url('assets/upload/'.$profile->foto)?>">
                        <img src="<?php echo base_url('assets/upload/'.$profile->foto)?>" class="">
                      </a>
                    </div>
                  </div>
                  <div class="col-md-10">
                    <input class="pull-right" type="file" name="foto">
                  </div>
                <?php endif; ?>
                <div class="col-md-12">
                  <textarea class="ckeditor" name="konten" rows="15" cols="80">
                    <?php echo $profile->konten ?>
                  </textarea>                  
                </div>
                <?php if($profile->id == 6) :?>
                <div class="col-md-3" style="padding-top: 20px;">
                  <span style="font-weight: bold;">Email</span>
                  <input type="text" name="email" value="<?=$admin->email?>" class="form-control">
                </div>
                <div class="col-md-3" style="padding-top: 20px;">
                  <span style="font-weight: bold;">Phone</span>
                  <input type="text" name="phone" value="<?=$admin->phone?>" class="form-control">
                </div>
                <?php endif; ?>
                <div class="col-md-12" style="padding-top: 30px">
                  <button type="submint" class="btn btn-primary pull-right">Simpan</button>
                </div>
              </div>
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col-->
        </div>
      </form>
      <!-- ./row -->
    </section>
  <?php endforeach; ?>


  <!-- /.content -->
</div>
  <!-- /.content-wrapper -->