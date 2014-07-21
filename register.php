<?php 

require_once("includes/model_category.php");
require_once("includes/collection.php");
require_once("includes/view.php");
require_once("includes/model_Customer.php");
require_once("includes/form.php");

$oView = new View();
$oCollection = new Collection();
$aGenres = $oCollection->getAllGenres();

$oForm = new Form();

if(isset($_POST["submit"])){

  $oForm->data = $_POST;
  $oForm->checkRequired("first_name");
  $oForm->checkRequired("last_name");
  $oForm->checkRequired("address");
  $oForm->checkRequired("telephone");
  $oForm->checkRequired("email");
  $oForm->checkRequired("user_name");
  $oForm->checkRequired("password");
  $oForm->checkMatching("password", "confirm_password");

  $oCustomer = $oCollection->findCustomerByUsername($_POST["user_name"]);
  if($oCustomer == true){
        $oForm->raiseCustomError("user_name","User name is already taken" );
  }
  

  if($oForm->isValid){

      //creat a new page

    $oCustomer = new Customer();

    $oCustomer->FirstName = $_POST["first_name"];
    $oCustomer->LastName = $_POST["last_name"];
    $oCustomer->Address = $_POST["address"];
    $oCustomer->Telephone = $_POST["telephone"];
    $oCustomer->Email = $_POST["email"];
    $oCustomer->UserName = $_POST["user_name"];
    $oCustomer->Password = $_POST["password"];


    $oCustomer->save();

      header("Location:successful.php");
      //exit.
  }
}

$oForm->MakeTextInput("First Name","first_name");
$oForm->MakeTextInput("Last Name","last_name");
$oForm->MakeTextInput("Address","address");
$oForm->MakeTextInput("Telephone","telephone");
$oForm->MakeTextInput("Email","email");
$oForm->MakeTextInput("UserName","user_name");
$oForm->MakeTextInput("Password","password");
$oForm->MakeTextInput("Confirm Password","confirm_password");
$oForm->MakeSubmit("REGISTER","submit");


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