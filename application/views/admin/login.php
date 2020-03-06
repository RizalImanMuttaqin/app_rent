  <?php $this->load->view('_partials_admin/_header'); ?>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Admin Desa</b></a>
    </div>
    <!-- /.login-logo -->
    <div style="padding-top: 10px">
      <?php echo $this->session->flashdata('info'); ?>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">Login untuk melanjutkan</p>

      <form action="<?php echo base_url('login/aksiLogin'); ?>" method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="username" placeholder="username">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="../../plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
  <?php $this->load->view('_partials_admin/_js'); ?>

</body>