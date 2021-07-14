<?php
    session_start();
    error_reporting(0);
    include('includes/dbconnection.php');
    if (strlen($_SESSION['fosaid']==0)) {
    header('location:logout.php');
    } else{
        if(isset($_POST['submit']))
        {
            $genre=$_POST['genre'];
            
            $query=mysqli_query($con, "insert into tblgenre(Genre) value('$genre')");
            if ($query) {
            $msg="New Genre has been created.";
        } else
            {
                $msg="Something Went Wrong. Please try again";
            }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addgenre</title>

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
    <?php include_once('includes/leftbar.php');?>
    <div id="page-wrapper" class="gray-bg">
         <?php include_once('includes/header.php');?>
    <div class="row border-bottom"></div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Genre</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Add Genre</strong>
                    </li>
                </ol>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">        
                        <div class="ibox-content">
                        <p style="font-size:16px; color:red;"> <?php if($msg){echo $msg;} 
                            ?> </p>
                            <form id="form" action="#" class="wizard-big" method="post" name="submit">
                                <fieldset>
                                    <h2>Add Genre</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">    
                                                <input id="genre" name="genre" type="text" class="form-control required" required="true">
                                            </div>
                                            <div class="form-group">
                                            <p style="text-align: center;"><button type="submit" name="submit" class="btn btn-primary">Add</button></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-plus-circle" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset> 
                            </form>
                        </div>
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
</body>
</html>

<?php }  ?>