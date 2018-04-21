<?php
include("db_connec.php");
    if($_POST){
	 
		 
	//print_r($_POST);
	
    
        
$insert="insert into customers(cust_id,bill_fname,bill_lname,bill_mobile,bill_address,bill_pincode,bill_city,bill_country,email,ship_fname,ship_lname,ship_mobile,ship_address,ship_pincode,ship_city,ship_country)values('".$_POST['id']."','".$_POST['bill_fname']."','".$_POST['bill_lname']."','".$_POST['bill_mobile']."','".$_POST['bill_address']."','".$_POST['bill_pincode']."','".$_POST['bill_city']."','".$_POST['bill_country']."','".$_POST['email']."','".$_POST['ship_fname']."','".$_POST['ship_lname']."','".$_POST['ship_mobile']."','".$_POST['ship_address']."','".$_POST['ship_pincode']."','".$_POST['ship_city']."','".$_POST['ship_country']."')";
	
	mysqli_query($con,$insert);
            //echo $insert;
            //exit();
    
    }
    
    header("location:checkout.php")
    ?>