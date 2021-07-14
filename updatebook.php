<?php
    session_start();
    error_reporting(0);
    include('includes/dbconnection.php');
    if (strlen($_SESSION['fosaid']==0)) {
        header('location:logout.php');
    } else{

    if(isset($_POST['submit']))
    {
        $faid=$_SESSION['fosaid'];
        $bookid=$_GET['editid'];
        $title=$_POST['title'];
        $author=$_POST['author'];
        $publishedyear=$_POST['publishedyear'];
        $isbn=$_POST['isbn'];
        $genre=$_POST['genre'];
        $quantity=$_POST['quantity'];
        
        $query=mysqli_query($con, "update tblbooks set Title='$title',Author='$author',PublishedYear='$publishedyear',ISBN='$isbn',Genre='$genre', Quantity='$quantity' where ID='$bookid'");
        if ($query) {
            $msg="Book has been Updated.";
        }
        else
        {
            $msg="Something Went Wrong. Please try again";
        }
    }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updatebook</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
    <?php include_once('includes/leftbar.php');?>
        <div id="page-wrapper" class="gray-bg">
             <?php include_once('includes/header.php');?>
        <div class="row border-bottom">
        
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Book</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="list.php">Home</a>
                    </li>    
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                        <?php
                            $bookid=$_GET['editid'];
                            $ret=mysqli_query($con,"select * from tblbooks where ID='$bookid'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {
                        ?>

                            <form id="submit" action="#" class="wizard-big" method="post" name="submit">
                                <p style="font-size:16px; color:red;"> <?php if($msg){
                                    echo $msg;} ?> </p>
                                    <fieldset>
                                          <div class="form-group row"><label class="col-sm-2 col-form-label">Title:</label>
                                                <div class="col-sm-10">
                                                    <input name='title' id="title" class="form-control white_bg" value="<?php  echo $row['Title'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Author:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="author" value="<?php  echo $row['Author'];?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Published Year:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="publishedyear" value="<?php  echo $row['PublishedYear'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">ISBN:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="isbn" value="<?php  echo $row['ISBN'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Genre:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" name="genre" value="<?php  echo $row['Genre'];?>"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Quantity:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" name="quantity" value="<?php  echo $row['Quantity'];?>"></div>
                                            </div>
                                        </fieldset>
                                </fieldset>
          
                                <p style="text-align: center;"><button type="submit" name="submit" class="btn btn-primary">Update</button></p>
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
<?php } ?>