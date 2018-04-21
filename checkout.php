
<?php 
session_start();
include("db_connec.php");
/*print"<pre>";
print_r($_POST);
print"</pre>";*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Checkout | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
    <style>
.status-available{color:#2FC332;}
.status-not-available{color:#D60202;}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function checkAvailability() {
    $("#loaderIcon").show();
    jQuery.ajax({
    url: "register.php",
    data:'email='+$("#email").val(),
    type: "POST",
    success:function(data){
		alert(data);
        $("#user-availability-status").html(data);
        $("#loaderIcon").hide();
		if(data!='Available'){
         $('#submit').prop('disabled', true);
		}
        else{
            $('#submit').prop('disabled', false);
        }
    },
    error:function (){}
    });
}
</script>
<script type="text/javascript">
  function autoFill() {
    document.getElementById('ship_fname').value = document.getElementById('bill_fname').value;
    document.getElementById('ship_lname').value = document.getElementById('bill_lname').value;
    document.getElementById('ship_mobile').value = document.getElementById('bill_mobile').value;
    document.getElementById('ship_address').value = document.getElementById('bill_address').value;
    document.getElementById('ship_pincode').value = document.getElementById('bill_pincode').value;
    document.getElementById('ship_country').value = document.getElementById('bill_country').value;
    document.getElementById('ship_city').value = document.getElementById('bill_city').value;
   // document.getElementById('ship_email').value = document.getElementById('bill_email').value;  

  }
</script>
<body>
	<!--<header id="header">--><!--header-->
		<!--<div class="header_top">--><!--header_top-->
			<!--<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>--><!--/header_top-->
		
		<!--<div class="header-middle">--><!--header-middle-->
			<!--<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html" class="active"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>--><!--/header-middle-->
	
		<!--<div class="header-bottom">--><!--header-bottom-->
			<!--<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html" class="active">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div>--><!--/header-bottom-->
	<!--</header>--><!--/header-->
     <?php include("header.php");?>
    <?php
    if($_POST){
	 
		 
	//print_r($_POST);
	
    
        
$insert="insert into customers(cust_id,bill_fname,bill_lname,bill_mobile,bill_address,bill_pincode,bill_city,bill_country,email,ship_fname,ship_lname,ship_mobile,ship_address,ship_pincode,ship_city,ship_country)values('".$_POST['id']."','".$_POST['bill_fname']."','".$_POST['bill_lname']."','".$_POST['bill_mobile']."','".$_POST['bill_address']."','".$_POST['bill_pincode']."','".$_POST['bill_city']."','".$_POST['bill_country']."','".$_POST['email']."','".$_POST['ship_fname']."','".$_POST['ship_lname']."','".$_POST['ship_mobile']."','".$_POST['ship_address']."','".$_POST['ship_pincode']."','".$_POST['ship_city']."','".$_POST['ship_country']."')";
	
	mysqli_query($con,$insert);
            //echo $insert;
            //exit();

    
    
    
	
   
	$date=date('Y-m-d');
    
        $cust_id=mysqli_insert_id($con);
         
	
	$insert="insert into orders(order_date,total_amount,cust_id)values('$date','".$_SESSION['grand_total']."','$cust_id')";
	mysqli_query($con,$insert);
	$order=mysqli_insert_id($con);
	
   $cart="select * from cart where session_id='".session_id()."'";
	
	$query=mysqli_query($con,$cart);
    
    //$orders="select * from orders where `orders`.`order_id`='".$_GET['order_id']."'";
	
    //$query1=mysqli_query($con,$orders);
	
    
         
     while($fetch=mysqli_fetch_array($query)){
		
		$ins="insert into order_details(order_id,prod_id)values('".$order."','".$fetch['productid']."')";
		mysqli_query($con,$ins);
                 
                // echo $ins; 

	}
    }
	//header('location:payment.php?order_id='.$order_id.'&total_amount='.$_SESSION['grand_total']);
    		//echo $ins;
            //echo $insert;
   // exit();
    //header("location:checkout.php")
    ?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Step1</h2>
			</div>
			<div class="checkout-options">
				<h3>New User</h3>
				<p>Checkout options</p>
				<ul class="nav">
					<li>
						<label><input type="checkbox"> Register Account</label>
					</li>
					<li>
						<label><input type="checkbox"> Guest Checkout</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Cancel</a>
					</li>
				</ul>
			</div><!--/checkout-options-->

			<div class="register-req">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div><!--/register-req-->
            
			<div class="shopper-informations">
               
                <form method="post" action=" " enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
                            
							<p>Shopper Information</p>
							<!--<form>-->
								<input type="email" name="email" placeholder="Email">
								<!--<input type="text" name="user_name" placeholder="User Name">-->
								<input type="password" name="password" placeholder="Password">
								<input type="password" name="confirm_password" placeholder="Confirm password">
							<!--</form>-->
							<!--<a class="btn btn-primary" href="">Get Quotes</a>-->
                            <input type="submit" name="submit" value="submit">
                        
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							        <div class="form-one">
								<!--<form method="post" action="insert.php">-->
									<!--<input type="text" placeholder="Company Name">-->
									<!--<input type="text" placeholder="Title">-->
									<input type="text" name="bill_fname" placeholder="First Name *" id="bill_fname">
									<!--<input type="text" name="bill_midname" placeholder="Middle Name">-->
									<input type="text" name="bill_lname" placeholder="Last Name *" id="bill_lname">
                                    <input type="text" name="bill_mobile" placeholder="Phone *" id="bill_mobile">
									<input type="text" name="bill_address" placeholder="Address *" id="bill_address">
									<!--<input type="text" placeholder="Address 2">-->
								
									<input type="text" name="bill_pincode" placeholder="Zip / Postal Code *" id="bill_pincode">
									<select name="bill_country" id="bill_country">
										<option>-- Country --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select >
									<select name="bill_city" id="bill_city">
										<option>-- State / Province / Region --</option>
										<option>Kolkata</option>
										<option>Banglore</option>
										<option>Mumbai</option>
										<option>Delhi</option>
										<option>Pune</option>
										<option>Hydrebad</option>
										<option>Rajasthan</option>
										<option>Goa</option>
									</select><br><br>
                                        <div id="frmCheckUsername">
                                    <input type="text" name="email" placeholder="Email*" id="email" onBlur="checkAvailability()">
                                    <span id="user-availability-status" class="status-not-available"></span>  <br><br>
									<!--<input type="password" name="password" placeholder="Confirm password">-->
									<!--<input type="text" placeholder="Mobile Phone">-->
									<!--<input type="text" placeholder="Fax">-->
                                    <!--<input type="submit" name="submit" value="submit">-->
								<!--</form>-->
                                        </div>
                                        <p><img src="loading.gif" id="loaderIcon" style="display:none" /></p>
                            </div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Shipping Order</p>
                            <div class="form-two">
								<!--<form method="post" action=" ">-->
									<!--<input type="text" placeholder="Company Name">-->
									<!--<input type="text" placeholder="Title">-->
									<input type="text" name="ship_fname" placeholder="First Name *" id="ship_fname">
									<!--<input type="text" name="bill_midname" placeholder="Middle Name">-->
									<input type="text" name="ship_lname" placeholder="Last Name *" id="ship_lname">
                                    <input type="text" name="ship_mobile" placeholder="Phone *" id="ship_mobile">
									<input type="text" name="ship_address" placeholder="Address *" id="ship_address">
									<!--<input type="text" placeholder="Address 2">-->
								    <input type="text" name="ship_pincode" placeholder="Zip / Postal Code *" id="ship_pincode">
									<select name="ship_country" id="ship_country">
										<option>-- Country --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select >
									<select name="ship_city" id="ship_city">
										<option>-- State / Province / Region --</option>
										<option>Kolkata</option>
										<option>Banglore</option>
										<option>Mumbai</option>
										<option>Delhi</option>
										<option>Pune</option>
										<option>Hydrebad</option>
										<option>Rajasthan</option>
										<option>Goa</option>
									</select><br><br>
                                    <!--<input type="text" name="email" placeholder="Email*" id="ship_email">-->
									<!--<input type="text" placeholder="Mobile Phone">-->
									<!--<input type="text" placeholder="Fax">-->
                                    <input type="submit" name="submit" value="submit" id="submit">
								<!--</form>-->
                            </div>
							<!--<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>-->
                            <label><a href="#" onClick="autoFill(); return true;" >Ship to bill address</a></label>
						</div>	
					</div>					
				</div>
                </form>
                    <!--</div>-->
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
                        
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
                            <?php
                             $select="SELECT * from cart where session_id='".session_id()."'";
		  $query=mysqli_query($con,$select);
                            $grand_total=0;
		 while( $fetch=mysqli_fetch_array($query)){
             $slc="select * from prod_tbl where `productid`='".$fetch['productid']."'";
             $qey=mysqli_query($con,$slc);
             $ps=mysqli_fetch_array($qey);
             $subtotal=$fetch['qty']*$ps['prod_price'];
             $grand_total=$grand_total+$subtotal;
             //echo "<pre>";
             
             //print_r($fetch);
             
             
             
             //exit();
                            ?>
							<td class="cart_product">
								<img src="upload/<?php echo $ps['prod_image'] ?>" width="100" height="50">
							</td>
							<td class="cart_description">
                                <h4><a href=""><?php echo $ps['prod_name'];?></a></h4>
								
							</td>
							<td class="cart_price">
								<p><?php echo $ps['prod_price'] ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $fetch['qty'] ?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo ($subtotal); ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
                                  <?php } ?>
						
						
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									
									<tr>
										<td>Exo Tax</td>
										<td>$2</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span><?php echo($grand_total);?></span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
                        <label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
                        <label><a href="payment.php">Paypal</a></label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->

	

	<!--<footer id="footer">--><!--Footer-->
		<!--<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer>--><!--/Footer-->
	
     <?php include("footer.php"); ?>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>