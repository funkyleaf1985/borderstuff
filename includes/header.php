<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BorderStuff</title>

	<link rel="stylesheet" href="assest/css/styles.css">

	<!-- plugin -->

	<link rel="stylesheet" id="fusion-style-css" href="plagin/SLIDER/css/style.css" type="text/css" media="all" />
	<script type="text/javascript" src="plagin/SLIDER/js/jquery.js"></script>

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'><!-- font-family: 'Oswald', sans-serif; -->
	

</head>

<body>

	<div class="container">

		<div class="header">

			<div class="logo">

				<a href="index.php"> <img src="assest/images/logo.png" alt=""> </a>
				
			</div> <!-- end of logo -->

			<div class="serching_box">

				<form name="form_searching" method="post" action="searching_results.php">
					
					<div><input name="search" type="text" class="serching_box_main"></div>

					<div class="seaching_botton">

						<input type="submit" name="Submit" value="" class="s_button" >  </div>

					<div class="clear"></div>

				</form>

				<div class="clear"></div>
				
			</div> <!-- end of serching_box -->

			<div class="login_box">
				
				<?php 
				if(isset($_SESSION["CustomerID"])){

           			$oLogInCustomer = new Customer();
          			$oLogInCustomer->load($_SESSION["CustomerID"]); 
          			echo '<div class="login_button"> <span>WELCOME&nbsp&nbsp</span> <a href="customer_detail.php">'.$oLogInCustomer->FirstName.'&nbsp</a> | <a href="log_out.php">&nbsp&nbsp LOG OUT</a> </div>';
          		}else{
          			echo '<div class="login_button"> <a href="login.php">LOGIN</a> | <a href="register.php">REGISTER</a> </div>';
          		}

           		?>

				
				<div class="shopping_cart_button"> <a href="shopping_cart.php">$<?php echo (isset($_SESSION["Cart"]) ? $_SESSION["Cart"]->Total : 0) ?></a> </div>
				<div class="shopping_cart_img"> <img src="assest/images/shopping_cart.png" alt=""></div>

				<div class="clear"></div>
				
			</div> <!-- end of login_box -->

			<div class="clear"></div>
			
		</div> <!-- end of header -->

		<div class="navgation">

			<div class="navgation_box" >

				<?php 

					echo $oView->renderNavigation($aGenres);

				 ?>

		</div> <!-- end of navgation_box -->
			
		</div> <!-- end of navgation -->

		<div class="main">