<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vacant Rooms</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz - v2.1.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>AHMS<span></span></h1>
      </a>

      <nav id="navbar" class="navbar">
      <ul>

<li><a class="nav-link scrollto active" href="indehtml#home">Home</a></li>
<li><a class="nav-link scrollto" href="index.html#about">About</a></li>
<li><a class="nav-link scrollto" href ="index.html#Apply">Apply for Hostel</a></li>
<li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
<li><a href="index.html#portfolio"><span>Hostel Tour</span> </a></li>
<li><a class="nav-link scrollto" href ="vacant.html">Vacant</a></li>
<li><a class="nav-link scrollto" href="index.html#team">Wardens</a></li>
<li class="dropdown"><a href="#"><span>Important Links</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
<ul>
              <li><a href="index.index#faq" class="active"> FAQ</a></li>
              <li><a href="https://www.dauniv.ac.in/public/frontassets/hostels/Hostel%20Entry.pdf">Notice for New Students</a></li>
              <li><a href="https://www.dauniv.ac.in/public/frontassets/hostels/fees%2019-20.pdf">Fee Structure</a></li>
              <li><a href="https://www.dauniv.ac.in/public/frontassets/hostels/Hostel-Details21.pdf">Wardens' Contact Info</a></li>
            </ul>
   
</li>
<li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
</ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="LoginMain.php">Log In</a>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>A H M S</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Vacant</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->
    <!--Vacant Seat Section-->
    <section id="vacant" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Check Hostels</h2>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="pricing-item featured">

              <div class="pricing-header">
                <h3>Vacant Seats</h3>
                <h4><sup></sup><span></span></h4>

<div class = "">
<HTML>
<?php
$db_host = "localhost";
$db_username = "root";
$db_pass = "vinayak123";
$db_name = "AHMS";
$con = mysqli_connect($db_host,$db_username,$db_pass,$db_name);
$result = mysqli_query($con, "SELECT Hostel_name from hostels");
$result2 = mysqli_query($con,"SELECT * from hostels");
?>
<form name = "form2" action = "" method = "post" enctype="multipart/form-data">
<select name = "Hostels" id = "HostelID">
<option value = "">---Select---</option>
            <?php 
            while($rows = mysqli_fetch_array($result)){
            ?>
            <option value = "<?php echo $rows["Hostel_name"];  ?>"><?php echo $rows["Hostel_name"];  ?></option>
            <?php
            }
            ?>
        </select>

                      </div>
              </div>
              <ul>
              </ul>
              <div class="text-center mt-auto">
              <form name = "formA" action = "" method = "post">
              <button class ="buy-btn" href = "index.php#vacant" type = "save" name = "checkvacant" value= "add">Check Vacant Rooms</a>
              </div>
              </form>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
          </div>

        </div>

      </div>

      <!-- PHP and data base connectivity  -->
<?php
  if (isset($_POST['checkvacant'])) {  
   extract($_POST);  
   $servername = "localhost";  
   $username   = "root";  
   $password   = "vinayak123";  
   $dbname     = "AHMS";  
   // Create connection  
   $conn       = new mysqli($servername, $username, $password, $dbname);  
   // Check connection  
   if ($conn->connect_error) {  
       die("Connection failed: " . $conn->connect_error);  
   }
   $choice= $_POST['Hostels'];
   $sql = "SELECT * FROM hostels where hostel_name = '$choice'";
   $result = $conn->query($sql);
   if ($result->num_rows > 0)
  {
      // output data of each row
      while($row = $result->fetch_assoc()) 
      echo "<center><div class='col-lg-2' data-aos='zoom-in' data-aos-delay='400'><div class='row gy--3'><div class='text-center mt-auto'><div class='pricing-item featured'><div class='text-center mt-auto'><center><input type='text' value='$row[Vacant_rooms]'/></form>";			
  }
    else
    {
      echo "<center><div class='col-lg-2' data-aos='zoom-in' data-aos-delay='400'><div class='row gy--2'><div class='text-center mt-auto'><div class='pricing-item featured'><div class='text-center mt-auto'><center><input type='text' value='Select Hostel from list'/></form>";			
    }
$conn->close();
  }
?> 
<!-- php connectivity ends here  -->

    </section>

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>HeroBiz</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>
<div class="footer-content">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6">
        <div class="footer-info">
          <h3>Hostoura</h3>
          <p>
            Takshila Campus, Khandwa Rd, Indore,Madhya Pradesh 452001 <br>
            <br><br>
            <strong>Phone:</strong> +91 1234567891<br>
            <strong>Email:</strong> hostoura@example.com<br>
          </p>
        </div>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Our Newsletter</h4>
        <p>Subscribe to our Newletter, to get updated.</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>

      </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>HeroBiz</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
    </div>
  </div>
</div>

<div class="footer-legal text-center">
  <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

    <div class="d-flex flex-column align-items-center align-items-lg-start">
      <div class="copyright">
        &copy; Copyright <strong><span>ViNiS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Developed by <a href="https://bootstrapmade.com/">ViNS</a>
      </div>
    </div>

    <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

  </div>
</div>

</footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>