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
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'customer_nav.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper dash-wrap bg-white">
    <!-- Content Header (Page header) -->
     <div class="header-wrap">
      <h5>My Service History</h5>
    </div>

     <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified text-uppercase mb-4" id="myTab">
        <li class="nav-item">
            <a href="#today" class="nav-link active" data-toggle="tab">This Month</a>
        </li>
        <li class="nav-item">
            <a href="#upcoming" class="nav-link" data-toggle="tab">Past Month</a>
        </li>
       
    </ul>
    <div class="tab-content">
        <div class="tab-pane container fade show active" id="today">
                        
                 
                  <!-- Fetch completed booking -->

                   <div class="card col-sm bg-light p-0 shadow-none">
                     <div class="card-body">
                             <p class="book-label">Invoice ID</p>
                             <p class="book-input">00002302</p>

                             <p class="book-label">Service Provider Name</p>
                             <p class="book-input">Grace Almendra</p>

                             <p class="book-label">Service Type</p>
                             <p class="book-input">Manicure and Pedicure</p>

                             <p class="book-label">Charged Rate</p>
                             <p class="book-input">Php 120</p>

                             <p class="book-label">Date</p>
                             <p class="book-input">January 7, 2020</p>

                             <p class="book-label">Time of Arrival</p>
                             <p class="book-input">02:00 PM</p>

                             <p class="book-label">Service Address</p>
                             <p class="book-input">Brgy Linao, Ormoc City</p>

                             <p class="book-label">Instruction for service provider</p>
                             <p class="book-input">Please be on time..</p>                      
                     </div>
                     <div class="card-footer row mx-0"> 
                     <button type="button" class="row btn p-3 btn-success btn-block mr-2" disabled>Paid</button>
                     <!-- Insert different button for user reviews -->
                     
                    
                      <div class="row mt-4" id="post-review-box">
                          <div class="col-md-12">
                              <form action="" method="post">
                                  <p>Rate this service provider</p>
                                  <div class="stars">
                                       <input class="star far fa-star text-danger" id="star-5" type="radio" name="star" />

                                       <label class="star star-5" for="star-5"></label> 
                                       <input class="star star-4" id="star-4" type="radio" name="star" /> 
                                       <label class="star star-4" for="star-4"></label> 
                                       <input class="star star-3" id="star-3" type="radio" name="star" /> 
                                       <label class="star star-3" for="star-3"></label> 
                                       <input class="star star-2" id="star-2" type="radio" name="star" /> 
                                       <label class="star star-2" for="star-2"></label> 
                                       <input class="star star-1" id="star-1" type="radio" name="star" /> 
                                       <label class="star star-1" for="star-1"></label>
                                  </div>
                                  <p>Write review for this service provider</p>
                                  <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
                                  <div class="text-right">
                                    
                                      <button class="btn btn-success btn-lg mt-3 w-100" type="submit">Save</button>
                                  </div>
                              </form>
                          </div>
                      </div>

                    </div>
                   </div>                    
        </div>
        <!--- 2nd Tab -->
        <div class="tab-pane fade container" id="upcoming">
            
         <!-- Fetch booking data -->
                 <div class="card col-sm bg-light p-0 shadow-none">
                     <div class="card-body">
                             <p class="book-label">Invoice ID</p>
                             <p class="book-input">00002301</p>

                             <p class="book-label">Service Provider Name</p>
                             <p class="book-input">Jimboy Tampus</p>

                             <p class="book-label">Service Type</p>
                             <p class="book-input">Mens Haircut</p>

                             <p class="book-label">Charged Rate</p>
                             <p class="book-input">Php 120</p>

                             <p class="book-label">Date</p>
                             <p class="book-input">January 10, 2021</p>

                             <p class="book-label">Time of Arrival</p>
                             <p class="book-input">02:00 PM</p>

                             <p class="book-label">Service Address</p>
                             <p class="book-input">Brgy Linao, Ormoc City</p>

                             <p class="book-label">Instruction for service provider</p>
                             <p class="book-input">Please be on time..</p>                      
                     </div>
                     <div class="card-footer row mx-0"> 
                     <button type="button" class="col btn p-3 btn-success btn-block mr-2" disabled>Paid</button>

                    </div>
                   </div>         
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


<?php include 'includes/scripts.php'; ?>
<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="./dist/js/adminlte.js"></script>
</body>
</html>
