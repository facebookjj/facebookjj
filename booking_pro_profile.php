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
        <a href="sub_category.php" class="nav-link">Salont At Home/</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="selected_sub_service.php" class="nav-link">Manicure and Pedicure</a>
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

        <div class="container-fluid card bpp_card">
            <div class="row service_details">
                <div class="col-sm-3 booking-prof-img">
                        <img src="images/profile_pic/person_5.jpg" class="img-fluid responsive-img rounded-circle mx-auto d-block" style="width:200px;height:200px;">
                </div>
                <div class="col-sm sub-cat-title">
                    <h4 class="mb-1">Mae Abrencio</h4>
                    <p class="mb-0"><i class="fas fa-home pr-2"></i>Brgy Linao, Ormoc City</p>
                    <p><i class="fas fa-birthday-cake pr-2"></i>26</p>

                    <div class="row pt-3 text-dark">
                        <div class="col-sm mb-3">
                            <h4><i class="fas fa-star pr-2 text-danger"></i>5</h4>
                            <p class="text-uppercase">Overall Rating</p>
                        </div>
                        <div class="col-sm mb-3">
                            <h4><i class="fas fa-calendar-check pr-2 text-green"></i>44</h4>
                            <p class="text-uppercase">Job Completed</p>
                        </div>
                    </div>
                    
                    <div class="col-sm p-0">
                        <h4 class="font-weight-bold">Php 120</h4>
                        <p>Rates for Manicure and Pedicure</p>
                    </div>

                    <!-- CTA -->
                    <a href="#" data-toggle="modal" data-target="#addBooking" class="col cta-service-pro text-center">Book Now</a>  
                </div>
            
            </div>
        </div>
  
        <h5 class="my-4">Customer Reviews</h5>

        <!-- List of customer reviews and rating -->
        <div class="container-fluid card mb-4">

            <div class="row card-body">
                
                <div class="col-sm p-0">
                <blockquote class="border-0 p-0"> 
                <p>"excellent work by the beautician.. thanks"</p>
                <footer class="blockquote-footer"><span class="customerName">From Susan B.</span>
                </footer>
                <span class="row customerReviewStar ml-2"><i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                </span>
                <span class="row dateAdded ml-2">01/12/20</span>
                </blockquote>
                </div>

                <div class="col-sm p-0">
                <blockquote class="border-0 p-0"> 
                <p>"I had an amazing experience :) she was very professional and caring thank you Mae!"</p>
                <footer class="blockquote-footer"><span class="customerName">From Sarah T.</span>
                </footer>
                <span class="row customerReviewStar ml-2"><i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                </span>
                <span class="row dateAdded ml-2">01/12/20</span>
                </blockquote>
                </div>
                
                <div class="col-sm p-0">
                <blockquote class="border-0 p-0"> 
                <p>"Awesome, always preferred mae. One of the best service provider. !"</p>
                <footer class="blockquote-footer"><span class="customerName">From Jean S.</span>
                </footer>
                <span class="row customerReviewStar ml-2"><i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                </span>
                <span class="row dateAdded ml-2">01/12/20</span>
                </blockquote>
                </div>

                <div class="col-sm p-0">
                <blockquote class="border-0 p-0"> 
                <p>"Would like to avail more services"</p>
                <footer class="blockquote-footer"><span class="customerName">From Erika B.</span>
                </footer>
                <span class="customerReviewStar ml-2"><i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                <i class="fas fa-star text-danger"></i>
                </span>
                <span class="row dateAdded ml-2">01/12/20</span>
                </blockquote>
                </div>


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
