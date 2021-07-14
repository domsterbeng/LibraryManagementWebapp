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
            $title=$_POST['title'];
            $author=$_POST['author'];
            $publishedyear=$_POST['publishedyear'];
            $isbn=$_POST['isbn'];
            $genre=$_POST['genre'];
            $quantity=$_POST['quantity'];
            
            $query=mysqli_query($con, "insert into tblbooks(Title,Author,PublishedYear,ISBN,Genre,Quantity) value('$title','$author','$publishedyear','$isbn','$genre','$quantity')");
            if ($query) {
                $msg="Book has been added.";
            } else {
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
    <title>AddBook</title>

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
                <h2>Add Book</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="list.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Add Book</strong>
                    </li>
                </ol>
            </div>
        </div>
        
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">   
                        <div class="ibox-content">
                            <p style="font-size:16px; color:red;"> 
                            <?php if($msg){echo $msg;} ?> 
                            </p>
                            <form id="submit" action="#" class="wizard-big" method="post" name="submit" enctype="multipart/form-data">
                                <fieldset>
                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Title:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="title" required="true"></div>
                                        </div>
                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Author:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="author" required="true"></div>
                                        </div>                                       
                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Published Year:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="publishedyear" required="true"></div>
                                        </div>
                                        <div class="form-group row"><label class="col-sm-2 col-form-label">ISBN:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="isbn" required="true"></div>
                                        </div>
                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Genre:</label>
                                            <div class="col-sm-10"><select name='genre' id="genre" class="form-control white_bg" required="true">
                                            <?php
                                                $query=mysqli_query($con,"select * from tblbooks");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                            ?>    
                                                <option value="<?php echo $row['Genre'];?>"><?php echo $row['Genre'];?></option>
                                            <?php } ?>
                                            </select></div>
                                        </div>
                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Quantity:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="quantity" required="true"></div>
                                        </div>
                                </fieldset>
                                <p style="text-align: center;"><button type="submit" name="submit" class="btn btn-primary">Submit</button></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once('includes/footer.php');?>

    </div>
</div>

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

<?php }  ?>