<?php 
require_once("includes/collection.php");
require_once("includes/model_product.php");
require_once("includes/model_category.php");
require_once("includes/view.php");

require_once("includes/model_cart.php");

require_once("includes/view.php");

session_start();

$oView = new View();
$oCollection = new Collection();
$aGenres = $oCollection->getAllGenres();

$iCategoryID = 1;

if(isset($_GET["categoryid"])){
  $iCategoryID = $_GET["categoryid"];
}

$oCategory = new Category();
$oCategory->load($iCategoryID);


$aCategory = $oCollection->getAllGenres();


require_once("includes/header.php");
 ?>

		<div class="login_main">

			<div class="login_main_h"> <span>LOG IN</span> </div>

			<div class="successful_h"> <span>Congratulations!</br>You are a member of BorderStuff!</br> Welcome to BorderStuff!</span> </div>

			<div class="go_back_shopping"> <a href="index.php">Click Here To Go Back Shopping</a> </div>
			
		</div><!-- end of login_main -->



<?php 
require_once ("includes/footer.php");
 ?>