<?php
//echo "hello world";
include("db_connec.php");
if($_POST){
//print_r($_POST);    
    
$catname=$_POST['addcategory'];
$catdes=$_POST['categorydescription'];

$upd="UPDATE `category_tbl` SET 
category_name = `$catname`, 
category_descc = `$catdes`
WHERE `category_tbl`.`catid` = '".$_GET['catid']."'";

//echo $upd;
//exit();
        
mysqli_query($con,$upd);
header("location:viewcategory.php");
}
$sel="select * from category_tbl WHERE `category_tbl`.`catid` = '".$_GET['catid']."'";
$qry=mysqli_query($con,$sel);

//print_r($fetch);

?>
