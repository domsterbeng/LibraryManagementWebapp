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
                        <h2>Search Book</h2>
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

                <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <form name="directory" method="post" class="wizard-big">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-label-group">
                                                <p style="text-align: center; font-size: 18px"><strong>Search by Author, Genre, and/or Year:</strong>      <input type="text" id="searchdata" name="searchdata" cclass="form-control white_bg" required="required" autofocus="autofocus" ></p>            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <p style="text-align: center; "><button type="submit" name="search" class="btn btn-info btn-min-width mr-1 mb-1">Search</button></p>
                            </form> 

                                <?php
                                    if(isset($_POST['search']))
                                    { $sdata=$_POST['searchdata'];
                                ?>
                                 <table class="table table-bordered mg-b-0">
                                    <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Published Year</th>
                                    <th>ISBN</th>
                                    <th>Genre</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                
                                <?php
                                    $ret=mysqli_query($con,"select * from tblbooks where Author like '$sdata%' or Genre like '$sdata%' or PublishedYear like '$sdata%'");
                                    $num=mysqli_num_rows($ret);
                                    if($num>0){
                                    $cnt=1;
                                    while ($row=mysqli_fetch_array($ret)) {
                                ?>

                                <tbody>
                                    <tr>
                                    <td><?php echo $cnt;?></td>
                                
                                    <td><?php  echo $row['Title'];?></td>
                                    <td><?php  echo $row['Author'];?></td>
                                    <td><?php  echo $row['PublishedYear'];?></td>
                                    <td><?php  echo $row['ISBN'];?></td>
                                    <td><?php  echo $row['Genre'];?></td>
                                    <td><?php  echo $row['Quantity'];?></td>
                                    <td><a href="updatebook.php?editid=<?php echo $row['ID'];?>">Edit</a>
                                    <td><a href="deletebook.php?delid=<?php echo $row['ID'];?>">Delete</a>
                                    </tr>
                                    <?php 
                                        $cnt=$cnt+1;
                                        } } else { 
                                    ?>
                                    <tr>
                                        <td colspan="8"> No record found against this search</td>
                                    </tr>
                                    <?php } }?>
                                    </tbody>
                                </table>     
                            </div>
                        </div>
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