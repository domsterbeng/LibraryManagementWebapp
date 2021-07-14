<?php
    session_start();
    error_reporting(0);
    include('includes/dbconnection.php');
        
    
    $faid=$_SESSION['fosaid'];
    $id=$_GET['delid'];   
    $query=mysqli_query($con, "delete from tblbooks where ID='$id'");
    if ($query) {
        $msg="Book has been deleted.";
        header('location: list.php');
    }
    else
    {
        $msg="Something Went Wrong. Please try again";
    } 
?>