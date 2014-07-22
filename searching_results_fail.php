<?php 
require_once("includes/collection.php");
require_once("includes/model_product.php");
require_once("includes/model_category.php");
require_once("includes/model_customer.php");
require_once("includes/model_cart.php");

require_once("includes/view.php");

session_start();

$oCart = $_SESSION["Cart"];

if(isset($_SESSION["CustomerID"]) == false){
           header("Location:login.php");
}

$oView = new View();
$oCollection = new Collection();
$aGenres = $oCollection->getAllGenres();

require_once ("includes/header.php");
?>

			<div class="shopping_cart_main">
				
				<div class="product_type_main_h"> <span>NO RESULTS FOUND</span> </div>


				<div class="shopping_cart_box">

							<div class="shopping_cart_box_top">

							<div class="continue_shopping"> <a href="index.php">CONTINUE SHOPPING</a> </div>

							<div class="clear"></div>

							</div> <!-- end of shopping_cart_box_top -->

		                    


				</div> <!-- end of shopping_cart_box -->

			</div> <!-- end of shopping_cart_main -->

<?php 
require_once ("includes/footer.php") 
?>


