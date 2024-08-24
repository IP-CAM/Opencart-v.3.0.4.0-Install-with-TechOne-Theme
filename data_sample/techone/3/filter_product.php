<?php 
$language_id = 2;
foreach($data['languages'] as $language) {
   if($language['language_id'] != 1) {
       $language_id = $language['language_id'];
   }
}
                 
$output = array();
$output["filter_product_module"] = array (
  1 => 
  array (
    'tabs' => 
    array (
      1 => 
      array (
        'heading' => 
        array (
          $language_id => 'New products',
          1 => 'New products',
        ),
        'title' => 'latest',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '1',
    'width' => '200',
    'height' => '200',
    'itemsperpage' => '4',
    'cols' => '1',
    'limit' => '8',
    'layout_id' => '3',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '6',
  ),
  2 => 
  array (
    'tabs' => 
    array (
      2 => 
      array (
        'heading' => 
        array (
          $language_id => 'New arrivals',
          1 => 'New arrivals',
        ),
        'title' => 'latest',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '1',
    'width' => '300',
    'height' => '300',
    'itemsperpage' => '4',
    'cols' => '1',
    'limit' => '8',
    'layout_id' => '1',
    'position' => 'content_top',
    'status' => '1',
    'sort_order' => '6',
  ),
  3 => 
  array (
    'tabs' => 
    array (
      3 => 
      array (
        'heading' => 
        array (
          $language_id => 'Onsale products',
          1 => 'Onsale products',
        ),
        'title' => 'most_viewed',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '1',
    'width' => '300',
    'height' => '300',
    'itemsperpage' => '4',
    'cols' => '1',
    'limit' => '8',
    'layout_id' => '1',
    'position' => 'content_top',
    'status' => '1',
    'sort_order' => '7',
  ),
  4 => 
  array (
    'tabs' => 
    array (
      4 => 
      array (
        'heading' => 
        array (
          $language_id => 'Bestseller',
          1 => 'Bestseller',
        ),
        'title' => 'most_viewed',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '1',
    'width' => '200',
    'height' => '200',
    'itemsperpage' => '3',
    'cols' => '1',
    'limit' => '6',
    'layout_id' => '1',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '5',
  ),
); 

$this->model_setting_setting->editSetting( "filter_product", $output );	

?>