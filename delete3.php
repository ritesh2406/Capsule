<?php
include ('db_connec.php');
$del="DELETE FROM `contact_us_tbl` WHERE `contact_us_tbl`.`userid`='".$_GET['id']."'";

/*$id=$_GET['id'];
echo $id;
exit();*/
mysqli_query($con,$del);
//if($del)
header('location:contact_us.php');


/*$id = $_GET['catid'];

echo $id;*/
?>