<div class="navbar navbar-fixed-top" style="overflow: visible;">
  <div class="container-fluid top-bar">
    <div class="pull-right">
      <ul class="nav navbar-nav pull-right">
        <li class="dropdown notifications hidden-xs"><a class="dropdown-toggle" data-toggle="dropdown" href="widgets.html#"><span>Notifications</span>
          <p class="counter"> 4 </p>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">
              <div class="notifications label label-info"> New </div>
              New user added: Jane Smith </a></li>
            <li><a href="#">
              <div class="notifications label label-info"> New </div>
              Sales targets available </a></li>
            <li><a href="#">
              <div class="notifications label label-info"> New </div>
              New performance metric added </a></li>
            <li><a href="#">
              <div class="notifications label label-info"> New </div>
              New growth data available </a></li>
          </ul>
        </li>
        <li class="dropdown messages hidden-xs"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span>Messages</span>
          <p class="counter">3</p>
          </a>
          <ul class="dropdown-menu messages">
            <li><a href="#"><img alt="Avatar male2" src="<?php echo base_url('public/admin/images/') ?>avatar-male2.png" width="34" height="34"> Could we meet today? I wanted... </a></li>
            <li><a href="#"><img alt="Avatar female" src="<?php echo base_url('public/admin/images/') ?>avatar-female.png" width="34" height="34"> Important data needs your analysis... </a></li>
            <li><a href="#"><img alt="Avatar male2" src="<?php echo base_url('public/admin/images/') ?>avatar-male2.png" width="34" height="34"> Buy Se7en today, it's a great theme... </a></li>
          </ul>
        </li>
        <li class="dropdown settings hidden-xs"><a class="dropdown-toggle" data-toggle="dropdown" href="widgets.html#"><span>Settings</span></a>
          <ul class="dropdown-menu">
            <li><a class="settings-link blue" href="javascript:chooseStyle('none', 30)"><span></span> Blue </a></li>
            <li><a class="settings-link green" href="javascript:chooseStyle('green-theme', 30)"><span></span> Green </a></li>
            <li><a class="settings-link orange" href="javascript:chooseStyle('orange-theme', 30)"><span></span> Orange </a></li>
            <li><a class="settings-link magenta" href="javascript:chooseStyle('magenta-theme', 30)"><span></span> Magenta </a></li>
            <li><a class="settings-link gray" href="javascript:chooseStyle('gray-theme', 30)"><span></span> Gray </a></li>
          </ul>
        </li>
        <li class="dropdown user hidden-xs"><a class="dropdown-toggle" data-toggle="dropdown" href="widgets.html#"><img alt="Avatar male" src="<?php echo base_url('public/admin/images/') ?>avatar-male.jpg" width="34" height="34"> <?php echo $this->session->userdata('login') ?> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="widgets.html#"><i class="icon-user"></i> My Account </a></li>
            <li><a href="widgets.html#"><i class="icon-gear"></i> Account Settings </a></li>
            <li><a href="<?php echo admin_url('home/logout') ?>"><i class="icon-signout"></i> Logout </a></li>
          </ul>
        </li>
      </ul>
    </div>
    <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    <a class="logo" href="<?php echo base_url('admin/home') ?>">se7en</a>
    <form class="navbar-form form-inline col-lg-2 hidden-xs">
      <input class="form-control" placeholder="Search" type="text">
    </form>
  </div>
  <div class="container-fluid main-nav clearfix">
    <div class="nav-collapse">
      <ul class="nav">
        <li class="dashboard"><a class="current" href="<?php echo base_url('admin/home') ?>"><span></span>Bảng Điều Khiển</a></li>

        <li class="forms dropdown ui"><a data-toggle="dropdown" href="#"><span></span>Bán Hàng<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="buttons.html">Giao Dịch</a></li>
            <li><a href="icons.html">Đơn Hàng</a></li>
          </ul>
        </li>
        
        <li class="tables dropdown ui"><a data-toggle="dropdown" href="#"><span></span>Tài Khoản<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('admin/admin/index') ?>">Ban Quản Trị</a></li>
            <li><a href="<?php echo base_url('admin/admin/add') ?>">Thêm Quản Trị Viên</a></li>
            <li><a href="<?php echo base_url('admin/user/index') ?>">Danh Sách Thành Viên</a></li>
            <li><a href="<?php echo base_url('admin/user/add') ?>">Thêm Thành Viên</a></li>
          </ul>
        </li>

        <li class="charts dropdown ui"><a data-toggle="dropdown" href="#"><span></span>Sản Phẩm<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('admin/category/index') ?>">Danh Sách Danh Mục</a></li>
            <li><a href="<?php echo base_url('admin/category/add') ?>">Thêm Danh Mục</a></li>
            <li><a href="<?php echo base_url('admin/product/index') ?>">Danh Sách Sản Phẩm</a></li>
            <li><a href="<?php echo base_url('admin/product/add') ?>">Thêm Sản Phẩm</a></li>
          </ul>
        </li>

        <li class="dropdown ui"><a data-toggle="dropdown" href="#"><span></span>Liên Hệ<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('admin/support/index') ?>">Hỗ Trợ</a></li>
            <li><a href="<?php echo base_url('admin/support/contact') ?>">Liên Hệ</a></li>
          </ul>
        </li>
        
        <li class="forms dropdown ui"><a data-toggle="dropdown" href="#"><span></span>Tin Tức<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('admin/news/index') ?>">Danh Sách Tin Tức</a></li>
            <li><a href="<?php echo base_url('admin/news/add') ?>">Thêm Tin Tức</a></li>
          </ul>
        </li>
        
        <li class="charts dropdown ui"><a data-toggle="dropdown" href="#"><span></span>Slide<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('admin/slide/index') ?>">Danh Sách Slide</a></li>
            <li><a href="<?php echo base_url('admin/slide/add') ?>">Thêm Slide</a></li>
          </ul>
        </li>

        <li class="dashboard"><a href="<?php echo base_url('admin/config/index') ?>"><span></span>Cấu Hình</b></a></li>

        <li class="gallery"><a href="<?php echo base_url('admin/config/index') ?>"><span></span>Hình Ảnh</a></li>
      </ul>
    </div>
  </div>
</div>