<?php 
require_once("includes/model_category.php");
require_once("includes/collection.php");
require_once("includes/model_product.php");
require_once("includes/model_category.php");
require_once("includes/model_customer.php");
require_once("includes/form.php");

require_once("includes/model_cart.php");

require_once("includes/view.php");

session_start();

$oCart = $_SESSION["Cart"];

$oView = new View();
$oCollection = new Collection();
$aGenres = $oCollection->getAllGenres();

if(isset($_SESSION["CustomerID"]) == false){
  header("Location:login.php");
}


$oCustomer = new Customer();
$oCustomer->load($_SESSION["CustomerID"]);

require_once("includes/header.php");
?>

		<div class="login_main">

			<div class="login_main_h"> <span>CUSTOMER DETAILS</span> </div>

			<?php echo $oView->renderCustomerDetails($oCustomer); ?>

			<div class="edit_details_button_box"><a href="update_details.php" class="edit_details">CLICK HERE TO  EDIT MY DETAILS</a></div>
			
			 <div class="go_back_shopping"> <a href="index.php">CLICK HERE TO GO BACK SHOPPING</a> </div>

		</div><!-- end of login_main -->



<?php 
require_once ("includes/footer.php");
 ?>
		
