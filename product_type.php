<?php 
require_once("includes/model_product.php");
require_once("includes/model_category.php");
require_once("includes/model_customer.php");
require_once("includes/collection.php");
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

<?php echo $oView->renderCategory($oCategory); ?>	

<?php 
require_once ("includes/footer.php");
 ?>