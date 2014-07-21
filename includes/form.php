 <?php

 class Form{

   private $sHTML;
   private $aData;
   private $aErrors;
   private $aFiles;

   public function __construct(){
    $this->sHTML = '<form action="" method="post"  enctype="multipart/form-data">';
    $this->aData = array();
    $this->aErrors = array();
    $this->aFiles = array();
  }
        //FORM BUILDING METHODS

  public function MakeTextInput($sLabel, $sControlName){
           //getting control`s data
    $sData = "";
    if(isset($this->aData[$sControlName])){
      $sData = $this->aData[$sControlName];
    }
        //getting control`s errors
    $sErrors = "";
    if(isset($this->aErrors[$sControlName])){
      $sErrors = $this->aErrors[$sControlName];
    }

    $this->sHTML .= '<div class="label_content">'.$sLabel.':</div>';
    $this->sHTML .= '<input class="form_field" type="text" name="'.$sControlName.'" id="'.$sControlName.'" value="'.$sData.'"/>';
    $this->sHTML .= '<br />'."\n";
    $this->sHTML .= '<span class="errors">'.$sErrors.'</span>'; 
    $this->sHTML .= '<div class="clear"></div>'."\n";    
    $this->sHTML .= '<br /> ';

  }

  public function makeTextArea($sLabel,$sControlName){
    $sData = "";
    if(isset($this->aData[$sControlName])){
      $sData = $this->aData[$sControlName];
    }

    $sError = "";
    if(isset($this->aErrors[$sControlName])){
      $sError = $this->aErrors[$sControlName];
    }

    $this->sHTML .= '<label for="'.$sControlName.'">'.$sLabel.'</label>
        <textarea id="'.$sControlName.'" name="'.$sControlName.'">'.$sData.'</textarea>';

    $this->sHTML .='<span class="errors">'.$sError.'</span>';    
  }

  public function makeUploadBox($sLabel, $sControlName){
    $sError = "";
    if(isset($this->aErrors[$sControlName])){
      $sError = $this->aErrors[$sControlName];
    }

    $this->sHTML .= '<label for="'.$sControlName.'">'.$sLabel.'</label>
        <input type="file" id="'.$sControlName.'" name="'.$sControlName.'" />';
    $this->sHTML .='<span class="errors">'.$sError.'</span>';

  }

  public function makeHiddenField($sControlName, $sValue){
    
    $this->sHTML .= '<input type="hidden" name="'.$sControlName.'" value="'.$sValue.'" />';
  }

  public function MakeSubmit($sLabel, $sControlName){
    $this->sHTML .='<div class="submit_container">'."\n";
    $this->sHTML .='<input class="submit_button" type="submit" name="'.$sControlName.'" value="'.$sLabel.'" />'."\n";
    $this->sHTML .='</div>'."\n";
    $this->sHTML .= '<div class="clear"></div>'."\n";
  }

  public function checkRequired($sControlName){

    $sData = "";
    if(isset($this->aData[$sControlName])){
      $sData = $this->aData[$sControlName];
    }

    if(trim($sData)==""){
            //records error
      $this->aErrors[$sControlName] = "Must not be empty";
    }

  }


  public function checkUpload($sControlName, $sMimeType, $iSize){
    
    $sErrorMessage = "";
  
    if(empty($this->aFiles[$sControlName]["name"])){
      
      $sErrorMessage = "No files specified";
      
    }elseif($this->aFiles[$sControlName]['error'] != UPLOAD_ERR_OK){
        
      $sErrorMessage = "File cannot be uploaded";
        
    }elseif($this->aFiles[$sControlName]["type"] != $sMimeType){
          
      $sErrorMessage = "Only ".  $sMimeType ." format can be uploaded";
          
    }elseif($this->aFiles[$sControlName]["size"] > $iSize){
      
      $sErrorMessage = "Files cannot exceed ".$iSize." bytes in size";
      
    }
    
    //if there is any error, Assign error message to aValidationError 
    if ($sErrorMessage != ""){
      $this->aErrors[$sControlName] = $sErrorMessage;
    }
  }

  public function checkMatching($sControlName_1, $sControlName_2){

  
    $sData_1="";
    $sData_2="";

    if(isset($this->aData[$sControlName_1])){
      $sData_1 = $this->aData[$sControlName_1];
    }

     if(isset($this->aData[$sControlName_2])){
      $sData_2 = $this->aData[$sControlName_2];
    }

    if($sData_1 != $sData_2){
       $this->aErrors[$sControlName_1] = "Password must match";
    }

  }

  public function moveFile($sControlName, $sNewFileName){
     $newname = dirname(__FILE__).'/../assest/images/product/product_show/'.$sNewFileName;
    
      move_uploaded_file($this->aFiles[$sControlName]['tmp_name'],$newname);
  }

  public function raiseCustomError($sControlName,$sErrorMessage){

      $this->aErrors[$sControlName] = $sErrorMessage;

  }

  public function __get($var){
   switch ($var) {
     case 'html':
     return $this->sHTML . "</form>";
     break;
     case 'data':
     return $this->aData;
     break;
     case "isValid":
          if(count($this->aErrors) == 0){
            return true;
          }else{
            return false;
          }
     default:
     die($var."Does not exist in Form");
   }

 }

 public function __set($var, $value){
  switch ($var) {
    case 'data':
    $this->aData = $value;
    break;
    case 'files';
    $this->aFiles = $value;
    break;
    default:
    die($var."Cannot be set in Form");
  }
}
}


?>






