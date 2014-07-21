<?php 
session_start();
unset($_SESSION["CustomerID"]);
unset($_SESSION["Cart"]);
//redirect
header("Location:index.php");
?>

		
