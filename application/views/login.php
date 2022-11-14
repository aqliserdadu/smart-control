<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hardy | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminDigital//bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminDigital//dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="hold-transition login-page" style="background-color:#000000">
<div style="width:482px; margin:7% auto">
  <div class="login-logo">
	<img src="<?php echo base_url('galery/hardyindustries.png');?>" style="margin:10px">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="background-color:#fff000; border: 1px solid #fff000; border-radius: 8px">
    <p class="login-box-msg" style='color:black'>Sign in to start your session</p>

    <form action="<?php echo site_url('Login/aksiLogin');?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" style="background-color:#000000; color:#fff000">
        <span class="glyphicon glyphicon-user form-control-feedback" style="color:#fff000;" ></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" style="background-color:#000000; color:#fff000">
        <span class="glyphicon glyphicon-lock form-control-feedback" style="color:#fff000;"></span>
      </div>
	  <div class="row" style="margin-bottom: 1px;">
        <!-- /.col -->
        <div class="col-xs-12">
			<?php echo $this->session->flashdata('massage');?>
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-default btn-block btn-flat" style="background-color:#000000; color:#fff000">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>asset/adminDigital/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>asset/adminDigital/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
