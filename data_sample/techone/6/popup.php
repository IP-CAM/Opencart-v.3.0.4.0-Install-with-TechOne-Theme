<?php 
$language_id = 2;
foreach($data['languages'] as $language) {
   if($language['language_id'] != 1) {
       $language_id = $language['language_id'];
   }
}
                 
$output = array();
$output["popup_module"] = array (
  1 => 
  array (
    'type' => '1',
    'newsletter_popup_title' => 
    array (
      $language_id => 'Sign up our<br> <strong>newsletter</strong> And get',
      1 => 'Sign up our<br> <strong>newsletter</strong> And get',
    ),
    'newsletter_popup_text' => 
    array (
      $language_id => '<div class="sale-off">25%Off</div>
<div class="text-uptocase">first purchase On all online store items.</div>',
      1 => '<div class="sale-off">25%Off</div>
<div class="text-uptocase">first purchase On all online store items.</div>',
    ),
    'newsletter_input_placeholder' => 
    array (
      $language_id => 'Enter your Email..',
      1 => 'Enter your Email..',
    ),
    'newsletter_subscribe_button_text' => 
    array (
      $language_id => 'Sign up',
      1 => 'Sign up',
    ),
    'custom_popup_title' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'custom_popup_text' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'contact_form_popup_title' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'module_id' => '1',
    'show_only_once' => '1',
    'display_text_dont_show_again' => '0',
    'text_dont_show_again' => 
    array (
      $language_id => 'Don\'t show this popup again',
      1 => 'Don\'t show this popup again',
    ),
    'display_buttons_yes_no' => '1',
    'no' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'yes' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'content_width' => '630',
    'background_color' => '',
    'background_image' => 'catalog/newsleter-bg.jpg',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'show_after' => '500',
    'autoclose_after' => '',
    'disable_on_desktop' => '0',
    'layout_id' => '1',
    'position' => 'popup',
    'status' => '1',
    'sort_order' => '0',
  ),
); 

$this->model_setting_setting->editSetting( "popup", $output );	

?>