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

$aSearchingResults = $oCollection->getSearchingReasults();

require_once ("includes/header.php");
?>

			<div class="shopping_cart_main">
				
				<div class="product_type_main_h"> <span>YOUR SEARCHING RESULTS</span> </div>

				<div class="shopping_cart_box">

							<div class="shopping_cart_box_top">

							<div class="continue_shopping"> <a href="index.php">CONTINUE SHOPPING</a> </div>

							<div class="clear"></div>

							</div> <!-- end of shopping_cart_box_top -->

							 <table border="1" class="searching_results_table">
								    <tr>
								      <th class="searching_results_table_th_one">ITEMS</th>
								      <th class="searching_results_table_th_two">ITEM DETAILS</th>
								      
								    </tr>

								    <!-- should rewrite in view -->

								    <?php 

								    	if(count($aSearchingResults) != 0){
								    		echo $oView->renderSeachingResults($aSearchingResults);
								    	}else{
								    		header("Location:searching_results_fail.php");
								    	}
								    	
								   		
									?>

								    <!-- should rewrite in view  up-->

							</table> <!-- end of table -->

				</div> <!-- end of shopping_cart_box -->

			</div> <!-- end of shopping_cart_main -->

<?php 
require_once ("includes/footer.php") 
?>


