<?php 
require_once("includes/collection.php");
require_once("includes/model_product.php");
require_once("includes/model_category.php");
require_once("includes/model_customer.php");
require_once("includes/model_cart.php");

require_once("includes/view.php");

session_start();


$oView = new View();
$oCollection = new Collection();
$aGenres = $oCollection->getAllGenres();


$aProducts = $oCollection->getSalesProductsSalesPage();


require_once("includes/header.php");
 ?>

		<div class="product_type_main">

			<div class="product_type_main_h"> <span>FEATURED SALES PRODUCTS</span> </div>

			<div class="product_type_main_product_list">

				<?php echo $oView->renderSalesProduct($aProducts) ?>

				<div class="clear"></div>
				
			</div><!-- end of product_type_main_product_list -->
			
		</div><!-- end of product_type_main -->



<?php 
require_once ("includes/footer.php");
 ?>
		
