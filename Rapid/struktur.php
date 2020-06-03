<?php
include('admin/includes/config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kelurahan Karah - Arti Lambang</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/Logo-PKK.png" rel="icon">
  <link href="img/Logo-PKK.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#intro" class="scrollto"><span>Rapid</span></a></h1> -->
        <a href="#header" class="scrollto"><img src="img/Logo-PKK.png" alt="" class="img-fluid"></a>
        <a href="#header" class="scrollto"><img src="img/Logo_surabaya.gif" alt="" class="img-fluid"></a>
      </div>
      <?php include('navbar.php');?>
    </div>
  </header><!-- #header -->


  <?php 
$pagetype='strukturorganisasi';
$query=mysqli_query($con,"select PageTitle,PageImage from tblprofile where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-12 intro-info order-md-first order-last">
          <h2><center>STRUKTUR TP PKK<br>KELURAHAN <span> KARAH</span> 2019</h2>
        </div>
        <div class="col-lg-10">
        <div class="why-us-content">
        <div class="features wow bounceInUp clearfix">
            <center><img src="img/Logo-PKK.png" width="200" height="200"></i>
            <h4><b></b></h4>
        </div>
        <center><p><b>KELURAHAN KARAH, KECAMATAN JEMBANGAN, KOTA SURABAYA</b></p></center>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

      <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-12 wow bounceInUp" data-wow-duration="1.4s">
              <div class="box">
                <div class="icon"><img src="img/Logo-PKK.png" width="55" height="55"></div>
                <h4 class="title">BAGAN STRUKTUR TP PKK KELURAHAN KARAH 2019</a></h4><br>
                <img src="admin/postimages/<?php echo htmlentities($row['PageImage']);?>">
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </section><!-- #services -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg bg-light">

    <div class="container">


<div class="container">
  <center>
    
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mt-5 mb-5">
          <h4 class="text-uppercase mb-4">Kontak Kami</h4>
          <p class="lead mb-0"> Jl. Bibis Karah No 1 Surabaya
            <br>karahkelurahan22@gmail.com
            <br>Telp. 8280357</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mt-5 mb-5">
          <h4 class="text-uppercase mb-4">Ikuti Kami</h4>
          <a class="btn btn-outline-dark btn-social mx-1" href="#">
            <i class="fa fa-facebook"></i>
          </a>
          <a class="btn btn-outline-dark btn-social mx-1" href="#">
            <i class="fa fa-twitter"></i>
          </a>
          <a class="btn btn-outline-dark btn-social mx-1" href="#">
            <i class="fa fa-linkedin"></i>
          </a>
          <a class="btn btn-outline-dark btn-social mx-1" href="#">
            <i class="fa fa-instagram"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4 mt-5">
          <h4 class="text-uppercase mb-4">Tentang</h4>
          <p class="lead mb-0">Kelurahan Karah
            <br>Kecamatan Jambangan Kota Surabaya
            <br>Jawa Timur - Indonesia</p>
        </div>

      </div>
    </center>
    </div>
















      <div class="copyright">
        &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>