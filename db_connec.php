<?php
error_reporting(E_ERROR);
$con=mysqli_connect("localhost","root","") or die("Database Connection Error");
mysqli_select_db($con,"ecommerce") or die("Database Error");
?>
