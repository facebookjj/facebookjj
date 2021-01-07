<?php include 'includes/session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Helpcare | Home</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <!-- Client style -->
  <link rel="stylesheet" href="./dist/css/style.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home.php" class="nav-link">Welcome, User!</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'customer_nav.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper dash-wrap">
    <!-- Content Header (Page header) -->
     <div class="header-wrap">
      <h5>Choose Services</h5>
      <p>List of on demand services in Ormoc City.</p>
    </div>
   <!-- List of services -->
    <div class="container-fluid service-con">

      <ul class="row service-list">
          <li class="col-sm-6 col-md-4 col-lg-3 mb-5"><a href="sub_category.php"><img src="images/icon_Salon_at_Home.svg" class="mx-auto d-block"><p>Salon At Home</p></a></li>
          <li class="col-sm-6 col-md-4 col-lg-3 mb-5"><a href="#"><img src="images/icon_carpentry.svg"><p>Carpentry</p></a></li>
          <li class="col-sm-6 col-md-4 col-lg-3 mb-5"><a href="#"><img src="images/icon_plumbling.svg"><p>Plumbling</p></a></li>
          <li class="col-sm-6 col-md-4 col-lg-3 mb-5"><a href="#"><img src="images/icon_electrical.svg"><p>Electrical</p></a></li>
      </ul>

    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php include 'footer.php'; ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="./dist/js/adminlte.js"></script>
</body>
</html>
