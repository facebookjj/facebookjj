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
        <a href="home.php" class="nav-link">Home /</a>
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
      <h5>Update Profile</h5>
    </div>
        <div class="container-fluid card bpp_card">
            <div class="card-body service_details">
                <div class="row booking-prof-img">
                        <img src="images/profile_pic/person_5.jpg" class="img-fluid responsive-img rounded-circle mx-auto d-block mb-3" style="width:200px;height:200px;">
                </div>
                
                <form  enctype="multipart/form-data" method="post" class="bg-white">
                
                    <div class="form-group">
                            <label class="form-label" for="customFile">Upload Photo</label>
                            <input type="file" class="form-control" id="customFile" />
                    </div>
                    <div class="form-group">
                       <div class="row m-0">
                            <div class="col-md-6 pl-0">
                                <label for="name">First Name</label>
                                <input type="text" id="fname" name="first" class="form-control" value="Mae">
                            </div>
                            <div class="col-md-6 pl-0">
                                <label for="name">Last Name</label>
                                <input type="text" id="lname" name="last" class="form-control" value="Abrencio">
                            </div>
                      </div>
                    </div>
                    <div class="form-group"> 
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="+63" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                    </div>
                    <div class="form-group"> 
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Street Address">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com">
                    </div>
                </form>
            
            </div>
            <div class="card-footer bg-white pt-0 mb-3">
                <button type="button" class="btn mt-0 btn btn-info mx-auto w-100 py-4 text-uppercase font-weight-bold">Save</button>
            </div>
        </div>
  
    </div> 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

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
