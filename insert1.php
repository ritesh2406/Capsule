<?php 
 error_reporting(E_ERROR);
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"ecommerce");


if($_POST){
   $parentid = $_POST['parent_category'];
   $addprod=$_POST['prodname'];
   $proddesc=$_POST['proddescc'];
    if(!empty($_FILES)){
        $img_name = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            }
   $price=$_POST['price'];
   $color=$_POST['color'];
   $size=$_POST['size'];
   $stock=$_POST['stock'];
   $featured=$_POST['featured'];
   $recommended=$_POST['recommended'];
   
     //print_r($_POST);
    $insert="INSERT INTO `prod_tbl` (`catid`,`prod_name`, `prod_descc`, `prod_image`,`prod_price`,`color`,`size`,`stock`,`featured`,`recommended`) VALUES ('$parentid','$addprod', '$proddesc','$img_name','$price','$color','$size','$stock','$featured','$recommended')";
    
    //echo $insert;
    
    //exit();
    
   // print_r($_FILES);
    //exit();
    mysqli_query($con,$insert);
}

header("location:addproduct.php")
           ?>
