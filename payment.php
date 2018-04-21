
<?php 
session_start();
include("db_connec.php");
/*print"<pre>";
print_r($_POST);
print"</pre>";*/
error_reporting(E_ERROR);
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

<body>
	
     <?php include("header.php");?>
    <?php   ?>
    
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post"><br>
  <input type="hidden" name="cmd" value="_cart"><br>
  <input type="hidden" name="business" value="seller@designerfotos.com"><br>
  <input type="hidden" name="item_name" value="hat"><br>
  <input type="hidden" name="item_number" value="123"><br>
  <input type="text" name="amount" value="<?php echo $_SESSION['grand_total'] ?>"><br>
  <input type="hidden" name="first_name" value="John"><br>
  <input type="hidden" name="last_name" value="Doe"><br>
  <input type="hidden" name="address1" value="9 Elm Street"><br>
  <input type="hidden" name="address2" value="Apt 5"><br>
  <input type="hidden" name="city" value="Berwyn"><br>
  <input type="hidden" name="state" value="PA"><br>
  <input type="hidden" name="zip" value="19312"><br>
  <input type="hidden" name="night_phone_a" value="610"><br>
  <input type="hidden" name="night_phone_b" value="555"><br>
  <input type="hidden" name="night_phone_c" value="1234"><br>
  <input type="hidden" name="email" value="jdoe@zyzzyu.com"><br>
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online"><br>
</form>
	

	
	
     <?php include("footer.php"); ?>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>