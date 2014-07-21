<?php
require_once("connection.php");

//This class is a model class
class Product{

	private $iProductID;
	private $sProductName;
	private $sInformation;
	private $sDescription;
	private $iPrice;
	private $iTypeID;
	private $sPhotoPath;
	private $iSales;
	private $sBackground;

	private $bExisting;


	public function __construct(){
		$this->iProductID = 0;
		$this->sProductName = "";
		$this->sInformation = "";
		$this->sDescription = "";
		$this->iPrice = 0;
		$this->iTypeID = 0;
		$this->sPhotoPath = "";
		$this->iSales = 0;
		$this->sBackground = "";

		$this->bExisting = false;


	}
	public function load($iID){
		//1:Make connection
		$oConnection = new Connection();

		//2:Execute query
		$sSQL = "SELECT ProductID,ProductName,Information,Description,Price,TypeID,PhotoPath,Sales,Background
                 FROM tbproduct
                 WHERE ProductID = ".$iID;

		$oResult = $oConnection->query($sSQL);

		//3:Extract data from resultset
		$aProduct = $oConnection->fetch_array($oResult);

		$this->iProductID = $aProduct["ProductID"];
		$this->sProductName = $aProduct["ProductName"];
		$this->sInformation = $aProduct["Information"];
		$this->sDescription = $aProduct["Description"];
		$this->iPrice = $aProduct["Price"];
		$this->iTypeID = $aProduct["TypeID"];
		$this->sPhotoPath = $aProduct["PhotoPath"];
		$this->iSales = $aProduct["Sales"];
		$this->sBackground = $aProduct["Background"];


		//4:close connection
		$oConnection->close_connection();

        //change the all details to true!!!!!!to see all informations are they in database or not? 
		$this->bExisting = true;

	}
	public function save(){
        //1:Make connection
		$oConnection = new Connection();

		if($this->bExisting == false){
            //2:Execute insert query
			$sSQL = "INSERT INTO tbproduct (ProductName, Information, Description, Price, TypeID, Sales,Background,PhotoPath) 
			VALUES ( '".$this->sProductName."',
				'".$this->sInformation."',  
				'".$this->sDescription."', 
				'".$this->iPrice."', 
				'".$this->iTypeID."', 
				'".$this->iSales."',
				'".$this->sBackground."',
				'".$this->sPhotoPath."')";

            $bResult = $oConnection->query($sSQL);

            if($bResult == true){
                 //celebrate by retrieving the last insert id
	             $this->iProductID = $oConnection->get_insert_id();
	             $this->bExisting = true;
             }else{
	            die($sSQL . " fails");
	         }

        }else{
             //excute update query
             	$sSQL= "UPDATE tbproduct SET ProductID = '".$this->iProductID."',
             	               ProductName =  '".$this->sProductName."',
             	               Information =  '".$this->sInformation."',
                               Description =  '".$this->sDescription."',
                               Price =  '".$this->iPrice."',
                               TypeID =  '".$this->iTypeID."',
                               Sales =  '".$this->iSales."',
                               Background =  '".$this->sBackground."',
                               PhotoPath =  '".$this->sPhotoPath."'
                               WHERE tbproduct.ProductID =".$this->iProductID;//

                $bResult = $oConnection->query($sSQL);

                if($bResult == false){
             
                   die($sSQL . " false");
                }
             };
		//4:close connection
        $oConnection->close_connection();
        
    }  



public function __get($var){
	switch ($var) {
		case "ProductID":
		return $this->iProductID;
		break;
		case "ProductName":
		return $this->sProductName;
		break;
		case "Information":
		return $this->sInformation;
		break;
		case "Description":
		return $this->sDescription;
		break;
		case "Price":
		return $this->iPrice;
		break;
		case "TypeID":
		return $this->iTypeID;
		break;
		case "PhotoPath":
		return $this->sPhotoPath;
		break;
		case "Sales":
		return $this->iSales;
		break;
		case "Background":
		return $this->sBackground;
		break;
		default:
		die($var . "does not exist in Product");
	}
}

public function __set($var,$value){
	switch ($var) { 
	 
		case "ProductName":
		$this->sProductName = $value;
		break;
		case "Information":
		$this->sInformation = $value;
		break; 
		case "Description":
		$this->sDescription = $value;
		break; 
		case "Price":
		$this->iPrice = $value;
		break;
		case "TypeID":
		$this->iTypeID = $value;
		break;   
		case "PhotoPath":
		$this->sPhotoPath = $value;
		break;
		case "Sales":
		$this->iSales = $value;
		break; 
		case "Background":
		$this->sBackground = $value;
		break;   
		default:
		die($var . "does not be set in Page");
	}
}


}

//------------------------------testing

// $oProduct = new Product();
// $oProduct->load(1);

// $oProduct->ProductName = "The Hobbit 2";
// $oProduct->TypeID = 2;
// $oProduct->ProductDescription = "The Hobbit 2";
// $oProduct->ProductPrice = "20";
// $oProduct->StockLevel = "10";
// $oProduct->PhotoPath = "The Hobbit.jpg";
// $oProduct->Active = "1";

// $oProduct->save();

// echo "<pre>";
// print_r($oProduct);
// echo "</pre>";

?>

