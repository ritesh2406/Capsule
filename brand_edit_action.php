<?php
include("db_connec.php");


if($_FILES['img']['name']!="")
{
    
   // echo "hello world";
    
    $img_name = $_FILES['img']['name'];
    
    $upload = "upload";
    
    $actual_path = $upload."/".$img_name;
    
    move_uploaded_file($_FILES['img']['tmp_name'], $actual_path);
    
    $bname = $_POST['addbrand'];
    
    $bdesc = $_POST['branddescription'];
    
    $bid = $_POST['id'];
    
    
    
    
    
    $sql1 = "UPDATE `brand_tbl` SET `bname` = '".$bname."', `bdescc` = '".$bdesc."', `bimg`='".$img_name."' WHERE `brand_tbl`.`brand_id` ='".$bid."'";
    
    mysqli_query($con, $sql1);
    
    header("location:viewbrand.php?cid=success");
    
    
    
    
} else {
    
    
    //echo "hello kolkata";
    
    $b_name  = $_POST['addbrand'];
    
    $bdesc = $_POST['branddescription'];
    
    $bimg = $_POST['imgname'];
    
    $bid = $_POST['id'];
    
    //echo $catid;
    
    $sql = "UPDATE `brand_tbl` SET `bname` = '".$b_name."', `bdescc` = '".$bdesc."', `bimg`='".$bimg."' WHERE `brand_tbl`.`brand_id` ='".$bid."'";
    
    //echo $sql;
    
    //exit();
    
    mysqli_query($con, $sql);
    
    header("location:viewbrand.php?cid=success");
    
    
    
    
}


?>
