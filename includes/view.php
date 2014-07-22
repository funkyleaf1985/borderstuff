<?php 

class View{

	public function renderNavigation($aCategory){

		$sHTML='<ul>';

		$sHTML.='<li class="nav_button"> <a href="index.php"> HOME &nbsp&nbsp&nbsp&nbsp|</a> </li>';
		$sHTML.='<li class="nav_button"> <a href="sales.php">&nbsp&nbsp SALES &nbsp&nbsp&nbsp&nbsp|</a> </li>';

		for($iCount=0; $iCount<count($aCategory);$iCount++){

			$oProductType = $aCategory[$iCount];
			$sHTML.='<li class="nav_button"> <a href="product_type.php?categoryid='.$oProductType->CategoryID.'">&nbsp&nbsp'.$oProductType->TypeName.'&nbsp&nbsp&nbsp&nbsp|</a></li>';
		
		}

		$sHTML.='<li class="nav_button"> <a href="contact.php">&nbsp&nbsp CONTACT US &nbsp&nbsp&nbsp|</a></li>';
		$sHTML.='<li class="nav_button"> <a href="service.php">&nbsp SERVICES </a></li>';

		$sHTML .='</ul>';

		return $sHTML;

	}

	public function renderCategory($oProductCategory){

		$sHTML = '';

		$sHTML .= '<div class="product_type_main">';

		$sHTML .= '<div class="product_type_main_h"> <span>FEATURED '.$oProductCategory->TypeName.'</span> </div>';

		$sHTML .= '<div class="product_type_main_product_list">';

		$aProducts = $oProductCategory->products;
		for($iCount=0; $iCount<count($aProducts);$iCount++){
		$oProduct = $aProducts[$iCount];

		$sHTML .= '<div class="product_type_product_box">';

		$sHTML .= '<div class="product_type_page_image"> <a href="product.php?productid='.$oProduct->ProductID.'"> <img src="assest/images/product/product_show/'.$oProduct->PhotoPath.'.jpg" alt=""> </a></div>';
		$sHTML .= '<div class="product_type_main_p"> <span>'.$oProduct->ProductName.'</span> </div>';
		$sHTML .= '<div class="product_type_main_p"> <span>$ '.$oProduct->Price.'</span> </div>';
        $sHTML .= '<div class="product_type_button_a"><a href="add_to_cart.php?productID='.$oProduct->ProductID.'" class="product_submit_button_a">ADD TO CART</a></div>';
		$sHTML .= '</div>';

		}

		$sHTML .= '<div class="clear"></div>';
				
		$sHTML .= '</div><!-- end of product_type_main_product_list -->';
			
		$sHTML .= '</div><!-- end of product_type_main -->';

		return $sHTML;
	}

	public function renderIndividual($oProduct){

		$sHTML = '';

		$sHTML .= '<div class="main_product">';
					
		$sHTML .= '<div class="product_photo">';

		$sHTML .= '<img src="assest/images/product/product_show/'.$oProduct->PhotoPath.'.jpg" alt="">';
						
		$sHTML .= '</div>';

		$sHTML .= '<div class="product_details_box">';

		$sHTML .= '<div class="product_name">';

		$sHTML .= '<span>'.$oProduct->ProductName.'</span>';
				
		$sHTML .= '</div>';

		$sHTML .= '<div class="product_info">';

		$sHTML .= '<span>'.$oProduct->Information.'</span>';
				
		$sHTML .= '</div>';

		$sHTML .= '<div class="product_price">';

		$sHTML .= '<span> PRICE : $ '.$oProduct->Price.' </span>';
				
		$sHTML .= '</div>';

		$sHTML .= '<div class="product_add_to_cart">';

		$sHTML .= '<div class="product_type_button"><a href="add_to_cart.php?productID='.$oProduct->ProductID.'" class="product_submit_button_a">ADD TO CART</a></div>';
				
		$sHTML .= '</div>';

		$sHTML .= '<div class="share_product">';

		$sHTML .= '<span> SHARE PRODUCT </span>';
				
		$sHTML .= '</div>';

		$sHTML .= '<div class="media">';

		$sHTML .= '<img src="assest/images/facebook.png" alt="">';
		$sHTML .= '<img src="assest/images/twitter.png" alt="">';
		$sHTML .= '<img src="assest/images/rss.png" alt="">';
		$sHTML .= '<img src="assest/images/in.png" alt="">';
				
		$sHTML .= '</div>';
						
		$sHTML .= '</div>';

		$sHTML .= '<div class="product_description">';

		$sHTML .= '<div class="product_description_box">';
		$sHTML .= '<span> PRODUCT DESCRTIPTION</span>';
		$sHTML .= '<p>'.$oProduct->Description.'</p>';
		$sHTML .= '</div>';
						
		$sHTML .= '</div>';

		$sHTML .= '<div class="clear"></div>';

		$sHTML .= '</div> <!-- end of main_product -->';

		return $sHTML;

	}

