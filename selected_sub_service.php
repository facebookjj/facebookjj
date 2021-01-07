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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="sub_category.php" class="nav-link">Salont At Home</a>
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
            <h4>Manicure and Pedicure</h4>
            <p>Approximate time: 50 to 60 mins</p>
    </div>

    <div class="row small-box shadow-sm bg-white text-left service_details">
            <h5>Service details</h5>
            <p style="font-size: 1rem;">Keep your hands and feet looking clean and healthy. A regular mini-pedi helps
             strength your nails and leaves you with smoother skin.
             </p>
             <h5>About the service pro</h5>
             <p style="font-size: 1rem;">Our nail technicians are all highly trained professionals and are the top rated technicians in the city.</p>
    </div>

    <!-- List of service providers -->
    <h5>Our HelpCare Expert</h5>
    <div class="row">
        <div class="card col-sm-6 col-md-4 col-lg-3 mb-5 mr-2 p-0">
            <div class="card-body text-center box-adjust text-dark">
                <a href="booking_pro_profile.php"><img src="images/profile_pic/person_5.jpg" class="img-fluid responsive-img rounded-circle mb-2" style="width:200px;height:200px;">
                <h4>Mae A.</h4></a>
                <p><i class="fas fa-home pr-2"></i>Brgy Linao, Ormoc City</p>
                <p>Ratings:<br><span class="customerReviewStar text-center">
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star-half-alt text-danger"></i>
                <i class="far fa-star text-danger"></i>
                </span>
               </p>
                <p>Job Completed: <br>44</p>
                <p>Rate:<br><span class="serviceProrate">₱120</span></p>
                <a href="#" class="cta-service-pro" data-toggle="modal" data-target="#addBooking">Book Now</a>
            </div>
        </div>

        <div class="card col-sm-6 col-md-4 col-lg-3 mb-5 mr-2 p-0">
            <div class="card-body text-center box-adjust text-dark">
                <a href="booking_pro_profile.php"><img src="images/profile_pic/person_7.jpg" class="img-fluid responsive-img rounded-circle mb-2" style="width:200px;height:200px;">
                <h4>Grace A.</h4></a>
                <p><i class="fas fa-home pr-2"></i>Brgy Ipil, Ormoc City</p>
                <p>Ratings:<br><span class="customerReviewStar text-center">
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star-half-alt text-danger"></i>
                <i class="far fa-star text-danger"></i>
                </span>
                <p>Job Completed: <br>11</p>
                <p>Rate:<br><span class="serviceProrate">₱130</span></p>
                <a href="#" class="cta-service-pro" data-toggle="modal" data-target="#addBooking">Book Now</a>
            </div>
        </div>
        
        <div class="card col-sm-6 col-md-4 col-lg-3 mb-5 mr-2 p-0">
            <div class="card-body text-center box-adjust text-dark">
                <a href="booking_pro_profile.php"><img src="images/profile_pic/person_6.jpg" class="img-fluid responsive-img rounded-circle mb-2" style="width:200px;height:200px;">
                <h4>Vio B.</h4></a>
                <p><i class="fas fa-home pr-2"></i>Dist. 32, Ormoc City</p>
                <p>Ratings:<br><span class="customerReviewStar text-center">
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="far fa-star text-danger"></i>
                <i class="far fa-star text-danger"></i>
                <i class="far fa-star text-danger"></i>
                </span>
                <p>Job Completed: <br>5</p>
                <p>Rate:<br><span class="serviceProrate">₱90</span></p>
                <a href="#" class="cta-service-pro" data-toggle="modal" data-target="#addBooking">Book Now</a>
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
  <!-- User Booking Modal -->
  <?php include 'includes/user_modal.php'; ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- Modal Script -->
<?php include 'includes/scripts.php'; ?>
<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="./dist/js/adminlte.js"></script>
</body>
</html>
