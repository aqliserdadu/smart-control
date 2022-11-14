<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hardy Industries</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminDigital/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminDigital/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminDigital/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminDigital/dist/css/AdminLTE.min.css">
  
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminDigital/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminDigital/datepicker.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminDigital/dataTables.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminDigital/bower_components/jquery-ui/jquery-ui.css">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/publik/leaflet/leaflet.css">
  <script type="text/javascript" src="<?php echo base_url();?>asset/publik/leaflet/leaflet.js"></script>

<!--===============================================================================================- -->
 
	<script src="<?php echo base_url();?>asset/adminDigital/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url();?>asset/adminDigital/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?php echo base_url();?>asset/adminDigital/jquery.mask.js"></script>
	<script src="<?php echo base_url();?>asset/adminDigital/dataTables.min.js"></script>
	<script src="<?php echo base_url();?>asset/adminDigital/jsUang.js"></script>
	<script src="<?php echo base_url();?>asset/adminDigital/datepicker.min.js"></script>
	<script src="<?php echo base_url();?>asset/adminDigital/moment.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>asset/adminDigital/ckeditor/ckeditor.js"></script>
  
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->




</head>
<body class="hold-transition skin-blue sidebar-mini">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>y</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Hardy</b>Industries</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
		
		<!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url("galery/akun/").$this->session->userdata('gender');?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('username');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                 <img src="<?php echo base_url("galery/akun/").$this->session->userdata('gender');?>" class="img-circle" alt="User Image">
        
                <p>
                 <?php echo $this->session->userdata('username');?>
                  <small><?php echo $this->session->userdata('wa');?></small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
				
				<div class="pull-left">
                  <a href="<?php echo base_url("adminDigital/Akun/editPasAd");?>" class="btn btn-info btn-xs" style="color:black">Set Pass</a>
                </div> 
			  
                <div class="pull-right">
                  <a href="<?php echo base_url("Login/Logout");?>" class="btn btn-danger btn-xs">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url("galery/akun/").$this->session->userdata('gender');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
       
		<li class="<?php echo $dashboard;?>">
				<a href="<?php echo site_url('admin/dashboard');?>" id="dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
		</li>
		
		<li class="<?php echo $akun;?>">
				<a href="<?php echo site_url('akun/index');?>" id="akun"><i class="fa fa-user"></i><span>Akun</span></a>
		</li>
		
		<li class="<?php echo $banner;?>">
				<a href="<?php echo site_url('admin/banner');?>" id="banner"><i class="fa fa-th-list"></i><span>Banner</span></a>
		</li>
		
		<li class="<?php echo $about;?>">
				<a href="<?php echo site_url('admin/about');?>" id="about"><i class="fa fa-gear"></i><span>About</span></a>
		</li>

		<li class="<?php echo $team;?>">
					<a href="<?php echo site_url('admin/team');?>" id="team"><i class="fa fa-users"></i><span>Team</span></a>
		</li>
	  
		<li class="<?php echo $contact;?>">
				<a href="<?php echo site_url('admin/contact');?>" id="contact"><i class="fa fa-book"></i><span>Contact</span></a>
		</li>
	 
		<li class="treeview <?php echo $product;?>">
          <a href="#">
            <i class="fa fa-th-large"></i> <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> 
          </a>
          <ul class="treeview-menu">
          
            <li class="<?php echo $addproduct;?>"><a href="<?php echo site_url('admin/addproduct');?>" id="addProduct"><i class="fa fa-plus"></i>Add Product</a></li>
            <li class="<?php echo $listproduct;?>"><a href="<?php echo site_url('admin/product');?>" id="product"><i class="fa fa-list"></i><span>List Product</span></a></li>
          
          </ul>
		</li>

		
		<li class="treeview <?php echo $news;?>">
          <a href="#">
            <i class="fa fa-th"></i> <span>News</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> 
          </a>
          <ul class="treeview-menu">
          
            <li class="<?php echo $addnews;?>"><a href="<?php echo site_url('admin/addnews');?>" id="addNews"><i class="fa fa-plus"></i>Add News</a></li>
            <li class="<?php echo $listnews;?>"><a href="<?php echo site_url('admin/news');?>" id="news"><i class="fa fa-list"></i><span>List News</span></a></li>
          
          </ul>
		</li>

		
		
		



	  </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!----------------------------------------- Content Wrapper. Contains page content ---------------------------->
  <div class="content-wrapper" id="content">
    <!-----------------------------------------Content Header (Page header) ------------------------------------>
    
			
			
			
			<?php echo $content;?>
	
	
	
	
	
	<!----------------------------------------- .content -------------------------------------------------------->
  </div>
  <!-------------------------------------------.content-wrapper --------------------------------------------------->

<footer class="main-footer">
    <strong>Copyright &copy; <?php echo date("y");?> <a href="#">By Hardy Industries</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
</footer>



<div class="preloader" style="display:none">
  <div class="loading" id="loading">
   
  </div>
</div> 
 



<!-- jQuery 3 -->

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>asset/adminDigital/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>asset/adminDigital/dist/js/adminlte.min.js"></script>

	


</body>
</html>

