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
<span class="icon"><i class="fa fa-life-buoy" aria-hidden="true"></i></span>
<span class="content">
<span class="text">Support (080)123 456 7890</span>
<span class="text info2">Email: info@techone.com</span>
</span>
</div>',
      1 => '<div class="hotline">
<span class="icon"><i class="fa fa-life-buoy" aria-hidden="true"></i></span>
<span class="content">
<span class="text">Support (080)123 456 7890</span>
<span class="text info2">Email: info@techone.com</span>
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
	<div class="col-sm-12" style="padding-top: 10px"><a href="#"><img src="image/catalog/version7/banner_01.jpg" alt=""></a></div>
	<div class="col-sm-12" style="padding-top: 10px"><a href="#"><img src="image/catalog/version7/banner_02.jpg" alt=""></a></div>
	<div class="col-sm-12" style="padding-top: 10px"><a href="#"><img src="image/catalog/version7/banner_03.jpg" alt=""></a></div>
</div>',
      1 => '<div class="row banners">
	<div class="col-sm-12" style="padding-top: 10px"><a href="#"><img src="image/catalog/version7/banner_01.jpg" alt=""></a></div>
	<div class="col-sm-12" style="padding-top: 10px"><a href="#"><img src="image/catalog/version7/banner_02.jpg" alt=""></a></div>
	<div class="col-sm-12" style="padding-top: 10px"><a href="#"><img src="image/catalog/version7/banner_03.jpg" alt=""></a></div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'column_right',
    'status' => '1',
    'sort_order' => '3',
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
      $language_id => '<div style="background: #f5f5f5">
	<div class="container" style="padding-left: 0 !important;padding-right: 0 !important">
		<div id="carousel2" class="owl-carousel carousel-brands" style="margin: 0px !important;padding: 0px !important">
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Nintendo" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="NFL" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="RedBull" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Coca Cola" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Sony" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Burger King" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Canon" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Harley Davidson" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Dell" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Disney" class="img-responsive" />
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
      1 => '<div style="background: #f5f5f5">
	<div class="container" style="padding-left: 0 !important;padding-right: 0 !important">
		<div id="carousel2" class="owl-carousel carousel-brands" style="margin: 0px !important;padding: 0px !important">
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Starbucks" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Nintendo" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="NFL" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="RedBull" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Coca Cola" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Sony" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Burger King" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Canon" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Harley Davidson" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Dell" class="img-responsive" />
			</div>
			
			<div class="item text-center">
				<img src="image/cache/catalog/brand1-210x112.jpg" alt="Disney" class="img-responsive" />
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
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>