<?php
require_once("connection.php");

//This class is a model class
class Customer{

	private $iCustomerID;
	private $sFirstName;
	private $sLastName;
	private $sAddress;
	private $sTelephone;
	private $sEmail;
	private $sUserName;
	private $sPassword;
    private $bExisting;


	public function __construct(){
		$this->iCustomerID = 0;
		$this->sFirstName = "";
		$this->sLastName = "";
		$this->sAddress = "";
		$this->sTelephone = "";
		$this->sEmail = "";
		$this->sUserName = "";
		$this->sPassword = "";
		$this->bExisting = false;


	}
	public function load($iID){
		//1:Make connection
		$oConnection = new Connection();

		//2:Execute query
		$sSQL = "SELECT CustomerID, FirstName, LastName, Address, Telephone, Email, UserName, Password
		FROM tbcustomer
		WHERE CustomerID = ".$iID;

		$oResult = $oConnection->query($sSQL);

		//3:Extract data from resultset
		$aCustomer = $oConnection->fetch_array($oResult);

		$this->iCustomerID = $aCustomer["CustomerID"];
		$this->sFirstName = $aCustomer["FirstName"];
		$this->sLastName = $aCustomer["LastName"];
		$this->sAddress = $aCustomer["Address"];
		$this->sTelephone = $aCustomer["Telephone"];
		$this->sEmail = $aCustomer["Email"];
		$this->sUserName = $aCustomer["UserName"];
		$this->sPassword = $aCustomer["Password"];

		//load all subjects to array
	

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
			$sSQL = "INSERT INTO tbcustomer (FirstName, LastName, Address, Telephone, Email, UserName, Password) 
			VALUES ('".$this->sFirstName."', 
				'".$this->sLastName."', 
				'".$this->sAddress."', 
				'".$this->sTelephone."',
				'".$this->sEmail."', 
				'".$this->sUserName."', 
				'".$this->sPassword."');";

            $bResult = $oConnection->query($sSQL);

            if($bResult == true){
                 //celebrate by retrieving the last insert id
	             $this->iCustomerID = $oConnection->get_insert_id();
	             $this->bExisting = true;
             }else{
	            die($sSQL . " fails");
	         }

        }else{
             //excute update query
             	$sSQL= "UPDATE  tbcustomer SET  CustomerID =  '".$this->iCustomerID."',
                               FirstName =  '".$this->sFirstName."',
                               LastName =  '".$this->sLastName."',
                               Address =  '".$this->sAddress."',
                               Telephone =  '".$this->sTelephone."',
                               Email =  '".$this->sEmail."'
                               WHERE tbcustomer.CustomerID =".$this->iCustomerID;//

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
		case "CustomerID":
		return $this->iCustomerID;
		break;
		case "FirstName":
		return $this->sFirstName;
		break;
		case "LastName":
		return $this->sLastName;
		break;
		case "Address":
		return $this->sAddress;
		break;
		case "Telephone":
		return $this->sTelephone;
		case "Email":
		return $this->sEmail;
		break;
		case "UserName":
		return $this->sUserName;
		break;
		case "password":
		return $this->sPassword;
		break;
		default:
		die($var . "does not exist in Page");
	}
}

public function __set($var,$value){
	switch ($var) {   
		case "CustomerID":
		$this->iCustomerID = $value;
		break;
		case "FirstName":
		$this->sFirstName = $value;
		break;
		case "LastName":
		$this->sLastName = $value;
		break; 
		case "Address":
		$this->sAddress = $value;
		break;
		case "Telephone":
		$this->sTelephone = $value;
		break;
		case "Email":
		$this->sEmail = $value;
		break;
		case "UserName":
		$this->sUserName = $value;
		break; 
		case "Password":
		$this->sPassword = $value;
		break;     
		default:
		die($var . "does not be set in Page");
	}
}


}

//------------------------------testing

// $oCustomer = new Customer();
// $oCustomer->load(2);

// $oCustomer->FirstName = "Gary 2";

// $oCustomer->save();

// echo "<pre>";
// print_r($oCustomer);
// echo "</pre>";

?>

