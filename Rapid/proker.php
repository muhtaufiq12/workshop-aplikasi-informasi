<?php
include('admin/includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Kelurahan Karah - Program Kerja</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/Logo-PKK.png" rel="icon">
  <link href="img/Logo-PKK.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <!-- <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Program Kerja<br>PKK Kelurahan <span>Karah</span></h2>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/Logo-PKK.png" width="400" height="400">
        </div>
      </div>

    </div>
  </section>
  <!-- #intro -->

  <main id="main">

    <section id="proker">
      <br>
      <br>
      <div class="container">
        <div class="container">
          <div class="page-header">
          </div>
          <div id="timeline">
            <div class="row timeline-movement timeline-movement-top">
              <h2>Program Kerja</h2>
            </div>
            <div class="row timeline-movement">

              <div class="timeline-badge">
                <span class="timeline-balloon-date-month">POKJA</span><br>
                <span class="timeline-balloon-date-day">I</span>
                <!-- <span class="timeline-balloon-date-month">Pokja</span> -->
              </div>


              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel credits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Penghayatan Dan Pengamalan Pancasila</span></a></li>
                        <li>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Porg. 1</small></p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel debits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Kegiatan</span></a></li>
                        <li>
                          <?php
                          $query = mysqli_query($con, "select content from tblproker where id=1");
                          $row = mysqli_fetch_array($query);
                            echo $row['content'];
                          ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel credits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Gotong Royong</span></a></li>
                        <li>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Porg. 2</small></p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6  timeline-item">
                <div class="row">

                  <div class="col-sm-11">
                    <div class="timeline-panel debits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Kegiatan</span></a></li>
                        <li><?php
                          $query = mysqli_query($con, "select content from tblproker where id=2");
                          $row = mysqli_fetch_array($query);
                            echo $row['content'];
                          ?> 
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--due -->

            <div class="row timeline-movement">


              <div class="timeline-badge">
                <span class="timeline-balloon-date-month">POKJA</span> <br>
                <span class="timeline-balloon-date-day">II</span>
                <!-- <span class="timeline-balloon-date-month">APR</span> -->
              </div>
              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel credits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Pendidikan dan Keterampilan</span></a></li>
                        <li>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Prog. 6</small></p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel debits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Kegiatan</span></a></li>
                        <li>
                        <?php
                          $query = mysqli_query($con, "select content from tblproker where id=3");
                          $row = mysqli_fetch_array($query);
                            echo $row['content'];
                          ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel credits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Pengembangan Kehidupan Berkoperasi</span></a></li>
                        <li>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Prog. 8</small></p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6  timeline-item">
                <div class="row">

                  <div class="col-sm-11">
                    <div class="timeline-panel debits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Kegiatan</span></a></li>
                        <li>
                        <?php
                          $query = mysqli_query($con, "select content from tblproker where id=4");
                          $row = mysqli_fetch_array($query);
                            echo $row['content'];
                          ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row timeline-movement">


              <div class="timeline-badge">
                <span class="timeline-balloon-date-month">POKJA</span>
                <span class="timeline-balloon-date-day">III</span>
                <!-- <span class="timeline-balloon-date-month">APR</span> -->
              </div>

              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel credits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Pangan</span></a></li>
                        <li>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Prog. 3</small></p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel debits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Kegiatan</span></a></li>
                        <li>
                        <?php
                          $query = mysqli_query($con, "select content from tblproker where id=5");
                          $row = mysqli_fetch_array($query);
                            echo $row['content'];
                          ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel credits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Sandang</span></a></li>
                        <li>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Prog. 4</small></p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel debits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Kegiatan</span></a></li>
                        <li><?php
                          $query = mysqli_query($con, "select content from tblproker where id=6");
                          $row = mysqli_fetch_array($query);
                            echo $row['content'];
                          ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel credits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Perumahan dan Tata Laksana Rumah Tangga</span></a></li>
                        <li>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Prog. 5</small></p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel debits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Kegiatan</span></a></li>
                        <li><?php
                          $query = mysqli_query($con, "select content from tblproker where id=7");
                          $row = mysqli_fetch_array($query);
                            echo $row['content'];
                          ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row timeline-movement">


              <div class="timeline-badge">
                <span class="timeline-balloon-date-month">POKJA</span>
                <span class="timeline-balloon-date-day">IV</span>
              </div>

              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel credits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Kesehatan</span></a></li>
                        <li>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Prog. 7</small></p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel debits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Kegiatan</span></a></li>
                        <li><?php
                          $query = mysqli_query($con, "select content from tblproker where id=8");
                          $row = mysqli_fetch_array($query);
                            echo $row['content'];
                          ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel credits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Kelestarian Lingkungan Hidup</span></a></li>
                        <li>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Prog. 9</small></p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel debits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Kegiatan</span></a></li>
                        <li><?php
                          $query = mysqli_query($con, "select content from tblproker where id=9");
                          $row = mysqli_fetch_array($query);
                            echo $row['content'];
                          ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel credits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Perencanaan Kesehatan</span></a></li>
                        <li>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Prog. 10</small></p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6  timeline-item">
                <div class="row">
                  <div class="col-sm-11">
                    <div class="timeline-panel debits">
                      <ul class="timeline-panel-ul">
                        <li><a href=""><span class="importo">Kegiatan</span></a></li>
                        <li><?php
                          $query = mysqli_query($con, "select content from tblproker where id=10");
                          $row = mysqli_fetch_array($query);
                            echo $row['content'];
                          ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

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