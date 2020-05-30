<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:login.php');
} elseif (isset($_POST['update'])) {
    $member_of = $_POST['member_of'];
    $name = $_POST['name'];
    $content = $_POST['content'];

    $query = mysqli_query($con, "INSERT INTO tbldatapokja(type,pokja,name,content,member_of) VALUES(2,0,'$name','$content','$member_of')");
    if ($query) {
        $msg = "Data successfully Added ";
    } else {
        $error = "Something went wrong . Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kelurahan Karah | Admin Panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/Logo-PKK.png" rel="icon">
    <link href="img/Logo-PKK.png" rel="apple-touch-icon">

    <!-- Summernote css -->
    <link href="../plugins/summernote/summernote.css" rel="stylesheet" />

    <!-- Select2 -->
    <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Jquery filer css -->
    <link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
    <link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
    <script src="assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <?php include('includes/topheader.php'); ?>
        <!-- ========== Left Sidebar Start ========== -->
        <?php include('includes/leftsidebar.php'); ?>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">


                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Add Data </h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="#">Pages</a>
                                    </li>

                                    <li class="active">
                                        Add Data
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-sm-6">
                            <!---Success Message--->
                            <?php if ($msg) { ?>
                                <div class="alert alert-success" role="alert">
                                    <strong>Well done!</strong> <?php echo htmlentities($msg); ?>
                                </div>
                            <?php } ?>

                            <!---Error Message--->
                            <?php if ($error) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> <?php echo htmlentities($error); ?></div>
                            <?php } ?>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="p-6">
                                <div class="">
                                    <form name="visimisi" method="post">
                                        <div class="form-group m-b-20">
                                            <label>Data Name</label>
                                            <input type="text" class="form-control" id="pagetitle" name="name" required>
                                        </div>
                                        <label>For POKJA</label>
                                        <select name="member_of">
                                            <option value="1">I</option>
                                            <option value="2">II</option>
                                            <option value="3">III</option>
                                            <option value="4">IV</option>
                                        </select>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box">
                                                    <textarea class="summernote" name="content" required><?php echo htmlentities(
                                                        '<div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
                                                        <div class="box">
                                                            <h4 class="title">Title Sample</a></h4>
                                                            <h6 class="description">Description Sample</h6>
                                                            <ul>
                                                                <li class="description"><a href="#" download="DATA KEGIATAN PKK 2018.pdf">Content Sample</a></li>
                                                            </ul>
                                                        </div>
                                                        </div>'
                                                        ) ?></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <button type="submit" name="update" class="btn btn-success waves-effect waves-light">Save</button>

                                    </form>
                                </div>
                            </div> <!-- end p-20 -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->



                </div> <!-- container -->

            </div> <!-- content -->

            <?php include('includes/footer.php'); ?>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="../plugins/switchery/switchery.min.js"></script>

    <!--Summernote js-->
    <script src="../plugins/summernote/summernote.min.js"></script>
    <!-- Select 2 -->
    <script src="../plugins/select2/js/select2.min.js"></script>
    <!-- Jquery filer js -->
    <script src="../plugins/jquery.filer/js/jquery.filer.min.js"></script>

    <!-- page specific js -->
    <script src="assets/pages/jquery.blog-add.init.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script>
        jQuery(document).ready(function() {

            $('.summernote').summernote({
                height: 400, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
            // Select2
            $(".select2").select2();

            $(".select2-limiting").select2({
                maximumSelectionLength: 2
            });
        });
    </script>
    <script src="../plugins/switchery/switchery.min.js"></script>

    <!--Summernote js-->
    <script src="../plugins/summernote/summernote.min.js"></script>




</body>

</html>