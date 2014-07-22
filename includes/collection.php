<?php 
require_once("connection.php");
require_once("model_category.php");


class Collection{

	public function getAllGenres(){

	$aGenres = array();

		//load all subjects to array
		$oConnection = new Connection();
		$sSQL = "SELECT TypeID FROM tbproducttype";

		$oResult = $oConnection->query($sSQL);

		while($aRow = $oConnection->fetch_array($oResult)){
			$oCategory = new Category();
			$oCategory->load($aRow["TypeID"]);
			$aGenres[] = $oCategory;
		}

		$oConnection->close_connection();

		return $aGenres;	
	}

	public function getSalesProductsIndex(){

	$aProducts = array();

		//load all subjects to array
		$oConnection = new Connection();
		$sSQL = "SELECT ProductID FROM tbproduct WHERE Sales =1";

		$oResult = $oConnection->query($sSQL);

		while($aRow = $oConnection->fetch_array($oResult)){
			$oProduct = new Product();
			$oProduct->load($aRow["ProductID"]);
			$aProducts[] = $oProduct;
		}

		$oConnection->close_connection();

		return $aProducts;	
	}

	public function getSalesProductsSalesPage(){

	$aProducts = array();

		//load all subjects to array
		$oConnection = new Connection();
		$sSQL = "SELECT ProductID FROM tbproduct WHERE Sales =2";

		$oResult = $oConnection->query($sSQL);

		while($aRow = $oConnection->fetch_array($oResult)){
			$oProduct = new Product();
			$oProduct->load($aRow["ProductID"]);
			$aProducts[] = $oProduct;
		}

		$oConnection->close_connection();

		return $aProducts;	
	}

	public function getSalesProductsSlideShow(){

	$aProducts = array();

		//load all subjects to array
		$oConnection = new Connection();
		$sSQL = "SELECT ProductID FROM tbproduct WHERE Sales =3";

		$oResult = $oConnection->query($sSQL);

		while($aRow = $oConnection->fetch_array($oResult)){
			$oProduct = new Product();
			$oProduct->load($aRow["ProductID"]);
			$aProducts[] = $oProduct;
		}

		$oConnection->close_connection();

		return $aProducts;	
	}

	public function findCustomerByUsername($sUsername){

    	$aRow = array();

    	$oConnection = new Connection();

    	$sSQL = "SELECT CustomerID FROM tbcustomer WHERE Username='".$sUsername."'";

    	$oResult = $oConnection->query($sSQL);

    	$aRow = $oConnection->fetch_array($oResult); //$aRow will be created in there.

    	if($aRow == false){
    		return false;  //if there have nothing in this $aRow, so it is empty. SO this username can be regist by viewer.              
		}else{
			$oCustomer = new Customer();
			$oCustomer->load($aRow["CustomerID"]);
			return $oCustomer;		//if there have something in this $aRow, there must have a username been regist, 
			                        //there have all deatils for that old user,so load that old user`s customerID , and pass all his details back.
		}

		$oConnection->close_connection();

    }

    public function checkLogin($sUsername,$sPassword){

    	$oConnection = new connection();


    }

    public function getSearchingReasults(){

    	$aProducts = array();

    	$oConnection = new Connection();
		$sSQL = "SELECT *
				FROM tbproduct
				WHERE ProductName LIKE '%".$_POST['search']."%' OR Description LIKE '%".$_POST['search']."%' ";

		$oResult = $oConnection->query($sSQL);

		while($aRow = $oConnection->fetch_array($oResult)){
			$oProduct = new Product();
			$oProduct->load($aRow["ProductID"]);
			$aProducts[] = $oProduct;
		}

		$oConnection->close_connection();

    	return $aProducts;
    }

}

 ?>