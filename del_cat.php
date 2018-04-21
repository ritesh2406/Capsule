<?php
include('db_connec.php');
$del="delete from cart where cart_id='".$_GET['id']."'";
mysqli_query($con,$del);
//echo $del;
//exit();
if($del){
   // echo("Product Deleted Successfully");
header('location:cart.php?id=success');
}

?>


