<?php 
$language_id = 2;
foreach($data['languages'] as $language) {
   if($language['language_id'] != 1) {
       $language_id = $language['language_id'];
   }
}
                 
$output = array();
$output["blog_latest_module"] = array (
  1 => 
  array (
    'heading_title' => 
    array (
      $language_id => 'From our blog',
      1 => 'From our blog',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'template' => 'techone_default.tpl',
    'status' => '1',
    'thumb_width' => '360',
    'thumb_height' => '331',
    'articles_limit' => '3',
    'sort_order' => '6',
  ),
); 

$this->model_setting_setting->editSetting( "blog_latest", $output );	

?>