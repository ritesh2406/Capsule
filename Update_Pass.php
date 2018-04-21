<?php include("db_connec.php");
//session_start();
// $user=$_SESSION['username'];
if($_POST){
   
    //echo "hello world";
    
    //print_r($_POST);
    
    if($_POST['newpassword'] == $_POST['cpassword'] ){
        
        $sql = "UPDATE `admin_tbl` SET `password` = '".$_POST['newpassword']."' WHERE `admin_tbl`.`id` = 1;";
            
        mysqli_query($con,$sql);
        
        header("location:change_password.php");
        
    }
    
}
?>