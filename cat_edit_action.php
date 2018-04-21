<?php
include("db_connec.php");


if($_FILES['img']['name']!="")
{
    
   // echo "hello world";
    
    $img_name = $_FILES['img']['name'];
    
    $upload = "upload";
    
    $actual_path = $upload."/".$img_name;
    
    move_uploaded_file($_FILES['img']['tmp_name'], $actual_path);
    
    $catname = $_POST['addcategory'];
    
    $catdesc = $_POST['categorydescription'];
    
    $catid = $_POST['id'];
    
    
    
    
    
    $sql1 = "UPDATE `category_tbl` SET `category_name` = '".$catname."', `category_descc` = '".$catdesc."', `category_img`='".$img_name."' WHERE `category_tbl`.`catid` ='".$catid."'";
    
    mysqli_query($con, $sql1);
    
    header("location:viewcategory.php?cid=success");
    
    
    
    
} else {
    
    
    //echo "hello kolkata";
    
    $category_name  = $_POST['addcategory'];
    
    $catdesc = $_POST['categorydescription'];
    
    $catimg = $_POST['imgname'];
    
    $catid = $_POST['id'];
    
    //echo $catid;
    
    $sql = "UPDATE `category_tbl` SET `category_name` = '".$category_name."', `category_descc` = '".$catdesc."', `category_img`='".$catimg."' WHERE `category_tbl`.`catid` ='".$catid."'";
    
    //echo $sql;
    
    //exit();
    
    mysqli_query($con, $sql);
    
    header("location:viewcategory.php?cid=success");
    
    
    
    
}


?>
