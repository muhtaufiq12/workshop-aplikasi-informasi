<?php
include('admin/includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kelurahan Karah | Beranda</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/Logo-PKK.png" rel="icon">
  <link href="img/Logo-PKK.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">

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
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
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

  <!--==========================
    Intro Section
    ============================-->
    <section id="intro" class="clearfix" style="background: #f5f8fd url('img/intro-bg1.jpg') center top no-repeat; background-size: cover;">
      <div class="container d-flex h-100">
        <div class="row justify-content-center align-self-center">

          <div class="col-md-12 intro-info">
            <h2>Kelurahan Karah &</h2>
            <h2>Tim Penggerak PKK Kelurahan Karah</h2>
            <h2>Kecamatan Jambangan Kota Surabaya</h2>
          </div>

        </div>

      </div>
    </section><!-- #intro -->

    <main id="main">

    <!--==========================
      About Us Section
      ============================-->
      <section id="about">

        <div class="container">
          <div class="row">

            <div class="col-lg-5 col-md-6">
              <div class="about-img">
                <img src="img/lurah.jpg" alt="">
              </div>
            </div>

            <div class="col-lg-7 col-md-6">
              <div class="about-content">

                <?php 
                $pagetype='sambutanlurah';
                $query=mysqli_query($con,"select PageTitle,Description from tblberanda where PageName='$pagetype'");
                while($row=mysqli_fetch_array($query))
                {

                  ?>

                  <h2><?php echo htmlentities($row['PageTitle'])?></h2>
                  <p><?php echo $row['Description'];?></p>

                  <?php } ?>

                </div>
              </div>
            </div>
          </div>

        </section><!-- #about -->

        <!--==========================
      About Us Section
      ============================-->
      <section id="about" class="bg-light">

        <div class="container">
          <div class="row">

            <div class="col-lg-7 col-md-6">
              <div class="about-content">

                <?php 
                $pagetype='sambutantppkk';
                $query=mysqli_query($con,"select PageTitle,Description from tblberanda where PageName='$pagetype'");
                while($row=mysqli_fetch_array($query))
                {

                  ?>

                  <h2><?php echo htmlentities($row['PageTitle'])?></h2>
                  <p><?php echo $row['Description'];?></p>

                  <?php } ?>

                </div>
              </div>

              <div class="col-lg-5 col-md-6">
                <div class="about-img">
                  <img src="img/tppkk.jpg" alt="">
                </div>
              </div>

            </div>
          </div>

        </section><!-- #about -->

    <!--==========================
      Services Section
      ============================-->
      <section id="services" class="section-bg bg-white">
        <div class="container">

          <header class="section-header">
            <h3>Berita Terbaru</h3>
          </header>

          <div class="row">

            <?php
            $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblposts.Category as category,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts where tblposts.Is_Active=1 AND tblposts.Category='Berita' order by tblposts.id desc limit 3");
            while ($row=mysqli_fetch_array($query)) {
              ?>



<div class="col-md-4">
                    <div class="card">
                      <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlentities($row['posttitle']);?></h5>
<a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($row['postingdate']);?>
           
            </div>
                    </div>
                </div>











              <?php } ?>

          </div>

        </div>
      </section><!-- #services -->

    </main>

  <!--==========================
    Footer
    ============================-->

    <?php include('footer.php');?>

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
