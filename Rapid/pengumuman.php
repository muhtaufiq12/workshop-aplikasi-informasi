<?php
include('admin/includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Kelurahan Karah | Pengumuman</title>
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

    		<h2 class="text-center mt-3">Pengumuman</h2>
    		<hr>
    		
    		<div class="row">

    			<!-- Blog Entries Column -->
    			<div class="col-md-12 mt-3">


    				<!-- Blog Post -->
    				<?php 
    				if (isset($_GET['pageno'])) {
    					$pageno = $_GET['pageno'];
    				} else {
    					$pageno = 1;
    				}
    				$no_of_records_per_page = 8;
    				$offset = ($pageno-1) * $no_of_records_per_page;


    				$total_pages_sql = "SELECT COUNT(*) FROM tblposts";
    				$result = mysqli_query($con,$total_pages_sql);
    				$total_rows = mysqli_fetch_array($result)[0];
    				$total_pages = ceil($total_rows / $no_of_records_per_page);


    				$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblposts.Category as category,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts where tblposts.Is_Active=1 AND tblposts.Category='Pengumuman' order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
    				while ($row=mysqli_fetch_array($query)) {
    					?>

    					<div class="row mb-5">

    						<div class="col-md-4">
    							
    							<img class="img-thumbnail" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">

    						</div>

    						<div class="col-md-8">
    							
    							<h2><?php echo htmlentities($row['posttitle']);?></h2>
    							<p>Posted on <?php echo htmlentities($row['postingdate']);?></p>
    							<a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary">Read More &rarr;</a>
    						</div>
    					</div>

    					<?php } ?>
    					



    					<!-- Pagination -->


    					<ul class="pagination justify-content-center mb-4">
    						<li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
    						<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
    							<a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
    						</li>
    						<li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
    							<a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
    						</li>
    						<li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    					</ul>

    				</div>

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
