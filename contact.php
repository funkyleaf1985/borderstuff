<?php 

require_once("includes/model_category.php");
require_once("includes/collection.php");
require_once("includes/model_product.php");
require_once("includes/model_category.php");
require_once("includes/model_customer.php");
require_once("includes/form.php");

require_once("includes/model_cart.php");

require_once("includes/view.php");

session_start();

$oView = new View();
$oCollection = new Collection();
$aGenres = $oCollection->getAllGenres();


require_once("includes/header.php");
 ?>

		<div class="contact_main">

			<div class="contact_h"> <span>GET IN TOUCH</span> </div>

			<div class=""> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3192.662760157509!2d174.76461290000003!3d-36.850552!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47e538481e6f%3A0x78c20fe39d0eb793!2sQueen+St!5e0!3m2!1sen!2snz!4v1404224592831" width="860" height="200" frameborder="0" style="border:0"></iframe> </div>

			<div class="contact_h"> <span>CONTACT US</span> </div>

			<form action="" class="form_box">

			<div class="contact_label_content"> Name :</div>
            <input class="contact_form_field" type="text" name="firstName" id="firstName"/>
            <br />  

            <div class="contact_label_content"> Address :</div>
            <input class="contact_form_field" type="text" name="firstName" id="firstName"/>
            <br /> 

            <div class="contact_label_content"> Email :</div>
            <input class="contact_form_field" type="text" name="firstName" id="firstName"/>
            <br /> 

            <div class="contact_label_content"> Moblie : </div>
            <input class="contact_form_field" type="text" name="firstName" id="firstName"/>
            <br /> 

            <div class="contact_label_content"> Suggestions </div>
            <textarea class="contact_text_field">
            
            </textarea>
            <br /> 

            <div class="submit_container">
            <input class="submit_button" type="submit" value="Submit" />
            </div>

			</form>

			<div class="clear"></div>
			
		</div><!-- end of contact_main -->


<?php 
require_once ("includes/footer.php");
 ?>
		