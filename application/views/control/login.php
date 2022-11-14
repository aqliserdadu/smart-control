<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Smart Control Hardy Industries</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/monitor/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/monitor/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/monitor/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/monitor/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/monitor/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/monitor/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/monitor/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url();?>/galery/icon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto"  style="background-color:#fff000">
            <div class="text-left py-5 px-4 px-sm-5"  style="background-color:black;color:#fff000">
              <div class="brand-logo">
                <img src="<?php echo base_url();?>/galery/hardyindustries.png" alt="logo">
              </div>
              <h4>Hello! let's get started smart control</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form class="pt-3" action="<?php echo base_url('signin');?>" method="POST">
                <div class="form-group">
                  <input type="text" name="username" style="color:#fff000" class="form-control form-control-lg"  placeholder="Username" require>
                </div>
                <div class="form-group">
                  <input type="password" name="password" style="color:#fff000" class="form-control form-control-lg" placeholder="Password" require> 
                </div>
                
                <?php echo $this->session->flashdata('massage');?>

                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" style="background-color:#fff000;color:black">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                </div>
               
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url();?>/asset/monitor/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo base_url();?>/asset/monitor/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url();?>/asset/monitor/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>/asset/monitor/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url();?>/asset/monitor/js/template.js"></script>
  <script src="<?php echo base_url();?>/asset/monitor/js/settings.js"></script>
  <script src="<?php echo base_url();?>/asset/monitor/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