	public function renderCustomerDetails($oCustomer){
        
        $sHTML='';

        $sHTML .= '<div class="customer_details_box">';
				
		$sHTML .= '<div class="customer_details_left"><span> First Name :  </span></div>';

		$sHTML .= '<div class="customer_details_right"><span>'.$oCustomer->FirstName.'</span></div>';

		$sHTML .= '<div class="customer_details_left"><span> Last Name :  </span></div>';

		$sHTML .= '<div class="customer_details_right"><span>'.$oCustomer->LastName.'</span></div>';

		$sHTML .= '<div class="customer_details_left"><span> Address :  </span></div>';

		$sHTML .= '<div class="customer_details_right"><span>'.$oCustomer->Address.'</span></div>';

		$sHTML .= '<div class="customer_details_left"><span> Email :  </span></div>';

		$sHTML .= '<div class="customer_details_right"><span>'.$oCustomer->Email.'</span></div>';

		$sHTML .= '<div class="customer_details_left"><span> Telephone :  </span></div>';

		$sHTML .= '<div class="customer_details_right"><span>'.$oCustomer->Telephone.'</span></div>';

		$sHTML .= '<div class="clear"></div>';

		$sHTML .= '</div>';

	    return $sHTML;	

	}

	public function renderIndexProduct($aProducts){

		$sHTML='';

		
		for($iCount=0; $iCount<count($aProducts);$iCount++){
		$oProduct = $aProducts[$iCount];

		$sHTML .=' <div class="product_type_product_box">'; 

		$sHTML .=' <div class="product_type_page_image">  <a href="product.php?productid='.$oProduct->ProductID.'"> <img src="assest/images/product/product_show/'.$oProduct->PhotoPath.'.jpg" alt=""> </div>'; 
		$sHTML .=' <div class="product_type_main_p"> <span>'.$oProduct->ProductName.'</span> </div>'; 
		$sHTML .=' <div class="product_type_main_p"> <span>$'.$oProduct->Price.'</span> </div>'; 
		$sHTML .= '<div class="product_type_button_a"><a href="add_to_cart.php?productID='.$oProduct->ProductID.'" class="product_submit_button_a">ADD TO CART</a></div>';

		$sHTML .=' </div>'; 

		}

		return $sHTML;

	}

	public function renderSalesProduct($aProducts){

		$sHTML='';

		
		for($iCount=0; $iCount<count($aProducts);$iCount++){
		$oProduct = $aProducts[$iCount];

		$sHTML .=' <div class="product_type_product_box">'; 

		$sHTML .=' <div class="product_type_page_image">  <a href="product.php?productid='.$oProduct->ProductID.'"> <img src="assest/images/product/product_show/'.$oProduct->PhotoPath.'.jpg" alt=""> </div>'; 
		$sHTML .=' <div class="product_type_main_p"> <span>'.$oProduct->ProductName.'</span> </div>'; 
		$sHTML .=' <div class="product_type_main_p"> <span>$'.$oProduct->Price.'</span> </div>'; 
		$sHTML .=' <div class="product_type_button_a"> <a href="add_to_cart.php?productID='.$oProduct->ProductID.'" class="product_submit_button_a">ADD TO CART</a></div>'; 

		$sHTML .=' </div>'; 

		}

		return $sHTML;
	}


	public function renderSlideshow($aProducts){

		$sHTML = "";

		
		for($iCount=0; $iCount<count($aProducts);$iCount++){
			$oProduct = $aProducts[$iCount];
			$sHTML .= '
				<div class="et-slide" style="background-image: url(assest/images/product/product_show/'.$oProduct->Background.'.jpg);">
					<div class="container clearfix">
						<div class="description">
							<h2>
							<a href="product.php?productid='.$oProduct->ProductID.'">
							'.$oProduct->ProductName.'</a></h2>
							<p class="subtitle">'.$oProduct->Information.'</p>
							<p>'.$oProduct->Description.'</p>
							<a href="product.php?productid='.$oProduct->ProductID.'" class="more">
							MORE DETAILS  </a></div>
						<!-- .description -->
						<div class="featured-image">
							<a href="product.php?productid='.$oProduct->ProductID.'">
							<img src="assest/images/product/product_list/'.$oProduct->PhotoPath.'.png" /></a>
						</div>
						<!-- .featured-image --></div>
					<!-- .container --></div>
				<!-- .et-slide -->
			';
		}

		return $sHTML;


	}

