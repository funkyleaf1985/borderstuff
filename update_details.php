<?php 
require_once("includes/collection.php");
require_once("includes/model_product.php");
require_once("includes/model_category.php");
require_once("includes/model_customer.php");
require_once("includes/form.php");
require_once("includes/model_cart.php");

require_once("includes/view.php");
session_start();


$oView = new View();
$oCollection = new Collection();
$aGenres = $oCollection->getAllGenres();

$oCustomer = new Customer();
$oCustomer->load($_SESSION["CustomerID"]);

$aExistingData = array();
$aExistingData["first_name"] = $oCustomer->FirstName;
$aExistingData["last_name"] = $oCustomer->LastName;
$aExistingData["address"] = $oCustomer->Address;
$aExistingData["telephone"] = $oCustomer->Telephone;
$aExistingData["email"] = $oCustomer->Email;


$oForm = new Form();
$oForm->data = $aExistingData;

if(isset($_POST["submit"])){

  $oForm->data = $_POST;
  $oForm->checkRequired("first_name");
  $oForm->checkRequired("last_name");
  $oForm->checkRequired("address");
  $oForm->checkRequired("telephone");
  $oForm->checkRequired("email");

  if($oForm->isValid){

    $oCustomer->FirstName = $_POST["first_name"];
    $oCustomer->LastName = $_POST["last_name"];
    $oCustomer->Address = $_POST["address"];
    $oCustomer->Telephone = $_POST["telephone"];
    $oCustomer->Email = $_POST["email"];


    $oCustomer->save();

      header("Location:customer_detail.php");
      //exit.
  }
}

$oForm->MakeTextInput("First Name:","first_name");
$oForm->MakeTextInput("Last Name:","last_name");
$oForm->MakeTextInput("Address:","address");
$oForm->MakeTextInput("Telephone:","telephone");
$oForm->MakeTextInput("Email:","email");
$oForm->MakeSubmit("Save","submit");

require_once("includes/header.php");
 ?>
		<div class="login_main">

			<div class="login_main_h"> <span>REGISTER</span> </div>

			<div class="login_form">

                    <?php  echo $oForm->html;?>
				

			</div>
			
		</div><!-- end of login_main -->

<?php 
require_once ("includes/footer.php");
 ?>