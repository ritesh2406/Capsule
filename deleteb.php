<?php
include ('db_connec.php');
$del="DELETE FROM `brand_tbl` WHERE `brand_tbl`.`brand_id`='".$_GET['id']."'";


//echo $del;
//exit();
mysqli_query($con,$del);
if($del){
header('location:viewbrand.php?id=success');
}

/*$id = $_GET['catid'];

echo $id;*/
?>