<?php 
$language_id = 2;
foreach($data['languages'] as $language) {
   if($language['language_id'] != 1) {
       $language_id = $language['language_id'];
   }
}
                 
$output = array();
$output["advanced_grid_module"] = array (
  1 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '99999',
    'position' => 'footer',
    'status' => '1',
    'sort_order' => '',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      1 => 
      array (
        'status' => '1',
        'width' => '3',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<h4>Contact Information</h4>

<div class="footer_contact_info">
	<div class="info-section">
		<p class="info-title">ADDRESS</p>
		<div class="info-detail">
			218 Fifth Avenue, HeavenTower<br>
			NewYork City
		</div>
	</div>
	
	<div class="info-section">
		<p class="info-title">PHONE</p>
		<div class="info-detail">
			(+68) 123 456 7890
		</div>
	</div>
	
	<div class="info-section">
		<p class="info-title">EMAIL</p>
		<div class="info-detail">
			Support@techstore.com<br>
			Hot-Support@techstore.com
		</div>
	</div>
</div>

<div class="techone-socials">
	<div class="socials text-left">
		<a class="social" target="_blank" href="https://twitter.com" title="Twitter"><i class="fa fa-twitter"></i></a>
		<a class="social" target="_blank" href="https://facebook.com" title="Facebook"><i class="fa fa-facebook"></i></a>
		<a class="social" target="_blank" href="" title="Google plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		<a class="social" target="_blank" href="" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>                    
	</div>
</div>',
              1 => '<h4>Contact Information</h4>

<div class="footer_contact_info">
	<div class="info-section">
		<p class="info-title">ADDRESS</p>
		<div class="info-detail">
			218 Fifth Avenue, HeavenTower<br>
			NewYork City
		</div>
	</div>
	
	<div class="info-section">
		<p class="info-title">PHONE</p>
		<div class="info-detail">
			(+68) 123 456 7890
		</div>
	</div>
	
	<div class="info-section">
		<p class="info-title">EMAIL</p>
		<div class="info-detail">
			Support@techstore.com<br>
			Hot-Support@techstore.com
		</div>
	</div>
</div>

<div class="techone-socials">
	<div class="socials text-left">
		<a class="social" target="_blank" href="https://twitter.com" title="Twitter"><i class="fa fa-twitter"></i></a>
		<a class="social" target="_blank" href="https://facebook.com" title="Facebook"><i class="fa fa-facebook"></i></a>
		<a class="social" target="_blank" href="" title="Google plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		<a class="social" target="_blank" href="" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>                    
	</div>
</div>',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'status' => '1',
        'width' => '9',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '2',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                $language_id => 'Newsletter',
                1 => 'Newsletter',
              ),
              'text' => 
              array (
                $language_id => 'Get all the latest information on Events, Sales and Offers. Sign up for newsletter today.',
                1 => 'Get all the latest information on Events, Sales and Offers. Sign up for newsletter today.',
              ),
              'input_placeholder' => 
              array (
                $language_id => 'Email address here',
                1 => 'Email address here',
              ),
              'subscribe_text' => 
              array (
                $language_id => 'Sign in',
                1 => 'Sign in',
              ),
              'unsubscribe_text' => 
              array (
                $language_id => '',
                1 => '',
              ),
            ),
          ),
          2 => 
          array (
            'status' => '1',
            'sort' => '2',
            'type' => 'html',
            'html' => 
            array (
              $language_id => '',
              1 => '<div class="row">
	<!-- Information -->
	<div class="col-sm-3">
		<h4>My account</h4>
		<div class="strip-line"></div>
		<ul>
			<li><a href="#">Sign In</a></li>
			<li><a href="#">View Cart</a></li>
			<li><a href="#">My Wishlist</a></li>
			<li><a href="#">Track My Order</a></li>
			<li><a href="#">Help</a></li>
		</ul>
	</div>
	
	<!-- Customer Service -->
	<div class="col-sm-3">
		<h4>Information</h4>
		<div class="strip-line"></div>
		<ul>
			<li><a href="#">Delivery Information</a></li>
			<li><a href="#">Privacy Policy</a></li>
			<li><a href="#">Terms & Conditions</a></li>
			<li><a href="#">Contact us</a></li>
			<li><a href="#">Sitemap</a></li>
		</ul> 
	</div>
	
	<!-- Extras -->
	<div class="col-sm-3">
		<h4>Customer Services</h4>
		<div class="strip-line"></div>
		<ul>
			<li><a href="#">Shipping & Returns</a></li>
			<li><a href="#">Secure Shopping</a></li>
			<li><a href="#">International Shipping</a></li>
			<li><a href="#">Affiliates</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	
	<!-- My Account -->
	<div class="col-sm-3">
		<h4>Payment & Shipping</h4>
		<div class="strip-line"></div>
		<ul>
			<li><a href="#">Terms of Use</a></li>
			<li><a href="#">Payment Methods</a></li>
			<li><a href="#">Shipping Guide</a></li>
			<li><a href="#">Locations We Ship To</a></li>
			<li><a href="#">Estimated Delivery Time</a></li>
		</ul>
	</div>
</div>',
            ),
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'content_top',
    'status' => '1',
    'sort_order' => '2',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      3 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'products_tabs',
            'products_tabs' => 
            array (
              'module_layout' => 'products_grid_with_carousel2.tpl',
              'title' => 
              array (
                $language_id => 'Featured products',
                1 => 'Featured products',
              ),
              'description' => 
              array (
                $language_id => '',
                1 => '',
              ),
              'width' => '300',
              'height' => '300',
              'limit' => '8',
              'products' => 
              array (
                1 => 
                array (
                  'title' => 
                  array (
                    $language_id => 'All',
                    1 => 'All',
                  ),
                  'get_products_from' => 'most_viewed',
                  'product' => '',
                  'products' => '',
                  'category' => '',
                  'categories' => '',
                ),
                2 => 
                array (
                  'title' => 
                  array (
                    $language_id => 'TV & Audio',
                    1 => 'TV & Audio',
                  ),
                  'get_products_from' => 'latest',
                  'product' => '',
                  'products' => '',
                  'category' => '',
                  'categories' => '',
                ),
                3 => 
                array (
                  'title' => 
                  array (
                    $language_id => 'Laptop',
                    1 => 'Laptop',
                  ),
                  'get_products_from' => 'random',
                  'product' => '',
                  'products' => '',
                  'category' => '',
                  'categories' => '',
                ),
                4 => 
                array (
                  'title' => 
                  array (
                    $language_id => 'Accessories',
                    1 => 'Accessories',
                  ),
                  'get_products_from' => 'random',
                  'product' => '',
                  'products' => '',
                  'category' => '',
                  'categories' => '',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  3 => 
  array (
    'custom_class' => 'full-width max-width',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '40',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'customfooter',
    'status' => '1',
    'sort_order' => '5',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      4 => 
      array (
        'status' => '1',
        'width' => '4',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'default2.tpl',
              'title' => 
              array (
                $language_id => 'New products',
                1 => 'New products',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '42,49,46',
              'category' => '',
              'categories' => '',
              'width' => '150',
              'height' => '150',
              'limit' => '3',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'status' => '1',
        'width' => '4',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '2',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'default2.tpl',
              'title' => 
              array (
                $language_id => 'Onsale products',
                1 => 'Onsale products',
              ),
              'get_products_from' => 'most_viewed',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '150',
              'height' => '150',
              'limit' => '3',
            ),
          ),
        ),
      ),
      6 => 
      array (
        'status' => '1',
        'width' => '4',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '3',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'default2.tpl',
              'title' => 
              array (
                $language_id => 'Most viewed',
                1 => 'Most viewed',
              ),
              'get_products_from' => 'random',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '150',
              'height' => '150',
              'limit' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
); 

$this->model_setting_setting->editSetting( "advanced_grid", $output );	

?>