<?php
include ('db_connec.php');
$del="DELETE FROM `signup_tbl` WHERE `signup_tbl`.`id`='".$_GET['id']."'";


//echo $del;
//exit();
mysqli_query($con,$del);
if($del){
header('location:view_registered_users.php?id=success');
}

/*$id = $_GET['catid'];

echo $id;*/
?>