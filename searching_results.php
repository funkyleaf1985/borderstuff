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

								    <?php echo $oView->renderSeachingResults($oCart); ?>

								   <!--  <tr>	
									  <th class="th_searching_result_one">
									  	<div class="searching_result_image"> <a href="product.php"><img src="assest/images/product/product_show/infinity_tee.jpg" alt=""></a> </div>
									  	<div class="searching_results_productname"> <span>ProductName</span> </div>
									  	<div class="searching_results_add_to_cart_button"> <a href="add_to_cart.php">ADD TO CART</a> </div>
									  	<div class="clear"></div>
									  </th>

								      <th class="th_searching_result_two">
								      	<div  class="searching_result_product_details">
								      	 <span class="searching_result_product_details_title"> ITEM DESCRIPTION: </span> 
								      	 <span class="searching_result_product_details_contents"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, tempore reprehenderit at consequuntur enim nesciunt quibusdam cupiditate. Impedit, odit, alias, minus accusamus distinctio</br> corrupti quae sapiente cupiditate dolorum eius voluptates.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, tempore reprehenderit at</br> consequuntur enim nesciunt quibusdam cupiditate. Impedit, odit, alias, minus corrupti quae sapiente cupiditate dolorum eius voluptates. </span>
								      	<div class="clear"></div> 

								      	</div>
								      	<div  class="searching_result_product_details">
								      	 <span class="searching_result_product_details_title"> ITEM PRICE :  </span>  
								      	 <span class="searching_result_product_details_contents">$199.99</span>
								      	<div class="clear"></div> 

								      	 </div>
								      	<div class="clear"></div>
								      </th>
								    
								      	<div class="clear"></div>
								      </th>

								    </tr> -->

								    <!-- should rewrite in view  up-->

							</table> <!-- end of table -->

				</div> <!-- end of shopping_cart_box -->

			</div> <!-- end of shopping_cart_main -->

<?php 
require_once ("includes/footer.php") 
?>


