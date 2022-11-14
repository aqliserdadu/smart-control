<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Smart Control </title>
 
  <link rel="stylesheet" href="<?php echo base_url();?>asset/monitor/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/monitor/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/monitor/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/monitor/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/monitor/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/monitor/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/monitor/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/monitor/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/monitor/css/vertical-layout-light/style.css">
  
  <link rel="shortcut icon" href="<?php echo base_url();?>/galery/icon.png" />

  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminDigital/dataTables.min.css">
  <script src="<?php echo base_url();?>asset/adminDigital/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url();?>asset/adminDigital/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?php echo base_url();?>asset/adminDigital/dataTables.min.js"></script>
  <script src="<?php echo base_url();?>asset/monitor/chart3.9.js"></script>

  
	<script src="<?php echo base_url();?>asset/adminDigital/dataTables.buttons.min.js"></script>
	<script src="<?php echo base_url();?>asset/adminDigital/jszip.min.js"></script>
	<!--- <script src="<?php echo base_url();?>asset/adminDigital/pdfmake.min.js"></script> --->
	<script src="<?php echo base_url();?>asset/adminDigital/vfs_fonts.js"></script>
	<script src="<?php echo base_url();?>asset/adminDigital/buttons.html5.min.js"></script>
	<script src="<?php echo base_url();?>asset/adminDigital/buttons.print.min.js"></script>
	<script src="<?php echo base_url();?>asset/adminDigital/buttons.colVis.min.js"></script>

  <link rel="stylesheet" href="<?php echo base_url();?>asset/monitor/onoff/onoff.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script> 


<style type="text/css">
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background-color: #100F0F0F0;
}
.preloader .loading {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  font: 18px arial;
  color :balck;
}
</style>



</head>
<body>
  <div class="container-scroller">
   
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="<?php echo base_url('dashboard');?>">
            <h4> Smart Control</h4>
          </a>
          <a class="navbar-brand brand-logo-mini" href="<?php echo base_url('dashboard');?>">
             <img class="img-xs rounded-circle" src="<?php echo base_url();?>/galery/icon.png" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Welcome, <span class="text-black fw-bold"><?php // echo $username ;?></span></h1>
            <div id="mqttInfo">
              
            </div>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="<?php echo base_url('galery/akun/').$img;?>" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="<?php echo base_url('galery/akun/').$img;?>" style="max-width:60px;height:auto" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold"><?php echo $username;?></p>
                <p class="fw-light text-muted mb-0"><?php echo $email;?></p>
                <?php if($expired != '0000-00-00'){;?>
                <p class="mb-1 mt-3 font-weight-semibold">Expired</p>
                <p class="fw-light text-muted mb-0"><?php echo date('d-M-Y',strtotime($expired));?></p>
                <?php };?>
              </div>
              <a class="dropdown-item" href="<?php echo base_url('profile');?>"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile</a>
              <a class="dropdown-item" href="<?php echo base_url('logout');?>"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
      
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
      
    </nav>
   
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>

      
      <!-- sidebar.html -->
      <?php if($this->session->userdata('level') == "admin"){
          $this->load->view('template/memberAdmin');
			}else{
          $this->load->view('template/memberList');
      }
      ;?>

      <!-- content -->
    
      <?php echo $content;?>


      <!-- content ends -->



                
       


    </div>
     <!-- content-wrapper ends -->
        <!--
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
         partial -->

         	<!-- Footer -->
          <footer class="footer" style="background-color:black">
            <div class="col-12-md">
              <div class="row">
                <div class="col-md-3">
                  <h4>
                    <a href="https://hardyindustries.tech"><img src="<?php echo base_url('galery/hardyindustries.png');?>" style="width:80%;height:auto"></a>
                  </h4>

                </div>

                <div  class="col-md-3">
                  <h4 style="color:#fff000">
                    Contacts
                  </h4>
                  <p style="color:#fff000"><i class="mdi mdi-email icon-md" aria-hidden="true"></i> <label  style="font-size: 18px;"><?php echo $contact->email;?></label></p>
                  <p style="color:#fff000"><i class="mdi mdi-cellphone-android icon-md" aria-hidden="true" ></i> <label  style="font-size: 18px;"><?php echo $contact->telpon;?></label></p>
                  <p>
                      <a href="<?php echo $contact->instagram;?>" style="color:#fff000"><i  class="mdi mdi-instagram icon-md"></i></a>
                      <a href="<?php echo $contact->youtube;?>"  style="color:#fff000"><i class="mdi mdi-youtube icon-md"></i></a>
                  </p>

                  
                </div>

                <div class="col-md-3">
                  <h4 class="s-text12 p-b-15"  style="color:#fff000">
                    Address
                  </h4>
                  <h5>
                      <a href="<?php echo $contact->maps;?>" style="color:#fff000">
                        <i class="mdi mdi-google-maps icon-md"  aria-hidden="true"></i> <?php echo $contact->alamat;?>
                      </a>
                  </h5>
                </div>

              </div>  
            </div>

            <div align="center">
              <p style="position:relative;align-text:center; color:#fff000; font-size: 20px">
                <strong>Copyright &copy; <?php echo date("Y");?> <a href="#" style="color:#fff000">By Hardy Industries</a>.</strong>
                All rights reserved.	
              </p>
            </div>
          </footer>
     </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

 
  <!-- plugins:js -->
  <script src="<?php echo base_url();?>asset/monitor/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo base_url();?>asset/monitor/vendors/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url();?>asset/monitor/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url();?>asset/monitor/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url();?>asset/monitor/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>asset/monitor/js/hoverable-collapse.js"></script>
 <!-- <script src="<?php echo base_url();?>asset/monitor/js/template.js"></script> -->
  <script src="<?php echo base_url();?>asset/monitor/js/settings.js"></script>
  <script src="<?php echo base_url();?>asset/monitor/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url();?>asset/monitor/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>asset/monitor/js/dashboard.js"></script>
  <script src="<?php echo base_url();?>asset/monitor/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->


  <script src="<?php echo base_url();?>asset/monitor/onoff/onoff.js"></script>
 

  <div class="preloader" style="display:none">
    <div class="loading" id="loading">
    
    </div>
  </div> 



</body>

</html>

