<?php
include('admin/includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Kelurahan Karah | Galeri</title>
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
    <section id="intro" class="clearfix" style="  height: 30vh;">

    </section><!-- #intro -->

    <main id="main">

    	<!-- Page Content -->
    	<div class="container">

    		<h2 class="text-center mt-3">Galeri</h2>
        <p class="text-center">Berikut ini adalah galeri yang berisi dokumentasi kegiatan PKK di Kelurahan Karah</p>
    		<hr>
    		
    		<div class="row mt-5 mb-5">


                        <?php
            $query=mysqli_query($con,"select tblgaleri.id as pid,tblgaleri.PostTitle as posttitle,tblgaleri.PostImage,tblgaleri.PostDetails as postdetails,tblgaleri.PostingDate as postingdate,tblgaleri.PostUrl as url from tblgaleri where tblgaleri.Is_Active=1 order by tblgaleri.id desc limit 3");
            while ($row=mysqli_fetch_array($query)) {
              ?>



<div class="col-md-4">
                    <div class="card">
                      <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
                        <div class="card-body">
                            <h6 class="card-title"><a href="galeri-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary"><?php echo htmlentities($row['posttitle']);?> &rarr;</a></h6>

                        </div>
                  
                    </div>
                </div>



              <?php } ?>

    			</div>
    			<!-- /.row -->

    		</div>
    		<!-- /.container -->
























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
