<?php
include ('db_connec.php');
$del="DELETE FROM `customers` WHERE `customers`.`cust_id`='".$_GET['id']."'";


//echo $del;
//exit();
mysqli_query($con,$del);
if($del){
header('location:view_order_details.php?id=success');
}

/*$id = $_GET['catid'];

echo $id;*/
?>