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

			<div class="box">

			<div class="main_service_text">
				<span> OUR SERVICES</span> 
				<p class="service_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, in, distinctio, cumque, quasi quibusdam suscipit dolor iste minus ullam ex excepturi impedit tenetur soluta. Nesciunt iure voluptas aut ex odit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, in, distinctio, cumque, quasi quibusdam suscipit dolor iste minus ullam ex excepturi impedit tenetur soluta. Nesciunt iure voluptas aut ex odit!   Sint, in, distinctio, cumque, quasi quibusdam suscipit dolor iste minus ullam ex excepturi impedit tenetur soluta. Nesciunt iure voluptas aut ex odit!</p>
			</div> <!-- end of main_service_text -->

			<div class="service_content">

				<div class="service_content_box" style="margin-left:0px">
					<img src="assest/images/icon_1.png" alt="">
					<div class="service_content_intro"><span>24/7 CUSTOMER SUPPORT </span></div> 
					<p class="service_content_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, quisquam, nisi quibusdam blanditiis molestias dolorem ab quae nobis a vero minima sit. Sed, a reiciendis odit itaque molestias fugiat quo? </p>
				</div>

				<div class="service_content_box">
					<img src="assest/images/icon_2.png" alt="">
					<div class="service_content_intro" style="margin-top:4px"><span>HYGIENIC BRANDED </span></div> 
					<p class="service_content_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, quisquam, nisi quibusdam blanditiis molestias dolorem ab quae nobis a vero minima sit. Sed, a reiciendis odit itaque molestias fugiat quo? </p>
				</div>

				<div class="service_content_box">
					<img src="assest/images/icon_3.png" alt="">	<div class="service_content_intro"><span> SAFELY DISPATCH </span></div> 
					<p class="service_content_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, quisquam, nisi quibusdam blanditiis molestias dolorem ab quae nobis a vero minima sit. Sed, a reiciendis odit itaque molestias fugiat quo? </p>
				</div>

				<div class="service_content_box" style="margin-left:0px">
					<img src="assest/images/icon_4.png" alt="">
					<div class="service_content_intro">
					<span> 100% LOOK BOOK </span></div> 
					<p class="service_content_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, quisquam, nisi quibusdam blanditiis molestias dolorem ab quae nobis a vero minima sit. Sed, a reiciendis odit itaque molestias fugiat quo? </p>
				</div>

				<div class="service_content_box">
					<img src="assest/images/icon_5.png" alt="">
					<div class="service_content_intro">
					<span> AUTHENTIC PRODUCTS</span></div> 
					<p class="service_content_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, quisquam, nisi quibusdam blanditiis molestias dolorem ab quae nobis a vero minima sit. Sed, a reiciendis odit itaque molestias fugiat quo? </p>
				</div>

				<div class="service_content_box">
					<img src="assest/images/icon_6.png" alt="">
					<div class="service_content_intro">
					<span>100% GUARANTEE </span></div> 
					<p class="service_content_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, quisquam, nisi quibusdam blanditiis molestias dolorem ab quae nobis a vero minima sit. Sed, a reiciendis odit itaque molestias fugiat quo? </p>
				</div>

				<div class="clear"></div>
				
			</div><!--  end of service_content -->

		</div>


<?php 
require_once ("includes/footer.php");
 ?>
		