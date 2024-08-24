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
	<div class="col-sm-6"><a href="#"><img src="image/catalog/banner-01.jpg" alt=""></a></div>
	<div class="col-sm-6"><a href="#"><img src="image/catalog/banner-02.jpg" alt=""></a></div>
</div>',
      1 => '<div class="row banners">
	<div class="col-sm-6"><a href="#"><img src="image/catalog/banner-01.jpg" alt=""></a></div>
	<div class="col-sm-6"><a href="#"><img src="image/catalog/banner-02.jpg" alt=""></a></div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '2',
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
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>