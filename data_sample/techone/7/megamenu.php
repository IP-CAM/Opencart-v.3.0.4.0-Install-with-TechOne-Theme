<?php 

 $language_id = 2;
foreach($data['languages'] as $language) {
   if($language['language_id'] != 1) {
       $language_id = $language['language_id'];
   }
}

$output = array();
$output["megamenu_module"] = array (
  0 => 
  array (
    'module_id' => 0,
    'layout_id' => '99999',
    'position' => 'menu',
    'status' => '1',
    'display_on_mobile' => '0',
    'sort_order' => 1,
    'orientation' => '0',
    'search_bar' => 0,
    'navigation_text' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'home_text' => 
    array (
      $language_id => 'home',
      1 => 'home',
    ),
    'full_width' => '0',
    'home_item' => 'disabled',
    'animation' => 'shift-up',
    'animation_time' => 200,
    'status_cache' => 0,
    'cache_time' => 1,
  ),
);

$this->model_setting_setting->editSetting( "megamenu", $output );	

$query = $this->db->query("
	DROP TABLE IF EXISTS `".DB_PREFIX ."mega_menu`
");

$query = $this->db->query("
	DROP TABLE IF EXISTS `".DB_PREFIX ."mega_menu_modules`
");

$query = $this->db->query("
	DROP TABLE IF EXISTS `".DB_PREFIX ."mega_menu_links`
");

$query = $this->db->query("
	CREATE TABLE IF NOT EXISTS `".DB_PREFIX."mega_menu` (
		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`module_id` int(11) NOT NULL DEFAULT '0',
		`parent_id` int(11) NOT NULL,
		`rang` int(11) NOT NULL,
		`icon` varchar(255) NOT NULL DEFAULT '',
		`name` text,
		`link` text,
		`description` text,
		`label` text,
		`label_text_color` text,
		`label_background_color` text,
		`custom_class` text,
		`new_window` int(11) NOT NULL DEFAULT '0',
		`status` int(11) NOT NULL DEFAULT '0',
		`display_on_mobile` int(11) NOT NULL DEFAULT '0',
		`position` int(11) NOT NULL DEFAULT '0',
		`submenu_width` text,
		`submenu_type` int(11) NOT NULL DEFAULT '0',
		`submenu_background` text,
		`submenu_background_position` text,
		`submenu_background_repeat` text,
		`content_width` int(11) NOT NULL DEFAULT '12',
		`content_type` int(11) NOT NULL DEFAULT '0',
		`content` text,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
");

$query = $this->db->query("
	CREATE TABLE IF NOT EXISTS `".DB_PREFIX."mega_menu_modules` (
		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`name` text,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
");

$query = $this->db->query("
	CREATE TABLE IF NOT EXISTS `".DB_PREFIX."mega_menu_links` (
		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`name` text,
		`name_for_autocomplete` text,
		`url` text,
		`label` text,
		`label_text` text,
		`label_background` text,
		`image` text,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
");

$query = $this->db->query("
INSERT INTO `".DB_PREFIX."mega_menu_links` (`id`, `name`, `name_for_autocomplete`, `url`, `label`, `label_text`, `label_background`, `image`) VALUES
(1, 'a:2:{i:" . $language_id . ";s:11:\"Shop layout\";i:1;s:11:\"Shop layout\";}', 'Shop layout', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(2, 'a:2:{i:" . $language_id . ";s:14:\"Grid 3 Columns\";i:1;s:14:\"Grid 3 Columns\";}', 'Grid 3 Columns', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(3, 'a:2:{i:" . $language_id . ";s:14:\"Grid 4 Columns\";i:1;s:14:\"Grid 4 Columns\";}', 'Grid 4 Columns', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(4, 'a:2:{i:" . $language_id . ";s:14:\"Grid 5 Columns\";i:1;s:14:\"Grid 5 Columns\";}', 'Grid 5 Columns', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(5, 'a:2:{i:" . $language_id . ";s:17:\"Shop Left Sidebar\";i:1;s:17:\"Shop Left Sidebar\";}', 'Shop Left Sidebar', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(6, 'a:2:{i:" . $language_id . ";s:18:\"Shop Right Sidebar\";i:1;s:18:\"Shop Right Sidebar\";}', 'Shop Right Sidebar', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(7, 'a:2:{i:" . $language_id . ";s:15:\"Shop List Style\";i:1;s:15:\"Shop List Style\";}', 'Shop List Style', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(8, 'a:2:{i:" . $language_id . ";s:14:\"Product Layout\";i:1;s:14:\"Product Layout\";}', 'Product Layout', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(9, 'a:2:{i:" . $language_id . ";s:9:\"Fullwidth\";i:1;s:9:\"Fullwidth\";}', 'Fullwidth', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(10, 'a:2:{i:" . $language_id . ";s:12:\"Left Sidebar\";i:1;s:12:\"Left Sidebar\";}', 'Left Sidebar', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(11, 'a:2:{i:" . $language_id . ";s:13:\"Right Sidebar\";i:1;s:13:\"Right Sidebar\";}', 'Right Sidebar', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(12, 'a:2:{i:" . $language_id . ";s:13:\"Product Types\";i:1;s:13:\"Product Types\";}', 'Product Types', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(13, 'a:2:{i:" . $language_id . ";s:6:\"Simple\";i:1;s:6:\"Simple\";}', 'Simple', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(14, 'a:2:{i:" . $language_id . ";s:8:\"Variable\";i:1;s:8:\"Variable\";}', 'Variable', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(15, 'a:2:{i:" . $language_id . ";s:20:\"External / Affiliate\";i:1;s:20:\"External / Affiliate\";}', 'External / Affiliate', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(16, 'a:2:{i:" . $language_id . ";s:7:\"Grouped\";i:1;s:7:\"Grouped\";}', 'Grouped', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(17, 'a:2:{i:" . $language_id . ";s:12:\"Out of stock\";i:1;s:12:\"Out of stock\";}', 'Out of stock', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(18, 'a:2:{i:" . $language_id . ";s:19:\"Laptop &amp; Tablet\";i:1;s:19:\"Laptop &amp; Tablet\";}', 'Laptop &amp; Tablet', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(19, 'a:2:{i:" . $language_id . ";s:32:\"Laptops, Desktops &amp; Monitors\";i:1;s:32:\"Laptops, Desktops &amp; Monitors\";}', 'Laptops, Desktops &amp; Monitors', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(20, 'a:2:{i:" . $language_id . ";s:18:\"Printers &amp; Ink\";i:1;s:18:\"Printers &amp; Ink\";}', 'Printers &amp; Ink', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(21, 'a:2:{i:" . $language_id . ";s:20:\"Computer Accessories\";i:1;s:20:\"Computer Accessories\";}', 'Computer Accessories', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(22, 'a:2:{i:" . $language_id . ";s:8:\"Software\";i:1;s:8:\"Software\";}', 'Software', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(23, 'a:2:{i:" . $language_id . ";s:7:\"Macbook\";i:1;s:7:\"Macbook\";}', 'Macbook', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(24, 'a:2:{i:" . $language_id . ";s:11:\"Macbook Air\";i:1;s:11:\"Macbook Air\";}', 'Macbook Air', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(25, 'a:2:{i:" . $language_id . ";s:10:\"Laptop Pro\";i:1;s:10:\"Laptop Pro\";}', 'Laptop Pro', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(26, 'a:2:{i:" . $language_id . ";s:14:\"TV &amp; AUDIO\";i:1;s:14:\"TV &amp; AUDIO\";}', 'TV &amp; AUDIO', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(27, 'a:2:{i:" . $language_id . ";s:5:\"Mouse\";i:1;s:5:\"Mouse\";}', 'Mouse', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(28, 'a:2:{i:" . $language_id . ";s:23:\"Printer and Accessories\";i:1;s:23:\"Printer and Accessories\";}', 'Printer and Accessories', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(29, 'a:2:{i:" . $language_id . ";s:17:\"Network Equipment\";i:1;s:17:\"Network Equipment\";}', 'Network Equipment', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(30, 'a:2:{i:" . $language_id . ";s:19:\"Computer Components\";i:1;s:19:\"Computer Components\";}', 'Computer Components', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(31, 'a:2:{i:" . $language_id . ";s:12:\"Memory Stick\";i:1;s:12:\"Memory Stick\";}', 'Memory Stick', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(32, 'a:2:{i:" . $language_id . ";s:12:\"Selfie Stick\";i:1;s:12:\"Selfie Stick\";}', 'Selfie Stick', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(33, 'a:2:{i:" . $language_id . ";s:10:\"Binoculars\";i:1;s:10:\"Binoculars\";}', 'Binoculars', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(34, 'a:2:{i:" . $language_id . ";s:10:\"SMARTPHONE\";i:1;s:10:\"SMARTPHONE\";}', 'SMARTPHONE', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(35, 'a:2:{i:" . $language_id . ";s:11:\"Accessories\";i:1;s:11:\"Accessories\";}', 'Accessories', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(36, 'a:2:{i:" . $language_id . ";s:15:\"Phone Batteries\";i:1;s:15:\"Phone Batteries\";}', 'Phone Batteries', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(37, 'a:2:{i:" . $language_id . ";s:13:\"Phone Charger\";i:1;s:13:\"Phone Charger\";}', 'Phone Charger', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(38, 'a:2:{i:" . $language_id . ";s:12:\"Phone Screen\";i:1;s:12:\"Phone Screen\";}', 'Phone Screen', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(39, 'a:2:{i:" . $language_id . ";s:8:\"Head Set\";i:1;s:8:\"Head Set\";}', 'Head Set', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(40, 'a:2:{i:" . $language_id . ";s:8:\"Software\";i:1;s:8:\"Software\";}', 'Software', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(41, 'a:2:{i:" . $language_id . ";s:9:\"HEADPHONE\";i:1;s:9:\"HEADPHONE\";}', 'HEADPHONE', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(42, 'a:2:{i:" . $language_id . ";s:11:\"Accessories\";i:1;s:11:\"Accessories\";}', 'Accessories', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(43, 'a:2:{i:" . $language_id . ";s:15:\"Phone Batteries\";i:1;s:15:\"Phone Batteries\";}', 'Phone Batteries', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(44, 'a:2:{i:" . $language_id . ";s:13:\"Phone Charger\";i:1;s:13:\"Phone Charger\";}', 'Phone Charger', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(45, 'a:2:{i:" . $language_id . ";s:12:\"Phone Screen\";i:1;s:12:\"Phone Screen\";}', 'Phone Screen', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(46, 'a:2:{i:" . $language_id . ";s:8:\"Head Set\";i:1;s:8:\"Head Set\";}', 'Head Set', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(47, 'a:2:{i:" . $language_id . ";s:8:\"Software\";i:1;s:8:\"Software\";}', 'Software', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(48, 'a:2:{i:" . $language_id . ";s:6:\"CAMERA\";i:1;s:6:\"CAMERA\";}', 'CAMERA', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(49, 'a:2:{i:" . $language_id . ";s:11:\"Accessories\";i:1;s:11:\"Accessories\";}', 'Accessories', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(50, 'a:2:{i:" . $language_id . ";s:15:\"Phone Batteries\";i:1;s:15:\"Phone Batteries\";}', 'Phone Batteries', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(51, 'a:2:{i:" . $language_id . ";s:13:\"Phone Charger\";i:1;s:13:\"Phone Charger\";}', 'Phone Charger', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(52, 'a:2:{i:" . $language_id . ";s:12:\"Phone Screen\";i:1;s:12:\"Phone Screen\";}', 'Phone Screen', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(53, 'a:2:{i:" . $language_id . ";s:17:\"PRINTER &amp; INK\";i:1;s:17:\"PRINTER &amp; INK\";}', 'PRINTER &amp; INK', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(54, 'a:2:{i:" . $language_id . ";s:10:\"My account\";i:1;s:10:\"My account\";}', 'My account', 'index.php?route=account/account', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(55, 'a:2:{i:" . $language_id . ";s:8:\"Checkout\";i:1;s:8:\"Checkout\";}', 'Checkout', 'index.php?route=checkout/checkout', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(56, 'a:2:{i:" . $language_id . ";s:4:\"Cart\";i:1;s:4:\"Cart\";}', 'Cart', 'index.php?route=checkout/cart', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(57, 'a:2:{i:" . $language_id . ";s:8:\"Wishlist\";i:1;s:8:\"Wishlist\";}', 'Wishlist', 'index.php?route=account/wishlist', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(58, 'a:2:{i:" . $language_id . ";s:3:\"Faq\";i:1;s:3:\"Faq\";}', 'Faq', 'index.php?route=extension/module/faq', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
(59, 'a:2:{i:" . $language_id . ";s:10:\"Contact us\";i:1;s:10:\"Contact us\";}', 'Contact us', 'index.php?route=information/contact', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', '');

");

$query = $this->db->query("
	INSERT INTO `".DB_PREFIX."mega_menu` (`id`, `module_id`, `parent_id`, `rang`, `icon`, `name`, `link`, `description`, `label`, `label_text_color`, `label_background_color`, `custom_class`, `new_window`, `status`, `display_on_mobile`, `position`, `submenu_width`, `submenu_type`, `submenu_background`, `submenu_background_position`, `submenu_background_repeat`, `content_width`, `content_type`, `content`) VALUES
	(29, 0, 0, 5, 'catalog/version7/cat6-black.png', 'a:2:{i:" . $language_id . ";s:18:\"Printers &amp; Ink\";i:1;s:18:\"Printers &amp; Ink\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(30, 0, 0, 6, 'catalog/version7/cat7-black.png', 'a:2:{i:" . $language_id . ";s:19:\"Game &amp; Consoles\";i:1;s:19:\"Game &amp; Consoles\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(24, 0, 0, 0, 'catalog/version7/cat1-black.png', 'a:2:{i:" . $language_id . ";s:7:\"Cameras\";i:1;s:7:\"Cameras\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(25, 0, 0, 1, 'catalog/version7/cat2-black.png', 'a:2:{i:" . $language_id . ";s:14:\"TV &amp; Audio\";i:1;s:14:\"TV &amp; Audio\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(26, 0, 0, 2, 'catalog/version7/cat3-black.png', 'a:2:{i:" . $language_id . ";s:21:\"Laptop &amp; Computer\";i:1;s:21:\"Laptop &amp; Computer\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(27, 0, 0, 3, 'catalog/version7/cat4-black.png', 'a:2:{i:" . $language_id . ";s:11:\"Accessories\";i:1;s:11:\"Accessories\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(28, 0, 0, 4, 'catalog/version7/cat5-black.png', 'a:2:{i:" . $language_id . ";s:22:\"Smartphone &amp; Table\";i:1;s:22:\"Smartphone &amp; Table\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(12, 1, 0, 0, 'catalog/cat-01.png', 'a:2:{i:2;s:6:\"Camera\";i:1;s:6:\"Camera\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '615px', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(13, 1, 0, 3, 'catalog/cat-02.png', 'a:2:{i:2;s:14:\"Tv &amp; Audio\";i:1;s:14:\"Tv &amp; Audio\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '650px', 0, 'catalog/bg-menu.png', 'top right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(14, 1, 0, 5, 'catalog/cat-03.png', 'a:2:{i:2;s:21:\"Laptop &amp; Computer\";i:1;s:21:\"Laptop &amp; Computer\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(15, 1, 0, 6, 'catalog/cat-04.png', 'a:2:{i:2;s:11:\"Accessories\";i:1;s:11:\"Accessories\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(16, 1, 0, 7, 'catalog/cat-05.png', 'a:2:{i:2;s:22:\"Smartphone &amp; Table\";i:1;s:22:\"Smartphone &amp; Table\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(17, 1, 0, 8, 'catalog/cat-06.png', 'a:2:{i:2;s:18:\"Printers &amp; Ink\";i:1;s:18:\"Printers &amp; Ink\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(18, 1, 0, 9, 'catalog/cat-07.png', 'a:2:{i:2;s:19:\"Game &amp; Consoles\";i:1;s:19:\"Game &amp; Consoles\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(19, 1, 0, 10, 'catalog/cat-08.png', 'a:2:{i:2;s:9:\"Headphone\";i:1;s:9:\"Headphone\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(20, 1, 0, 11, '', 'a:2:{i:2;s:14:\"All categories\";i:1;s:14:\"All categories\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', '', '', 'allcategories', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(21, 1, 12, 1, '', 'a:2:{i:2;s:5:\"Links\";i:1;s:5:\"Links\";}', '', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 12, 2, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:3:{i:0;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:11:\"Shop layout\";s:2:\"id\";i:1;s:8:\"children\";a:5:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Grid 3 Columns\";s:2:\"id\";i:2;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Grid 4 Columns\";s:2:\"id\";i:3;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Grid 5 Columns\";s:2:\"id\";i:4;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:17:\"Shop Left Sidebar\";s:2:\"id\";i:5;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:18:\"Shop Right Sidebar\";s:2:\"id\";i:6;}}}i:1;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Product Layout\";s:2:\"id\";i:8;s:8:\"children\";a:3:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:9:\"Fullwidth\";s:2:\"id\";i:9;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:12:\"Left Sidebar\";s:2:\"id\";i:10;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Right Sidebar\";s:2:\"id\";i:11;}}}i:2;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Product Types\";s:2:\"id\";i:12;s:8:\"children\";a:5:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:6:\"Simple\";s:2:\"id\";i:13;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:8:\"Variable\";s:2:\"id\";i:14;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:20:\"External / Affiliate\";s:2:\"id\";i:15;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:7:\"Grouped\";s:2:\"id\";i:16;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:12:\"Out of stock\";s:2:\"id\";i:17;}}}}s:7:\"columns\";s:1:\"3\";s:7:\"submenu\";s:1:\"2\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(22, 1, 12, 2, '', 'a:2:{i:2;s:6:\"Banner\";i:1;s:6:\"Banner\";}', '', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 12, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:2;s:112:\"&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/menu-banner.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;\";i:1;s:112:\"&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/menu-banner.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
	(23, 1, 13, 4, '', 'a:2:{i:2;s:5:\"Links\";i:1;s:5:\"Links\";}', '', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 10, 2, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:3:{i:0;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Laptop & Tablet\";s:2:\"id\";i:18;s:8:\"children\";a:7:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:28:\"Laptops, Desktops & Monitors\";s:2:\"id\";i:19;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Printers & Ink\";s:2:\"id\";i:20;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:20:\"Computer Accessories\";s:2:\"id\";i:21;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:8:\"Software\";s:2:\"id\";i:40;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:7:\"Macbook\";s:2:\"id\";i:23;}i:5;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:11:\"Macbook Air\";s:2:\"id\";i:24;}i:6;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:10:\"Laptop Pro\";s:2:\"id\";i:25;}}}i:1;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:10:\"TV & AUDIO\";s:2:\"id\";i:26;s:8:\"children\";a:7:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:5:\"Mouse\";s:2:\"id\";i:27;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:23:\"Printer and Accessories\";s:2:\"id\";i:28;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:17:\"Network Equipment\";s:2:\"id\";i:29;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:19:\"Computer Components\";s:2:\"id\";i:30;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:12:\"Memory Stick\";s:2:\"id\";i:31;}i:5;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:12:\"Selfie Stick\";s:2:\"id\";i:32;}i:6;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:10:\"Binoculars\";s:2:\"id\";i:33;}}}i:2;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:10:\"SMARTPHONE\";s:2:\"id\";i:34;s:8:\"children\";a:3:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:11:\"Accessories\";s:2:\"id\";i:35;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:8:\"Head Set\";s:2:\"id\";i:39;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:8:\"Software\";s:2:\"id\";i:22;}}}}s:7:\"columns\";s:1:\"2\";s:7:\"submenu\";s:1:\"2\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:2;s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}')

");

?>