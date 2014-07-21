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
				
				<div class="product_type_main_h"> <span>SHOPPING CART</span> </div>

				<div class="shopping_cart_box">

							<div class="shopping_cart_box_top">

							<div class="continue_shopping"> <a href="index.php">CONTINUE SHOPPING</a> </div>

							<div class="clear"></div>

							</div> <!-- end of shopping_cart_box_top -->

							 <table border="1" class="shopping_cart_table">
								    <tr>
								      <th class="th_one">YOUR ITEMS</th>
								      <th class="th_two">ITEM QUANTITY</th>
								      <th class="th_three">ITEM PRICE</th>
								    </tr>

								    <!-- should rewrite in view -->

								    <?php echo $oView->renderShoppingCart($oCart) ?>

								    <!-- should rewrite in view  up-->


								   <tr>
								      <td class="td_description">
								        <span></span>
								      </td><!-- end of td_description -->

								      <td class="td_option">
								        <span></span>
								      </td><!-- end of td_option -->

								      <td class="td_price">
								        <span class="total_price">Total Price : $ <?php echo $oCart->Total; ?> </span>
								      </td> <!-- end of td_price -->

								    </tr>

							</table> <!-- end of table -->

					<div class="shopping_cart_box_top">

							<div class="check_out"> <a href="">CHECK OUT</a> </div>

							<div class="clear"></div>

					</div> <!-- end of shopping_cart_box_top -->



				</div> <!-- end of shopping_cart_box -->

			</div> <!-- end of shopping_cart_main -->
			
				
<?php 
require_once ("includes/footer.php") 
?>