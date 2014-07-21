<?php
// print_r($_FILES);
define("MAX_SIZE","10000000");
require_once("includes/collection.php");
require_once("includes/model_product.php");
require_once("includes/model_category.php");
require_once("includes/model_customer.php");
require_once("includes/form.php");

require_once("includes/view.php");


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
$oForm = new Form();


if(isset($_POST["submit"])){

	$oForm->data = $_POST;
	$oForm->files = $_FILES;

	$oForm->checkRequired("product_name");
	$oForm->checkRequired("description");
	$oForm->checkRequired("information");
	$oForm->checkRequired("price");
	$oForm->checkRequired("product_type");
	$oForm->checkUpload("photo_path","image/jpeg", MAX_SIZE);

	if($oForm->isValid){

		$sPhotoName = "Product".date("Y-m-d-H-i-s");
		$oForm->moveFile("photo_path", $sPhotoName.".jpg");

	
		$oProduct = new Product();
		$oProduct->ProductName =$_POST["product_name"];
		$oProduct->Description=$_POST["description"];
		$oProduct->Information=$_POST["information"];
		$oProduct->TypeID=$_POST["product_type"];
		$oProduct->PhotoPath = $sPhotoName;
		$oProduct->Price=$_POST["price"];

		$oProduct->save();
		Header("Location: add_product.php");
		exit;
	}

}

	$oForm->makeTextInput("Product Name", "product_name","text");
	$oForm->makeTextInput("Description", "description","text");
	$oForm->makeTextInput("Information", "information","text");
	$oForm->makeTextInput("TypeID", "product_type","text");
	$oForm->makeTextInput("Price","price","text");
	$oForm->makeUploadBox("Photo","photo_path");
	$oForm->makeHiddenField("MAX_FILE_SIZE", MAX_SIZE);
	$oForm->makeSubmit("Add Product","submit");

	require_once ("includes/header.php");
?>
              <div class="login_main">

			<div class="login_main_h"> <span>ADD MORE PRODUCTS</span> </div>

			<div class="login_form">

                    <?php
                    
                     echo $oForm->html;

                    ?>
                
              </div><!-- end of register_form_box -->

<?php
require_once("includes/footer.php");	
 ?>