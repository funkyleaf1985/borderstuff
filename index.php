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

$aProducts = $oCollection->getSalesProductsIndex();
$aProductsSlide =$oCollection->getSalesProductsSlideShow(); 


require_once("includes/header.php");
 ?>

			<div id="et-slider-wrapper" class=" et_slider_auto et_slider_speed_7000">
			<div id="et-slides">
		    
		    <?php echo $oView->renderSlideshow($aProductsSlide) ?>
			
			</div>
	<!-- #et-slides --></div>
<!-- #et-slider-wrapper -->

		<div class="main_top">

			<div class="slider_show_big"></div>

			<div class="slider_show_small"></div>

			<div class="title_box"> <span>FEATURED SALES PRODUCTS</span> </div>

		</div> <!-- end of main_top -->
		
		<div class="main_bottom">
			<div class="product_type_main_product_list">

				<?php echo $oView->renderIndexProduct($aProducts); ?>

				<div class="clear"></div>
				
			</div><!-- end of product_type_main_product_list -->
			
		</div> <!-- end of main_bottom -->

<?php 
require_once ("includes/footer.php");
 ?>
