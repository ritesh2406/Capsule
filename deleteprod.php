<?php
include ('db_connec.php');
$del="DELETE FROM `prod_tbl` WHERE `prod_tbl`.`productid`='".$_GET['id']."'";


//echo $del;
//exit();
mysqli_query($con,$del);
if($del){
    //echo("Records Deleted Successfully");
    header('location:viewprod.php?id=success');
}





/*$id = $_GET['catid'];

echo $id;*/
?>