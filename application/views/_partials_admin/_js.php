<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/admin_template/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/admin_template/bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/admin_template/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/admin_template/bower_components/raphael/raphael.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin_template/bower_components/morris.js/morris.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/admin_template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/admin_template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin_template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/admin_template/bower_components/jquery-knob/dist/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/admin_template/bower_components/moment/min/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin_template/bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/admin_template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/admin_template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/admin_template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/admin_template/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/admin_template/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/admin_template/dist/js/pages/dashboard.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/admin_template/dist/js/demo.js'); ?>"></script>
<!-- number js -->
<script src="<?php echo base_url('assets/admin_template/bower_components/number/jquery.number.min.js'); ?>"></script>

<script type="text/javascript">
  function readURL(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#imgPre').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  function chatWa(cmsg, number) {
    number = number.replace('08', '628')
    // console.log(number, "before")
    let msg = "Hallo Admin Brainbox disini. " + cmsg.split(" ").join("%20")
    console.log(msg)
    return window.open(`https://api.whatsapp.com/send?phone=${number}&text=${msg}`, "_blank");
  }

  $("#imgInp").change(function() {
    readURL(this);
  });

  $('#password, #confirm_password').on('keyup', function() {
    if ($('#password').val() == $('#confirm_password').val()) {
      $('#message').html('Password cocok').css('color', 'green');
      $('#btn_pass').attr('disabled', false);
    } else {
      $('#message').html('Password tidak sesuai').css('color', 'red');
      $('#btn_pass').attr('disabled', true);
    }
  });

  $('.formatNumbers').number(true, 0, ',', '.')
  $('.inputNumbers').number(true, 0, ',', '.')

  $('.datepicker').datepicker({
    format: 'dd-mm-yyyy'
  })
</script>
<?php echo (isset($js)) ? $js : ''; ?>