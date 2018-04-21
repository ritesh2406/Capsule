<?php
session_start(); 
error_reporting(E_ERROR);
include('db_connec.php');
?>

<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
                    <?php
         $select="select * from signup_tbl";
         $w=mysqli_query($con,$select);
         $x=mysqli_fetch_array($w);
		 
		  ?>
		<!--<div class="col-md-6 phone-w3l">
			<ul>
				
                         
                         
                         
						 						
				
			</ul>
		</div>-->
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.jpg" alt="" width="200" height="100"/></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<?php if($_SESSION['email']==''){?>
				<li><a href="login.php" class="hyper"><span>Login</span></a></li>
				<?php } 
				    else { 
				           echo $_SESSION['email'];}?>
                <?php if($_SESSION['email']!=''){?>
				<li><a href="logout.php" class="hyper"><span>Logout</span></a></li>
				<?php } 
				    else { 
				           echo $_SESSION['email'];}?>
								<!--<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>-->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
    
    <?php
         $select="select * from signup_tbl";
         $w=mysqli_query($con,$select);
         $x=mysqli_fetch_array($w);
		 
		  ?>
   <!-- <div>
			<ul>
				
				<?php if($_SESSION['email']==''){?>
				<li><a href="login.php"><span>Login</span></a></li>
				<?php } 
				    else { 
				           echo $_SESSION['email'];}?>
                         
                         
						 						
				
			</ul>
		</div>-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
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
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="index.php">Products</a></li>
										<li><a href="product_details.php">Product Details</a></li> 
										<li><a href="checkout.php">Checkout</a></li> 
										<li><a href="cart.php">Cart</a></li> 
										<li><a href="login.php">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.php">404</a></li>
								<li><a href="contact_us.php">Contact</a></li>
							</ul>
						</div>
					</div>
                    <?php $search="select * from prod_tbl where prod_name like '%".$_POST['search']."%'";
                                   $get=mysqli_query($con,$search); 
                                    $show=mysqli_fetch_assoc($get);
                             ?>
					<div class="col-sm-3">
						<div class="search_box pull-right">
                            
                            
							<input type="text" placeholder="Search" name="search" value="<?php echo['$show']; ?>"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->