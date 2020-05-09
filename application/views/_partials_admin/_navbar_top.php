  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('/');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Brainbox</b>Admin</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-gears"></i>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <form method="post" action="<?php echo base_url('admin/profile/edit_admin'); ?>">
                  <b> Ganti Password : </b> 
                  <input style="margin-top: 5px" id="" type="password" class="form-control" placeholder="Password Lama" name="old_password">
                  <input style="margin-top: 5px" type="password" class="form-control" placeholder="Passwor Baru" name="n_pass" id="password">
                  <input style="margin-top: 5px" type="password" class="form-control" placeholder="Ulangi Password Baru" name="r_pass" id="confirm_password">
                  <b id='message'></b> 
                </li>
                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <button type="submit" id="btn_pass" disabled="disabled" class="btn btn-primary">Simpan</button>
                  </form>
                </div>
              </li>
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/admin_template/dist/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/admin_template/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
                <p>
                  Admin
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('login/logout');?>" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>

          <!-- Control Sidebar Toggle Button -->



        </ul>
      </div>
    </nav>

  </header>
