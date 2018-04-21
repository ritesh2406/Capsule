<?php
include("db_connec.php");
        session_start();
/*print"<pre/>";
print_r($_POST);
echo "From Post". $_POST['username'];
*/

  /*  $sel="select * from customers where email = '".$_SESSION['email']."'";
    $cust=mysqli_query($con,$sel);*/


//if($_SESSION['email']==''){
$select="select email from `signup_tbl` where `email`='".$_POST['email']."'";

	$qry=mysqli_query($con,$select);
	
	$rows=mysqli_num_rows($qry);

//$rows = 1;
    
if($rows>0){
	
	echo "Already exists!";
   echo "Please <a href='login.php'>Login</a>";
}
else{
	echo "Available";
}
/*}
else {
    //echo "Available";
    header("location:checkout_upd.php");
}*/
?>