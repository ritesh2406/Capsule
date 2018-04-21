<?php 
 error_reporting(E_ERROR);
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"ecommerce");


if($_POST){
    
   $cat_id = $_POST['parent_category'];   
   $addbrand=$_POST['addbrand'];
   $branddesc=$_POST['branddescription'];
   if(!empty($_FILES)){
        $img_name = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            }
     //print_r($_POST);
   $insert="INSERT INTO `brand_tbl` (`cat_id`, `bname`, `bdescc`, `bimg`) VALUES ('$cat_id','$addbrand', '$branddesc', '$img_name')";
    
    //echo $insert;
    
    //exit();
    
    mysqli_query($con, $insert);

   // mysqli_query($con,$insert);
}

header("location:addbrand.php")
           ?>
