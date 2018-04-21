<?php
session_start();
include("db_connec.php");

error_reporting(E_ALL);


//print_r($_POST);


   /* $email=$_POST['email'];
    $password=$_POST['password'];
   
    //$sql="select * from 'admin_tbl' where 'username'='".$username."' AND 'password'='".$password."'";
    
      $sql = "SELECT * FROM `signup_tbl` WHERE `email`='".$email."' AND `password`= '".$password."'";

    $res=mysqli_query($con,$sql);

    if(mysqli_num_rows($res)>0){
    $rows=mysqli_fetch_assoc($res);
    $_SESSION['username']=$rows['username'];
    $_SESSION['id']=$rows['id'];

    header("location:index.php");
}
else {
   
       
	      header("location:login_set.php");
   
   
   }*/


if($_POST){
	
	$select="select email,password from `signup_tbl` where `email`='".$_POST['email']."' and password='".$_POST['password']."'";

	$qry=mysqli_query($con,$select);
	
	$rows=mysqli_num_rows($qry);


if($rows>0){
	

	$_SESSION['email']=$_POST['email'];	
	

	
	header('location:checkout_upd.php');
}	
else{
	
	
	echo "<script> alert('Username or password is incorrect. Please try again!')</script>";
	
	
}
	
}

?>