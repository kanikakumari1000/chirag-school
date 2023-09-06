<?php
session_start();
$msg= "";
    if(isset($_SESSION['msg'])){
       $msg=$_SESSION['msg'];
       unset($_SESSION['msg']);
   }
   if($msg!=''){
     echo "<script> alert('$msg')</script>";
   }
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- bootstrap -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin-dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="admin-dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin-dashboard/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background:url(admin-dashboard/dist/img/bg4.jpg);opacity:0.5;">
<div class="image">
  <img src="admin-dashboard/dist/img/schoolimage.jpg" style="box-shadow:1px 2px 10px aqua" >
</div>
<div class="login-box">

  <div class="login-logo">
    <a href="index.php"><b></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body" style="box-shadow:1px 2px 10px 5px yellow;">
      <p class="login-box-msg" style="color:violet;text-decoration:underline">Sign in to start your session</p>

      <form action="action.php" method="post">
        <div class="input-group mb-3" style="box-shadow:1px 2px 10px 5px violet;">
          <input type="text" class="form-control" name="username" placeholder="Username" required>
          <div class="input-group-append" style="background-color:olive">
            <div class="input-group-text">
              <span class="fas fa-user" style="color:orange; background-color:blue"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3" style="box-shadow:1px 2px 10px 5px violet;">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="input-group-append" style="background-color:olive">
            <div class="input-group-text">
              <span class="fas fa-lock" style="color:orange; background-color:blue" ></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" style="box-shadow:1px 2px 10px green;" name="login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
      <p class="mb-1">
        <a href="#">forgot password?</a>
      </p>
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="admin-dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin-dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin-dashboard/dist/js/adminlte.min.js"></script>

</body>
</html>
