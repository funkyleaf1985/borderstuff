<?php 

require_once("includes/model_cart.php");

session_start();
$oCart = $_SESSION["Cart"];

$iProductID = 1;
if(isset($_GET["productID"])){
   $iProductID = $_GET["productID"];
}

$oCart->remove($iProductID);
Header("location:shopping_cart.php");

 ?>