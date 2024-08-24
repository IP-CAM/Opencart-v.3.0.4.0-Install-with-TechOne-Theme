<?php 
$language_id = 2;
foreach($data['languages'] as $language) {
   if($language['language_id'] != 1) {
       $language_id = $language['language_id'];
   }
}
                 
$output = array();
$output["custom_module_module"] = array (
  1 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'html' => 
    array (
      $language_id => '<div class="header-socilas">
<a class="social" target="_blank" href="https://twitter.com" title="Twitter"><i class="fa fa-twitter"></i></a>                                <a class="social" target="_blank" href="https://facebook.com" title="Facebook"><i class="fa fa-facebook"></i></a>                                <a class="social" target="_blank" href="" title="Google plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>                                <a class="social" target="_blank" href="" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>                                <a class="social" target="_blank" href="" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>                            </div>',
      1 => '<div class="header-socilas">
<a class="social" target="_blank" href="https://twitter.com" title="Twitter"><i class="fa fa-twitter"></i></a>                                <a class="social" target="_blank" href="https://facebook.com" title="Facebook"><i class="fa fa-facebook"></i></a>                                <a class="social" target="_blank" href="" title="Google plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>                                <a class="social" target="_blank" href="" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>                                <a class="social" target="_blank" href="" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>                            </div>',
    ),
    'layout_id' => '99999',
    'position' => 'top_block',
    'status' => '1',
    'sort_order' => '',
  ),
  2 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'html' => 
    array (
      $language_id => '<div class="hotline">
<span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
<span class="content">
<span class="text">Call us now</span>
<span class="phone">(080)123 4567 891</span>
</span>
</div>',
      1 => '<div class="hotline">
<span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
<span class="content">
<span class="text">Call us now</span>
<span class="phone">(080)123 4567 891</span>
</span>
</div>',
    ),
    'layout_id' => '99999',
    'position' => 'top_block',
    'status' => '1',
    'sort_order' => '',
  ),
  3 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'html' => 
    array (
      $language_id => '<div class="row banners">
	<div class="col-sm-12"><a href="#"><img src="image/catalog/shop_banner.jpg" alt=""></a></div>
</div>',
      1 => '<div class="row banners">
	<div class="col-sm-12"><a href="#"><img src="image/catalog/shop_banner.jpg" alt=""></a></div>
</div>',
    ),
    'layout_id' => '3',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '4',
  ),
  4 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'html' => 
    array (
      $language_id => '<div style="background: #1e1e1e">
	<div class="container" style="padding-left: 0 !important;padding-right: 0 !important">
		<div id="carousel2" class="owl-carousel carousel-brands" style="margin: 0px !important;padding: 0px !important">
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
		</div>
	</div>
</div>

<script type="text/javascript"><!--
$(\'#carousel2\').owlCarousel({
	items: 5,
	autoPlay: 3000,
	navigation: true,
	navigationText: false,
	pagination: true
});
--></script>',
      1 => '<div style="background: #1e1e1e">
	<div class="container" style="padding-left: 0 !important;padding-right: 0 !important">
		<div id="carousel2" class="owl-carousel carousel-brands" style="margin: 0px !important;padding: 0px !important">
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/catalog/version5/brand.png" alt="Starbucks" class="img-responsive" />
			</div>
		</div>
	</div>
</div>

<script type="text/javascript"><!--
$(\'#carousel2\').owlCarousel({
	items: 5,
	autoPlay: 3000,
	navigation: true,
	navigationText: false,
	pagination: true
});
--></script>',
    ),
    'layout_id' => '1',
    'position' => 'customfooter_top',
    'status' => '1',
    'sort_order' => '',
  ),
  5 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'html' => 
    array (
      $language_id => '<div class="techone-categories">
	<div class="row">
		<div class="col-sm-3 col-xs-6">
			<div class="techone-category">
				<div class="thumb" onclick="location.href=\'#\'">
					<figure>
						<img src="image/catalog/version5/home5-cat-01.jpg" width="270" height="270" alt="">
					</figure>
				</div>
				
				<div class="info">
					<a href="#">Cell Phones &amp; Accessories</a>
					<p class="count-items">7 ITEMS</p>
				</div>
			</div>
		</div>
		
		<div class="col-sm-3 col-xs-6">
			<div class="techone-category">
				<div class="thumb" onclick="location.href=\'#\'">
					<figure>
						<img src="image/catalog/version5/home5-cat-02.jpg" width="270" height="270" alt="">
					</figure>
				</div>
				
				<div class="info">
					<a href="#">Computers & Tablets</a>
					<p class="count-items">9 ITEMS</p>
				</div>
			</div>
		</div>
		
		<div class="col-sm-3 col-xs-6">
			<div class="techone-category">
				<div class="thumb" onclick="location.href=\'#\'">
					<figure>
						<img src="image/catalog/version5/home5-cat-03.jpg" width="270" height="270" alt="">
					</figure>
				</div>
				
				<div class="info">
					<a href="#">Cameras</a>
					<p class="count-items">8 ITEMS</p>
				</div>
			</div>
		</div>
		
		<div class="col-sm-3 col-xs-6">
			<div class="techone-category">
				<div class="thumb" onclick="location.href=\'#\'">
					<figure>
						<img src="image/catalog/version5/home5-cat-04.jpg" width="270" height="270" alt="">
					</figure>
				</div>
				
				<div class="info">
					<a href="#">Gaming console</a>
					<p class="count-items">9 ITEMS</p>
				</div>
			</div>
		</div>
	</div>
</div>',
      1 => '<div class="techone-categories">
	<div class="row">
		<div class="col-sm-3 col-xs-6">
			<div class="techone-category">
				<div class="thumb" onclick="location.href=\'#\'">
					<figure>
						<img src="image/catalog/version5/home5-cat-01.jpg" width="270" height="270" alt="">
					</figure>
				</div>
				
				<div class="info">
					<a href="#">Cell Phones &amp; Accessories</a>
					<p class="count-items">7 ITEMS</p>
				</div>
			</div>
		</div>
		
		<div class="col-sm-3 col-xs-6">
			<div class="techone-category">
				<div class="thumb" onclick="location.href=\'#\'">
					<figure>
						<img src="image/catalog/version5/home5-cat-02.jpg" width="270" height="270" alt="">
					</figure>
				</div>
				
				<div class="info">
					<a href="#">Computers & Tablets</a>
					<p class="count-items">9 ITEMS</p>
				</div>
			</div>
		</div>
		
		<div class="col-sm-3 col-xs-6">
			<div class="techone-category">
				<div class="thumb" onclick="location.href=\'#\'">
					<figure>
						<img src="image/catalog/version5/home5-cat-03.jpg" width="270" height="270" alt="">
					</figure>
				</div>
				
				<div class="info">
					<a href="#">Cameras</a>
					<p class="count-items">8 ITEMS</p>
				</div>
			</div>
		</div>
		
		<div class="col-sm-3 col-xs-6">
			<div class="techone-category">
				<div class="thumb" onclick="location.href=\'#\'">
					<figure>
						<img src="image/catalog/version5/home5-cat-04.jpg" width="270" height="270" alt="">
					</figure>
				</div>
				
				<div class="info">
					<a href="#">Gaming console</a>
					<p class="count-items">9 ITEMS</p>
				</div>
			</div>
		</div>
	</div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '0',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>