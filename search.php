<?php
    session_start();
    error_reporting(0);
    include('includes/dbconnection.php');
    if (strlen($_SESSION['fosaid']==0)) {
    header('location:logout.php');
    } else{
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Book</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> 
</head>
<body>
<div id="wrapper">
    <?php include_once('includes/leftbar.php'); ?>

    <div id="page-wrapper" class="gray-bg">
        <?php include_once('includes/header.php');?>

            <div class="row border-bottom"></div>
                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2>Search Order</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="list.php">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <strong>Search</strong>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('includes/footer.php');?>

    </div>
</div>

<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- Steps -->
<script src="js/plugins/steps/jquery.steps.min.js"></script>

<!-- Jquery Validate -->
<script src="js/plugins/validate/jquery.validate.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/animsition.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/headroom.js"></script>
<script src="js/masterchief.min.js"></script>

</body>
</html>