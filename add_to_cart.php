<?php 

require_once("includes/model_cart.php");
require_once("includes/model_customer.php");

session_start();

$oCart = $_SESSION["Cart"];

if(isset($_SESSION["CustomerID"]) == false){
           header("Location:login.php");
}

$iProductID = 1;
if(isset($_GET["productID"])){
   $iProductID = $_GET["productID"];
}

$oCart->add($iProductID);
Header("location:shopping_cart.php");

 ?>