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
       <!-- Start breadcrumbs -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home.php" class="nav-link">Home</a>
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
    <div class="row header-wrap">
        <img src="images/icon_Salon_at_Home.svg" style="width: 80px; height: 80px;">
        <div class="col with-auto sub-cat-title">
            <h4>Salon At Home</h4>
            <p>Select specific services in Ormoc City.</p>
        </div>
    </div>
    <!-- List of sub category services -->
    <h5 class="mb-3">Manicure and Pedicure</h5>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3 mb-5">
            <div class="small-box shadow-sm bg-white rounded text-center box-adjust">
               <a href="selected_sub_service.php"><img src="images/subcategory/manicure_and_pedicure.jpg" class="img-fluid responsive-img rounded-circle" style="width:200px;height:160px;">
                <p>Manicure and Pedicure</p></a>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 mb-5">
            <div class="small-box shadow-sm bg-white rounded text-center box-adjust">
            <a href="#"><img src="images/subcategory/manicure.jpg" class="img-fluid responsive-img rounded-circle" style="width:200px;height:160px;">
                <p>Manicure</p></a>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 mb-5">
            <div class="small-box shadow-sm bg-white rounded text-center box-adjust">
            <a href="#"><img src="images/subcategory/pedicure.jpg" class="img-fluid responsive-img rounded-circle" style="width:200px;height:160px;">
                <p>Pedicure</p></a>
            </div>
        </div>
    </div>
    
    <h5>Hair Done</h5>

    <div class="row">
       

        <div class="col-sm-6 col-md-4 col-lg-3 mb-5">
            <div class="small-box shadow-sm bg-white rounded text-center box-adjust">
            <a href="#"><img src="images/subcategory/male_haircut.jpg" class="img-fluid responsive-img rounded-circle" style="width:200px;height:160px;">
                <p>Male Haircut</p></a>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 mb-5">
            <div class="small-box shadow-sm bg-white rounded text-center box-adjust">
            <a href="#"><img src="images/subcategory/female_haircut.jpg" class="img-fluid responsive-img rounded-circle" style="width:200px;height:160px;">
                <p>Female Haircut</p></a>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 mb-5">
            <div class="small-box shadow-sm bg-white rounded text-center box-adjust">
            <a href="#"><img src="images/subcategory/hair_color.jpg" class="img-fluid responsive-img rounded-circle" style="width:200px;height:160px;">
                <p>Hair Color</p></a>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 mb-5">
            <div class="small-box shadow-sm bg-white rounded text-center box-adjust">
            <a href="#"><img src="images/subcategory/child_haircut.jpg" class="img-fluid responsive-img rounded-circle" style="width:200px;height:160px;">
                <p>Child Haircut</p></a>
            </div>
        </div>
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

<!-- OPTIONAL SCRIPTS -->
<script src="./plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./dist/js/pages/dashboard3.js"></script>
</body>
</html>
