<?php

session_start();
include("db_connec.php");

error_reporting(E_ALL);


//print_r($_POST);
    if($_POST){
        /*$sql="select * from `signup_tbl`";
        $res=mysqli_query($con,$sql);
        while($rows=mysqli_fetch_assoc($res)){
            
           // print_r($rows);
            
            
            //exit();
            $email=$rows['email'];
            if($email==$_POST['email']){
                echo "Sorry Email already exits";
                
                //exit();
            } 
            else {*/
                
                
   $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
   
    //$sql="select * from 'admin_tbl' where 'username'='".$username."' AND 'password'='".$password."'";
    if($_POST['password'] == $_POST['cpassword'] ){
      $insert = "INSERT INTO `signup_tbl`   (`username`,`email`,`password` ) VALUES ('".$username."','".$email."','".$password."')";
        
        //echo $insert;
        
        
       
       mysqli_query($con,$insert);
        
        
                
        //echo 'hello world';       
                
            
    }
    }
   // }
    //}
        
    /*$res=mysqli_query($con,$sql);

    if(mysqli_num_rows($res)>0){
    $rows=mysqli_fetch_assoc($res);
    $_SESSION['email']=$rows['email'];    
    $_SESSION['username']=$rows['username'];
    $_SESSION['id']=$rows['id'];*/

    header("location:login.php");

    
/*else {
   
       
	      header("location:signup_set.php");
   
   
   }*/

    

?>