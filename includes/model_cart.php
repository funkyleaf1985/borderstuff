<?php 
class Cart{
  private $aContents;

  public function __construct(){

   $this->aContents = array();

  }

  public function add($iProductID){
  

	if(isset($this->aContents[$iProductID]) == false){ //if this productID DOES NOT exist..

		$this->aContents[$iProductID] = 1; //make the quantity (value to the iProductID key) 1

	}else{

		$this->aContents[$iProductID] +=1; //if it does exist, add one more to the quantity 
	}

  } 

  public function remove($iProductID){

  	$this->aContents[$iProductID] -= 1;
  
  	if($this->aContents[$iProductID] == 0){
  		unset($this->aContents[$iProductID]);
  	}

  } 

  public function __get($var){
  	switch ($var) {
		case "Contents":
		return $this->aContents;
		break;

    case "Total":
      $fTotal = 0;
      foreach($this->aContents as $key=>$value){
        $oProduct = new Product();
        $oProduct->load($key);
        $fTotal += $value*$oProduct->Price;
      }

    return $fTotal;
    break;
		default:
		die($var . "does not exist in cart");
	}
  }

}
//--------------------------------
// $oCart = new Cart();
// $oCart->add(2);
// $oCart->add(10);

// $oCart->add(2);



// $oCart->remove(10);
// $oCart->remove(2);

// echo "<pre>";
// print_r($oCart);
// echo "</pre>";



 ?>	