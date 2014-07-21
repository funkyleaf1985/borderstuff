<?php 
  require_once("connection.php");
  require_once("model_product.php");

  class Category{

  	private $iCategoryID;
  	private $sCategoryName;
  	private $sDescription;
  	private $iDisplayorder;
  	private $bExisting;
  	private $aProducts;


  	public function __construct(){

  		$this->iCategoryID = 0;
  		$this->sCategoryName = "";
  		$this->sDescription = "";
  		$this->iDisplayorder = 0;
  		$this->aProducts = array();
  		$this->bExisting = false;

  	}

  	public function load($iID){

  		//1.

  		$oConnection = new Connection();

  		//2.

  		$sSQL = "	SELECT TypeID,TypeName,Description,DisplayOrder
					FROM tbproducttype
					WHERE TypeID = ".$iID;

		$oResult = $oConnection->query($sSQL);

  		//3.

  		$aGenreResults = $oConnection->fetch_array($oResult);

		$this->iCategoryID = $aGenreResults["TypeID"];
		$this->sCategoryName = $aGenreResults["TypeName"];
		$this->sDescription = $aGenreResults["Description"];
		$this->iDisplayOrder = $aGenreResults["DisplayOrder"];


		$sSQL = "SELECT ProductID 
		         FROM tbproduct 
		         WHERE TypeID=".$iID;

		$oResult = $oConnection->query($sSQL);

		while($aRow = $oConnection->fetch_array($oResult)){
			$oProduct = new Product();
			$oProduct->load($aRow["ProductID"]);
			$this->aProducts[] = $oProduct;
		}

  		//4.

  		$oConnection->close_connection();

  		$this->bExisting = true;

  	} //end of load

  	public function __get($var){
	switch ($var) {
		case "CategoryID":
		return $this->iCategoryID;
		break;
		case "TypeName":
		return $this->sCategoryName;
		break;
		case "Description":
		return $this->sDescription;
		break;
		case "DisplayOrder":
		return $this->iDisplayOrder;
		break;
		case "products":
		return $this->aProducts;
		break;
		default:
		die($var . "does not exist in Type");
	}
}

  }

  // ------------------TEST-----------------------

 //  $oCategory = new Category();
 //  $oCategory->load(1);

	// echo "<pre>";
	// print_r($oCategory);
	// echo "</pre>";





 ?>