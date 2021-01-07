<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Helpcare | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <!-- Extra style -->
  <link rel="stylesheet" href="./dist/css/style.css">

</head>
<body class="hold-transition login-page c-login-form">
<div class="container-fluid align-items-center">
    <div class="row c_login">
      <img src="./images/logo_b.png" class="rounded mx-auto d-block" alt="Welcome to HelpCare">
    </div>

    <div class="row c_login_para mx-auto d-block">
    <h4>Welcome to HelpCare</h4>
    <p>On demand personal and households <br> same-day delivery services in Ormoc City.</p>
    </div>
</div>

<div class="login-box">
<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  <!-- /.login-logo -->
 
  <div class="card card-outline card-primary">
    <div class="card-body">
      <p class="login-box-msg font-weight-bold text-dark">Login to your account</p>

      <form action="verify.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Enter your email address">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" value="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Show password
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <div class="social-auth-links text-center mt-2 mb-3">
        <span><p>Not yet a member?</p></span>
        <a href="./user_register.php" class="btn btn-block btn-default">
          Create New Account
        </a> 
      </div>

      

      <div class="social-auth-links text-center mt-2 mb-3">
      <span><p>Planning to Join Us?</p></span>
        <a href="./pro_register.php" class="btn btn-block btn-partner">
          <img src="images/icon_servicepro_btn.png">Become Our Partner
        </a> 
      </div>



    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<div class="footer">
        2021 &copy; HelpCare STI Collage Thesis Web App Sofware
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="./../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./../dist/js/adminlte.min.js"></script>
</body>
</html>
