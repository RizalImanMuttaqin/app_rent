<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('_partials_admin/_header'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php $this->load->view('_partials_admin/_navbar_top'); ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('_partials_admin/_sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <?php echo $contents; ?> 
  <!-- /.content-wrapper -->
  <?php $this->load->view('_partials_admin/_footer'); ?>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
  <?php $this->load->view('_partials_admin/_js'); ?>

</body>
</html>
