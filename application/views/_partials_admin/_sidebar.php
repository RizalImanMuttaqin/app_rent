  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/admin_template/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
<!--         <li class="treeview">
          <a href="<?php echo base_url('titid');?>">
            <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        </li> -->
        <li class="<?php echo ($this->uri->segment(2)=='profile') ? 'active' : '';?>">
          <a href="<?php echo base_url('admin/profile')?>">
            <i class="fa fa-files-o"></i>
            <span>Company Profile</span>
          </a>
        </li>
        <li class="<?php echo ($this->uri->segment(2)=='product') ? 'active' : '';?>">
          <a href="<?php echo base_url('admin/product')?>">
            <i class="fa fa-files-o"></i>
            <span>Products</span>
          </a>
        </li>
        <!-- <li class="<?php echo ($this->uri->segment(2)=='artikel') ? 'active' : '';?>">
          <a href="<?php echo base_url('admin/artikel')?>">
            <i class="fa fa-files-o"></i>
            <span>Artikel Desa</span>
          </a>
        </li> -->
        <!-- <li class="<?php echo ($this->uri->segment(2)=='kegiatan') ? 'active' : '';?>">
          <a href="<?php echo base_url('admin/kegiatan')?>">
            <i class="fa fa-files-o"></i>
            <span>Kegiatan Desa</span>
          </a>
        </li> -->
        <li class="<?php echo ($this->uri->segment(2)=='media') ? 'active' : '';?>">
          <a href="<?php echo base_url('admin/media')?>">
            <i class="fa fa-files-o"></i>
            <span>Media</span>
          </a>
        </li>


        <li class="<?php echo ($this->uri->segment(2)=='transaction') ? 'active' : '';?>">
          <a href="<?php echo base_url('admin/transaction')?>">
            <i class="fa fa-files-o"></i>
            <span>Transaction</span>
          </a>
        </li>
        
        <!-- <li class="<?php echo ($this->uri->segment(2)=='pengaduan') ? 'active' : '';?>">
          <a href="<?php echo base_url('admin/pengaduan')?>">
            <i class="fa fa-files-o"></i>
            <span>Transaction</span>
            <span class="pull-right-container">
              <?php if ($notif = $this->MyQuery->getNotif() != 0) :?>
              <small class="label pull-right bg-red"><?php echo $notif; ?></small>
              <?php endif; ?>
            </span>
          </a>
        </li> -->
    </section>
    <!-- /.sidebar -->
  </aside>