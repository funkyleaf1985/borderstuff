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

$iProductID = 1;

if(isset($_GET["productid"])){
  $iProductID = $_GET["productid"];
}

$oProduct = new Product();
$oProduct->load($iProductID);


require_once("includes/header.php");
?>

<?php echo $oView->renderIndividual($oProduct) ?>

	

<?php 
require_once ("includes/footer.php");
 ?>
