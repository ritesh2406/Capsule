<?php
include("db_connec.php");
 /*if($_POST){

//print_r($_POST);
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
$upd="UPDATE `prod_tbl` SET 
`prod_name` = '".$addprod."', 
`prod_descc` = '".$proddesc."',
`prod_price` = '".$price."',
`color` = '".$color."',
`size` = '".$size."',
`stock` = '".$stock."'";
          if($img_name){
        
    $upd.="prod_image='".$img_name."'";
    
    }
    
$upd.="WHERE `prod_tbl`.`productid` = '".$_POST['id']."'";

//echo $upd;
//exit();
        
mysqli_query($con,$upd);
header("location:viewprod.php");
                                        
                }*/
                



//echo print_r($_POST);

if($_FILES['img']['name']!="")
{
    
   // echo "hello world";
    
    $img_name = $_FILES['img']['name'];
    
    $upload = "upload";
    
    $actual_path = $upload."/".$img_name;
    
    move_uploaded_file($_FILES['img']['tmp_name'], $actual_path);
    $addprod=$_POST['prodname'];
    $proddesc=$_POST['proddescc'];
    $price=$_POST['price'];
    $color=$_POST['color'];
    $size=$_POST['size'];
    $stock=$_POST['stock'];
    $featured=$_POST['featured'];
    $recommended=$_POST['recommended'];
   
    $prodid = $_POST['id'];
    
    $sql1 = "UPDATE `prod_tbl` SET `prod_name` = '".$addprod."', `prod_descc` = '".$proddesc."', `prod_image`='".$img_name."',`prod_price`='".$price."',`color`='".$color."',`size`='".$size."',`stock`='".$stock."',
    `featured`='".$featured."',`recommended`='".$recommended."' WHERE `prod_tbl`.`productid` ='".$prodid."'";
    
    mysqli_query($con, $sql1);
    
    header("location:viewprod.php");
    
} 

else {
    
    
    //echo "hello kolkata";
    
    $addprod=$_POST['prodname'];
    $proddesc=$_POST['proddescc'];
    $prodimg = $_POST['imgname'];
    $price=$_POST['price'];
    $color=$_POST['color'];
    $size=$_POST['size'];
    $stock=$_POST['stock'];
    $featured=$_POST['featured'];
    $recommended=$_POST['recommended'];
    
    
    
    $prodid = $_POST['id'];
    
    //echo $productid;
    
    $sql = "UPDATE `prod_tbl` SET `prod_name` = '".$addprod."', `prod_descc` = '".$proddesc."', `prod_image`='".$prodimg."',`prod_price`='".$price."',`color`='".$color."',`size`='".$size."',`stock`='".$stock."', 
    `featured`='".$featured."',`recommended`='".$recommended."' WHERE `prod_tbl`.`productid` ='".$prodid."'";
    
    //echo $sql;
    
    //exit();
    
    mysqli_query($con, $sql);
    
    header("location:viewprod.php?cid=success");
    
}

?>
