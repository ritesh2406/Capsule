<?php
include ('db_connec.php');
$del="DELETE FROM `category_tbl` WHERE `category_tbl`.`catid`='".$_GET['id']."'";


//echo $del;
//exit();
mysqli_query($con,$del);
if($del){
header('location:viewcategory.php?id=success');
}

/*$id = $_GET['catid'];

echo $id;*/
?>