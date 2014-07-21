<?php 

require_once("includes/model_category.php");
require_once("includes/model_customer.php");
require_once("includes/model_product.php");
require_once("includes/model_cart.php");
require_once("includes/collection.php");
require_once("includes/form.php");
require_once("includes/view.php");

session_start();

$oView = new View();
$oCollection = new Collection();
$aGenres = $oCollection->getAllGenres();

$oForm = new Form();

if(isset($_POST["submit"])){

  $oForm->data = $_POST;

  $oForm->checkRequired("user_name");
  $oForm->checkRequired("password");

  $oCustomer = $oCollection->findCustomerByUsername($_POST["user_name"]);

  if($oCustomer == false){
        $oForm->raiseCustomError("user_name","Username does not exist" );
  }else{
    $sCustomerPassword = $oCustomer->password;
    if($_POST["password"] !== $sCustomerPassword){
      $oForm->raiseCustomError("password","Password is incorrect" );
      
    }else{

      $_SESSION["CustomerID"] = $oCustomer->CustomerID;

      if(isset($_SESSION["CustomerID"]) == false){
           header("Location:login.php");
      }

      $oCart = new Cart();
     
      $_SESSION["Cart"] = $oCart;

      header("Location:customer_detail.php");
      exit;

    }

  }
  
  
}


$oForm->MakeTextInput("UserName","user_name");
$oForm->MakeTextInput("Password","password");
$oForm->MakeSubmit("Submit","submit");



require_once("includes/header.php");
 ?>

		<div class="login_main">

			<div class="login_main_h"> <span>LOG IN</span> </div>

			<div class="login_form">
				
				<?php
                    
                     echo $oForm->html;

                ?>

               

			</div>
			
		</div><!-- end of login_main -->


<?php 
require_once ("includes/footer.php");
 ?>
		