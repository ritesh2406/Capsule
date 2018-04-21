<?php
//session_start();
include("db_connec.php");

echo print_r($_POST);



    /*$username=$_POST['username'];
    $password=$_POST['password'];
   
    $sql="select * from 'admin_tbl' where 'username'='".$username."' && 'password'='".$password."'";
        
    $res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){
    $rows=mysqli_fetch_assoc($res);
    $_SESSION['username']=$rows['username'];
    $_SESSION['id']=$rows['id'];

    header("location:Dashboard.php");
}
else {
   
       
	      header("location:login_set.php");
   
   
   }
   */



?>
