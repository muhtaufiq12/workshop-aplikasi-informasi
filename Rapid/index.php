<?php
include('admin/includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kelurahan Karah - Beranda</title>
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

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Beranda</a></li>
                    <li class="drop-down"><a href="profil.html">Profil</a>
            <ul>
              <li class="drop-down"><a href="#">Visi Misi</a>
                <ul>
                  <li><a href="visimisi-karah.html">Kelurahan Karah</a></li>
                  <li><a href="visimisi-pkk.html">TP-PKK Kelurahan Karah</a></li>
                </ul>
              </li>
              <li><a href="tujuan.html">Tujuan</a></li>
              <li><a href="struktur.html">Struktur Organisasi</a></li>
              <li><a href="arti-lambang.html">Arti Lambang PKK</a></li>
              <li><a href="sejarah.html">Sejarah</a></li>
              <li><a href="marspkk.html">Mars PKK</a></li>
              <li><a href="10program.html">10 Program Pokok PKK</a></li>
            </ul>
          </li>
          <li><a href="berita.html">Berita</a></li>
          <li><a href="proker.html">Program Kerja</a></li>
          <li><a href="up2k.html">UP2K</a></li>
          <li class="drop-down">
            <a href="#">Data</a>
            <ul>
              <li><a href="datakelurahan.html">Data Kelurahan</a></li>
              <li><a href="datatppkk.html">Data TP PKK</a></li>
            </ul>
          </li>
          <li><a href="pengumuman.html">Pengumuman</a></li>
          <li><a href="galeri.html">Galeri</a></li>
          <li><a href="kontak.html">Kontak</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
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
              <img src="img/lurah.jpeg" width="300" height="600">
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
    <section id="about" class="section-bg bg-light">

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
              <img src="img/ketua-pkk.jpeg" alt="">
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

          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <img src="img/Berita/1.jpeg" width="200" height="200">
                <div class="portfolio-info">
                  <div>
                    <a href="img/Berita/1.jpeg" class="link-preview" data-lightbox="portfolio" data-title="POKJA IV" title="Preview"><i class="ion ion-eye"></i></a>
                  </div>
                </div>
              <p><h4 class="title"><a href="berita.html">Kenali Gejala Infeksi Corona Dari Hari Ke Hari</a></h4></p>
              <p class="description">Edukasi kepada warga mengenai virus ini terus dilakukan, terutama mengenai gejala yang sebaiknya diketahui 
                sehingga setiap orang bisa membatasi dirinya dan tak menjadi pembawa virus yang baru.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <video width="400" height="auto" controls>
                <source src="img/Berita/2.mp4" type="video/mp4" width="400">
              </video>
              <p><h4 class="title"><a href="berita.html">Hindari Bersalaman Untuk Pencegahan Corona</a></h4></p>
              <p class="description">Tidak salaman bukan berarti tidak berteman. Hal ini merupakan salah satu upaya Pencegahan
                penyebaran virus Covid-19 atau Corona dalam lingkungan Kelurahan Karah
              </p>
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
