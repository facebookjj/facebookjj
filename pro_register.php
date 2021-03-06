<?php include 'includes/session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>HelpCare On-Demand Personal and Household Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <!-- Client style -->
  <link rel="stylesheet" href="./dist/css/style.css">
</head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

      <?php include "nav.php"?>

    <div class="unit-5 overlay">
      <div class="container con-select">
        <h3>Sign up as a partner on HelpCare</h3>
        <p>Be a part of a community of service experts that have trusted and</p>
        <p>seen their business amplify with HelpCare’s service platform.</p>
      </div>
    </div>

    <div class="site-section bg-light reg-form">
      <div class="container-fluid">
        <div class="row">
          <div class="container col-md col-lg-6">
            <form  enctype="multipart/form-data" method="post" class="p-5 bg-white reg-form-pos">

              <h5>Enter your personal information</h5>

              <div class="row form-group">
                <div class="col-md-6">
                  <label for="name">Your First Name *</label>
                  <input type="text" id="fname" name="first" class="form-control" placeholder="Enter your name">
                </div>
                <div class="col-md-6">
                  <label for="name">Your Last Name *</label>
                  <input type="text" id="lname" name="last" class="form-control" placeholder="Enter your last name">
                </div>
              </div>

      			  <div class="row form-group">
                <div class="col-md-12">
                  <label for="phone">Phone Number *</label>
                  <input type="tel" id="phone" name="phone" class="form-control" placeholder="+63" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="email">Email Address *</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="password">Password *</label>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                </div>
              </div> 

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="email">Date of Birth *</label>
                  <input type="date" id="birthday" name="birth" class="form-control" placeholder="birthday">
                </div>
              </div>

			       <div class="row form-group">
                <div class="col-md-12">
                  <label for="address">Current Address (Street Name) *</label>
                  <input type="text" name="address" id="address" class="form-control" placeholder="Street Address">
                </div>
              </div>
              
              <div class="row form-group">
                  <div class="col-md-6">
                    <label for="city">City or Municipality *</label>
                      <select class="form-control" name="city">
                      <option>Select Here</option>
                      <option value="1">Ormoc City</option>
                      <option value="2">Kananga</option>
                      <option value="3">Merida</option>
                      <option value="4">Albuera</option>
                      <option value="5">Isabel</option>                
                      </select>
                    </div>

                  <div class="col-md-6">
                  <label for="email">Barangay</label>
                  <input type="text" name="address" id="email" class="form-control" placeholder="Number or name of brgy..">
                </div>

                </div>

                <h5 class="reg-title-bot">Enter your work information</h5>

			          <div class="row form-group">
                  <div class="col-md-12">
                    <label for="workexperience">Work Experience</label>
                      <select class="form-control" name="experience">
                      <option>How many years of experience?</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">Or more</option>
                      </select>
                    </div>
                </div>
             <div class="row form-group">
                <div class="col-md-12">
                  <label for="ID">Identification Card / ID *</label>
                    <select class="form-control" name="id_proof">
                    <option>Choose ID Proof</option>
                    <option value="tesda">TESDA ID</option>
                    <option value="lto">LTO Driving License ID</option>
                    <option value="umid">Unified Multi-Purpose Identification (UMID)</option>
                    <option value="senior">Senior Citizen ID</option>
                    <option value="others">Other government ID</option>
                    </option>
                    </select>
                    </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label for="id_proff_pic">Upload your ID Proof *</label>
                    <input type="file" name="id_picture" class="form-control" >
                  </div>
              </div>

			     <div class="row form-group">
                <div class="col-md-12">
                  <label for="category">Choose services you offer from customers *</label>
                      <select class="form-control" name="work" id="category">
                      <!-- Fetch data from category-->
                      </select>
                </div>
           </div>

           <div class="row form-group">
                <div class="col-md-6">
                      <label for="sub_category">Select specific service *</label>
                      <select class="form-control" name="subcategory" id="subcategory">
                       <!-- Fetch data from sub category-->
                      </select>
                      <p><strong><a href="#">+ Add more specific service</a></strong></p>
                  </div>

                  <div class="col-md-6">
                    <label for="rate">Asking price per service (₱) *</label>
                    <input type="text" name="price" id="price" class="form-control" placeholder="How much?">
                    <p>plus 20% for the admin maintenance fee</p>
                  </div>     
           </div>


              <div class="row form-group">
                  <div class="col-md-12">
                    <label for="email">Upload Your Profile Picture</label>
                    <input type="file"  name="picture" class="form-control" >
                  </div>
              </div>

              <div class="row form-group">
              <input type="checkbox" class="form-check-input" id="terms_condition">
              <label class="form-check-label" for="terms_condition">Yes, I Agree - By signing in, you agree the <a href="#">Terms and Conditions</a></label>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="registration" value="Sign Up to Be our partner" class="btn btn-primary pill px-4 py-2 new-btn pro-reg-btn">
                </div>
              </div>


            </form> <!-- end of form -->


          </div>
          </div> <!-- end of raw   -->
        </div>
      </div>
    </div>

  </div> <!-- end of site wrap -->

 

  <!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>


  </body>
</html>
