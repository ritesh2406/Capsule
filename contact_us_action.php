<?php 
 error_reporting(E_ERROR);
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"ecommerce");


if($_POST){
    $userid=$_POST['userid'];
   //$cat_id = $_POST['parent_category'];   
   $name=$_POST['name'];
   $email=$_POST['email'];
   $title=$_POST['subject'];    
   $mdescc=$_POST['message'];
   $date=date("Y-m-d");
   
     //print_r($_POST);
   $insert="INSERT INTO `contact_us_tbl` (`userid`, `name`,`email`,`mtitle`, `mdescc`,`date` ) VALUES ('$userid','$name','$email','$title', '$mdescc','$date')";
    
    //echo $insert;
    
    //exit();
    
    mysqli_query($con, $insert);
    //echo "success";

   // mysqli_query($con,$insert);
}

header("location:contact_us.php")
//echo ("Hello World");
           ?>