	public function renderShoppingCart($oCart){

		$sHTML = "";
  
        $aShoppingCartProducts = $oCart->Contents;

        foreach ($aShoppingCartProducts as $ProductID => $Quantity) {
        $oProduct = new Product();
        $oProduct->load($ProductID);

        $sHTML .= '<tr>';
		$sHTML .= '<th style="vertical-align:top" class="th_product_detail_one">';
		$sHTML .= '<div class="shopping_cart_detail_image"> <a href="product.php?productid='.$oProduct->ProductID.'"><img src="assest/images/product/product_show/'.$oProduct->PhotoPath.'.jpg" alt=""> </div>';
		$sHTML .= '<div class="shopping_cart_detail_productname" "class="interesting"><a href="product.php?productid='.$oProduct->ProductID.'"> <span>'.$oProduct->ProductName.'</span></a> </div>';
		$sHTML .= '<div class="shopping_cart_detail_remove_button"> <a href="remove_from_cart.php?productID='.$oProduct->ProductID.'">REMOVE</a> </div>';
		$sHTML .= '<div class="clear"></div>';
		$sHTML .= ' </th>';
   		$sHTML .= '<th style="vertical-align:middle"  class="th_product_detail_two">';
		$sHTML .= '<div  class="shopping_cart_deatil_quantity"> <span> Quantity : '.$Quantity.' </span> </div>';
		$sHTML .= '<div class="clear"></div>';
		$sHTML .= '</th>';
		$sHTML .= '<th style="vertical-align:middle" class="th_product_detail_three">';
		$sHTML .= '<div class="shopping_cart_deatil_price"> <span>Price : '.$oProduct->Price.'</span> </div>';
		$sHTML .= '<div class="clear"></div>';
		$sHTML .= '</th>';
		$sHTML .= '</tr>';
        
         } 

        return $sHTML;
	}


	public function renderSeachingResults($aResults){

		$sHTML = "";

		for($iCount=0; $iCount<count($aResults);$iCount++){

			$oProduct = $aResults[$iCount];
			
			$sHTML .= '<tr>';
			$sHTML .= '<th style="vertical-align:top" class="th_searching_result_one">';
			$sHTML .= '<div class="searching_result_image_itembox">';
			$sHTML .= '<div class="searching_result_image"> <a href="product.php?productid='.$oProduct->ProductID.'"> <img src="assest/images/product/product_show/'.$oProduct->PhotoPath.'.jpg" alt=""></a></div>';
			$sHTML .= '<div class="searching_results_productname"> <span>'.$oProduct->ProductName.'</span> </div>';
			$sHTML .= '<div class="searching_results_add_to_cart_button"> <a href="add_to_cart.php?productID='.$oProduct->ProductID.'">ADD TO CART</a> </div>';
			$sHTML .= '<div class="clear"></div>';
			$sHTML .= '</div>';
			$sHTML .= '</th>';
			$sHTML .= '<th style="vertical-align:top" class="th_searching_result_two">';
			$sHTML .= '<div class="searching_result_image_detailsbox">';
			$sHTML .= '<div class="searching_result_product_details">';
			$sHTML .= '<span class="searching_result_product_details_title"> ITEM DESCRIPTION: </span> ';
			$sHTML .= '<span class="searching_result_product_details_contents">'.$oProduct->Description.'</span>';
			$sHTML .= '<div class="clear"></div> ';
			$sHTML .= '</div>';
			$sHTML .= '<div class="searching_result_product_details">';
			$sHTML .= '<span class="searching_result_product_details_title"> ITEM PRICE :  </span> '; 
			$sHTML .= '<span class="searching_result_product_details_contents"><span>$ '.$oProduct->Price.'</span>';
			$sHTML .= '<div class="clear"></div> ';
			$sHTML .= '</div>';
			$sHTML .= '<div class="clear"></div>';
			$sHTML .= '</div>';
			$sHTML .= '</th>';
			$sHTML .= '</tr>';
		}

        return $sHTML;
	}

}
 ?>