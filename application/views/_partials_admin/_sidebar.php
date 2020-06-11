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
        <li class="treeview <?php echo ($this->uri->segment(2)=='product') ? 'active' : '';?>">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Products</span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo ($this->uri->segment(3)=='master') ? 'active' : '';?>"><a href="<?php echo base_url('admin/product/master')?>"><i class="fa fa-circle-o"></i> Product Master</a></li>
            <li class="<?php echo ($this->uri->segment(3)=='stock') ? 'active' : '';?>"><a href="<?php echo base_url('admin/product/stock')?>"><i class="fa fa-circle-o"></i> Product Stock</a></li>
            <li class="<?php echo ($this->uri->segment(3)=='schedule') ? 'active' : '';?>"><a href="<?php echo base_url('admin/product/schedule')?>"><i class="fa fa-circle-o"></i> Product Schedule</a></li>
          </ul>
        </li>
        <!-- <li class="<?php echo ($this->uri->segment(2)=='artikel') ? 'active' : '';?>">
          <a href="<?php echo base_url('admin/artikel')?>">
            <i class="fa fa-files-o"></i>
            <span>Artikel Desa</span>
          </a>
        </li> -->
        <li class="<?php echo ($this->uri->segment(2)=='media') ? 'active' : '';?>">
          <a href="<?php echo base_url('admin/media')?>">
            <i class="fa fa-files-o"></i>
            <span>Media</span>
          </a>
        </li>


        <li class="treeview <?php echo ($this->uri->segment(2)=='transaction') ? 'active' : '';?>">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Transaction</span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo ($this->uri->segment(3)=='inProcess') ? 'active' : '';?>"><a href="<?php echo base_url('admin/transaction/inProcess')?>"><i class="fa fa-circle-o"></i> Orders on Process</a></li>
            <li class="<?php echo ($this->uri->segment(3)=='offers') ? 'active' : '';?>"><a href="<?php echo base_url('admin/transaction/offers')?>"><i class="fa fa-circle-o"></i> Orders Offers</a></li>
            <li class="<?php echo ($this->uri->segment(3)=='history') ? 'active' : '';?>"><a href="<?php echo base_url('admin/transaction/history')?>"><i class="fa fa-circle-o"></i> Order History</a></li>
            <li class="<?php echo ($this->uri->segment(3)=='reject') ? 'active' : '';?>"><a href="<?php echo base_url('admin/transaction/reject')?>"><i class="fa fa-circle-o"></i> Orders Reject</a></li>
          </ul>
        </li>

        <li class="<?php echo ($this->uri->segment(2)=='account') ? 'active' : '';?>">
          <a href="<?php echo base_url('admin/account')?>">
            <i class="fa fa-files-o"></i>
            <span>Account</span>
          </a>
        </li>
        
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li> -->
    </section>
    <!-- /.sidebar -->
  </aside>