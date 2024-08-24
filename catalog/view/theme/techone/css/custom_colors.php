<?php if($theme_options->get( 'font_status' ) == '1' || $theme_options->get( 'colors_status' ) == '1') { ?>
<style type="text/css">
	<?php if($theme_options->get( 'colors_status' ) == '1') { ?>
		<?php if($theme_options->get( 'body_font_text' ) != '') { ?>
		body,
		.dropdown-menu,
		textarea, 
		input[type="text"], 
		input[type="password"], 
		input[type="datetime"], 
		input[type="datetime-local"], 
		input[type="date"], 
		input[type="month"], 
		input[type="time"], 
		input[type="week"], 
		input[type="number"], 
		input[type="email"], 
		input[type="url"], 
		input[type="search"], 
		input[type="tel"], 
		input[type="color"], 
		.uneditable-input,
		select,
		.search_form .button-search,
		.search_form .button-search2,
		.product-filter .options .button-group button {
			color: <?php echo $theme_options->get( 'body_font_text' ); ?>;
		}
		
		.ui-autocomplete li a {
			color: <?php echo $theme_options->get( 'body_font_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_font_links' ) != '') { ?>
		a,
		.dropdown-menu a,
		.vertical ul.megamenu > li > a,
		.filter-product .filter-tabs ul > li.active > a,
		.filter-product .filter-tabs ul > li.active > a:hover,
		.filter-product .filter-tabs ul > li.active > a:focus {
			color: <?php echo $theme_options->get( 'body_font_links' ); ?>;
		}
		
		@media (max-width: 960px) {
			.responsive ul.megamenu > li > a {
				color: <?php echo $theme_options->get( 'body_font_links' ); ?> !important;
			}
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_font_links_hover' ) != '') { ?>
		a:hover,
		.box-category ul li a.active,
		.category-wall .name a,
		.box .tabsproducts li.active a,
		.popup .content .sale-off,
		.product-grid .product .name a:hover,
		.blog-list-default .blog-content .post-info .post-title a:hover,
		.blog-list-default .blog-content .post-info .readmore:hover,
		.vertical ul.megamenu > li.allcategories > a,
		.iconbox2 .icon,
		.blog-list-default2 .blog-content .post-info .post-title a:hover {
			color: <?php echo $theme_options->get( 'body_font_links_hover' ); ?>;
		}
		
		.header-type-2 ul.megamenu > li > a:hover, 
		.header-type-2 ul.megamenu > li.active > a,
		.header-type-2 ul.megamenu > li:hover > a,
		.vertical ul.megamenu > li.allcategories > a  {
			color: <?php echo $theme_options->get( 'body_font_links_hover' ); ?> !important;
		}
		
		body .popup-module .mfp-close,
		.product-filter .options .button-group button:hover, 
		.product-filter .options .button-group .active,
		.htabs a.selected,
		div.pagination-results ul li.active,
		.product-grid .product .image .quickview a:hover,
		.product-list .image .quickview a:hover,
		.blog-list-default .blog-content .post-info .time .month,
		.camera_wrap .owl-controls .owl-buttons .owl-prev:hover,
		.camera_wrap .owl-controls .owl-buttons .owl-next:hover,
		.carousel-brands .owl-prev:hover,
		.carousel-brands .owl-next:hover,
		.header-socilas .social:hover,
		.techone-socials .socials .social:hover,
		.blog-list-default2 .time .month {
			background: <?php echo $theme_options->get( 'body_font_links_hover' ); ?>;
		}
		
		div.pagination-results ul li.active,
		#top #cart_block .dropdown-menu,
		.homeproductsrow .featured-product .thumbnails-carousel .item:hover img, 
		.homeproductsrow .featured-product .thumbnails-carousel .active img {
			border-color: <?php echo $theme_options->get( 'body_font_links_hover' ); ?>;
		}
		
		.mfilter-slider-slider .ui-slider-handle, 
		#mfilter-price-slider .ui-slider-handle {
			background: <?php echo $theme_options->get( 'body_font_links_hover' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_price_text' ) != '') { ?>
		.compare-info .price-new, 
		.product-grid .product .price,
		.product-list .actions > div .price,
		#main .product-info .product-center .price .price-new,
		ul.megamenu li .product .price,
		.mini-cart-total td:last-child,
		.cart-total table tr td:last-child,
		.mini-cart-info td.total,
		#quickview .product-info .product-center .price .price-new,
		.advanced-grid-products .product .right .price,
		.product-list .price {
			color: <?php echo $theme_options->get( 'body_price_text' ); ?>;
		}
		
		.ui-autocomplete li span.price {
			color: <?php echo $theme_options->get( 'body_price_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_price_new_text' ) != '') { ?>
		.product-grid .product .price .price-new,
		.homeproductsrow .featured-product .price .price-new,
		.advanced-grid-products .product .right .price .price-new,
		.product-info .product-center .price .price-new #price-special,
		#quickview .product-info .product-center .price .price-new #price-special,
		.product-list .price .price-new {
			color: <?php echo $theme_options->get( 'body_price_new_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_price_old_text' ) != '') { ?>
		.product-list .price .price-old,
		.product-grid .product .price .price-old,
		.homeproductsrow .featured-product .price .price-old,
		.advanced-grid-products .product .right .price .price-old {
			color: <?php echo $theme_options->get( 'body_price_old_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_background_color' ) != '') { ?>
		body {
			background: <?php echo $theme_options->get( 'body_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_background_color' ) != '') { ?>
		.button, 
		.btn,
		.search_form .button-search, 
		.search_form .button-search2,
		.footer .newsletter .inputs .subscribe {
			background: <?php echo $theme_options->get( 'button_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_text_color' ) != '') { ?>
		.button, 
		.btn,
		.search_form .button-search, 
		.search_form .button-search2,
		.footer .newsletter .inputs .subscribe,
		body .popup-module .mfp-close {
			color: <?php echo $theme_options->get( 'button_text_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_background_color' ) != '') { ?>
		header {
			background: <?php echo $theme_options->get( 'header_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_bar_background_color' ) != '') { ?>
		#top-bar .background {
			background: <?php echo $theme_options->get( 'top_bar_background_color' ); ?>;
			border: none;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_bar_links_color' ) != '') { ?>
		#top-bar .header-links li a,
		#top-bar .dropdown > a {
			color: <?php echo $theme_options->get( 'top_bar_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_bar_border_color' ) != '') { ?>
		#top-bar .header-links li:before,
		#top-bar .dropdown:before {
			background: <?php echo $theme_options->get( 'top_bar_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_bar_social_icons_color' ) != '') { ?>
		.header-socilas .social {
			color: <?php echo $theme_options->get( 'top_bar_social_icons_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_block_border_color' ) != '') { ?>
		#top #cart_block .cart-heading:before {
			background: <?php echo $theme_options->get( 'top_cart_block_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_block_background_color' ) != '') { ?>
		#top #cart_block .cart-heading .cart-icon .count {
			background: <?php echo $theme_options->get( 'top_cart_block_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_block_count_text_color' ) != '') { ?>
		#top #cart_block .cart-heading .cart-icon .count {
			color: <?php echo $theme_options->get( 'top_cart_block_count_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_block_icon_color' ) != '') { ?>
		#top #cart_block .cart-heading .cart-icon {
			color: <?php echo $theme_options->get( 'top_cart_block_icon_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_block_text_color' ) != '') { ?>
		#top #cart_block .cart-heading .text2 {
			color: <?php echo $theme_options->get( 'top_cart_block_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_block_price_color' ) != '') { ?>
		#top #cart_block .cart-heading .text2 .amount {
			color: <?php echo $theme_options->get( 'top_cart_block_price_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_block_arrow_color' ) != '') { ?>
		#top #cart_block .cart-heading:after {
			color: <?php echo $theme_options->get( 'top_cart_block_arrow_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_megamenu_background_color' ) != '') { ?>
		.megamenu-wrapper,
		.fixed-header,
		.megamenuToogle-wrapper,
		.standard-body .full-width .menu-background {
			background: <?php echo $theme_options->get( 'top_megamenu_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_megamenu_links_color' ) != '') { ?>
		ul.megamenu > li > a,
		.megamenuToogle-wrapper .container {
			color: <?php echo $theme_options->get( 'top_megamenu_links_color' ); ?>;
		}
		
		.megamenuToogle-wrapper .container > div span {
			background: <?php echo $theme_options->get( 'top_megamenu_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_megamenu_links_hover_color' ) != '') { ?>
		ul.megamenu > li > a:hover, ul.megamenu > li.active > a, ul.megamenu > li.home > a, ul.megamenu > li:hover > a {
			color: <?php echo $theme_options->get( 'top_megamenu_links_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_vertical_megamenu_heading_background_color' ) != '') { ?>
		.vertical .megamenuToogle-wrapper {
			background: <?php echo $theme_options->get( 'top_vertical_megamenu_heading_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_icon_search_background_color' ) != '') { ?>
		.search_form .button-search, 
		.search_form .button-search2 {
			background: <?php echo $theme_options->get( 'top_icon_search_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_icon_search_text_color' ) != '') { ?>
		.search_form .button-search, 
		.search_form .button-search2 {
			color: <?php echo $theme_options->get( 'top_icon_search_text_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_hot_line_text_color' ) != '') { ?>
		.hotline {
			color: <?php echo $theme_options->get( 'top_hot_line_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_heading_background_color' ) != '') { ?>
		.box .box-heading,
		.box .box-heading:before {
			background: <?php echo $theme_options->get( 'box_heading_background_color' ); ?>;
		}
		
		.box .overflow-box-heading {
			border-bottom-color: <?php echo $theme_options->get( 'box_heading_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_heading_text_color' ) != '') { ?>
		.box .box-heading,
		.blog-list-default .blog-content .post-info .time .month {
			color: <?php echo $theme_options->get( 'box_heading_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_date_text' ) != '') { ?>
		#main .post .date-published,
		#main .news.v2 .media-body .bottom,
		.cosmetics-news .media .date-published,
		.medic-news .media .date-published,
		.wine-news .media .date-published,
		.cameras-news .media .date-published {
			color: <?php echo $theme_options->get( 'blog_date_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_categories_links_color' ) != '') { ?>
		#main .post .meta > li a {
			color: <?php echo $theme_options->get( 'blog_categories_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_categories_links_hover_color' ) != '') { ?>
		#main .post .meta > li a:hover {
			color: <?php echo $theme_options->get( 'blog_categories_links_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_tag_text_color' ) != '') { ?>
		#main .tagcloud a,
		#main .post .tags a,
		#main .news .media-body .tags a,
		#main .posts .post .tags a,
		.cosmetics-news .media .tags a,
		.cameras-news .media .tags a {
			color: <?php echo $theme_options->get( 'blog_tag_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_tag_background_color' ) != '') { ?>
		#main .tagcloud a,
		#main .post .tags a,
		#main .news .media-body .tags a,
		#main .posts .post .tags a,
		.cosmetics-news .media .tags a,
		.cameras-news .media .tags a {
			background: <?php echo $theme_options->get( 'blog_tag_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_tag_background_gradient_top_color' ) != '' && $theme_options->get( 'blog_tag_background_gradient_bottom_color' ) != '') { ?>
		#main .tagcloud a,
		#main .post .tags a,
		#main .news .media-body .tags a,
		#main .posts .post .tags a,
		.cosmetics-news .media .tags a,
		.cameras-news .media .tags a {
			background: <?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> !important; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'blog_tag_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 99%) !important; /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?>)) !important; /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 99%) !important; /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 99%) !important; /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 99%) !important; /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 99%) !important; /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_tag_hover_text_color' ) != '') { ?>
		#main .tagcloud a:hover,
		#main .post .tags a:hover,
		#main .news .media-body .tags a:hover,
		#main .posts .post .tags a:hover,
		.cosmetics-news .media .tags a:hover,
		.cameras-news .media .tags a:hover {
			color: <?php echo $theme_options->get( 'blog_tag_hover_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_tag_hover_background_color' ) != '') { ?>
		#main .tagcloud a:hover,
		#main .post .tags a:hover,
		#main .news .media-body .tags a:hover,
		#main .posts .post .tags a:hover,
		.cosmetics-news .media .tags a:hover,
		.cameras-news .media .tags a:hover {
			background: <?php echo $theme_options->get( 'blog_tag_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_tag_hover_background_gradient_top_color' ) != '' && $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ) != '') { ?>
		#main .tagcloud a:hover,
		#main .post .tags a:hover,
		#main .news .media-body .tags a:hover,
		#main .posts .post .tags a:hover,
		.cosmetics-news .media .tags a:hover,
		.cameras-news .media .tags a:hover {
			background: <?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> !important; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'blog_tag_hover_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 99%) !important; /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?>)) !important; /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 99%) !important; /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 99%) !important; /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 99%) !important; /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 99%) !important; /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_button_background_color' ) != '') { ?>
		#main .posts .button-more,
		.wine-news .button-more {
			background: <?php echo $theme_options->get( 'blog_button_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_button_border_color' ) != '') { ?>
		#main .posts .button-more,
		.wine-news .button-more {
			border-color: <?php echo $theme_options->get( 'blog_button_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_button_text_color' ) != '') { ?>
		#main .posts .button-more,
		.wine-news .button-more {
			color: <?php echo $theme_options->get( 'blog_button_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_button_hover_background_color' ) != '') { ?>
		#main .posts .button-more:hover,
		.wine-news .button-more:hover {
			background: <?php echo $theme_options->get( 'blog_button_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_button_hover_border_color' ) != '') { ?>
		#main .posts .button-more:hover,
		.wine-news .button-more:hover {
			border-color: <?php echo $theme_options->get( 'blog_button_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_button_hover_text_color' ) != '') { ?>
		#main .posts .button-more:hover,
		.wine-news .button-more:hover {
			color: <?php echo $theme_options->get( 'blog_button_hover_text_color' ); ?>;
		}
		<?php } ?>
	<?php } ?>
			
	<?php if($theme_options->get( 'font_status' ) == '1') { ?>
		body {
			font-size: <?php echo $theme_options->get( 'body_font_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'body_font_weight' )*100; ?>;
			<?php if( $theme_options->get( 'body_font' ) != '' && $theme_options->get( 'body_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'body_font' ); ?>;
			<?php } ?>
		}
		
		#top-bar .container, 
		#top .header-links li a,
		.sale,
		.product-grid .product .only-hover ul li a,
		.hover-product .only-hover ul li a {
			font-size: <?php echo $theme_options->get( 'body_font_smaller_px' ); ?>px;
		}
		
		ul.megamenu > li > a strong {
			font-size: <?php echo $theme_options->get( 'categories_bar_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'categories_bar_weight' )*100; ?>;
			<?php if( $theme_options->get( 'categories_bar' ) != '' && $theme_options->get( 'categories_bar' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'categories_bar' ); ?>;
			<?php } ?>
		}
		
		.megamenuToogle-wrapper .container {
			font-weight: <?php echo $theme_options->get( 'categories_bar_weight' )*100; ?>;
			<?php if( $theme_options->get( 'categories_bar_font' ) != '' && $theme_options->get( 'categories_bar_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'categories_bar_font' ); ?>;
			<?php } ?>
		}
		
		.vertical ul.megamenu > li > a strong {
			font-weight: <?php echo $theme_options->get( 'body_font_weight' )*100; ?>;
		}
		
		.box .box-heading,
		.center-column h1, 
		.center-column h2, 
		.center-column h3, 
		.center-column h4, 
		.center-column h5, 
		.center-column h6,
		.products-carousel-overflow .box-heading {
			font-size: <?php echo $theme_options->get( 'headlines_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'headlines_weight' )*100; ?>;
			<?php if( $theme_options->get( 'headlines' ) != '' && $theme_options->get( 'headlines' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'headlines' ); ?>;
			<?php } ?>
		}
		
		.footer h4,
		.custom-footer h4 {
			font-size: <?php echo $theme_options->get( 'footer_headlines_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'footer_headlines_weight' )*100; ?>;
			<?php if( $theme_options->get( 'footer_headlines' ) != '' && $theme_options->get( 'footer_headlines' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'footer_headlines' ); ?>;
			<?php } ?>
		}
		
		.breadcrumb .container h1 {
			font-size: <?php echo $theme_options->get( 'page_name_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'page_name_weight' )*100; ?>;
			<?php if( $theme_options->get( 'page_name' ) != '' && $theme_options->get( 'page_name' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'page_name' ); ?>;
			<?php } ?>
		}
		
		.button,
		.btn {
			font-size: <?php echo $theme_options->get( 'button_font_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'button_font_weight' )*100; ?>;
			<?php if( $theme_options->get( 'button_font' ) != '' && $theme_options->get( 'button_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'button_font' ); ?>;
			<?php } ?>
		}
		
		<?php if( $theme_options->get( 'custom_price' ) != '' && $theme_options->get( 'custom_price' ) != 'standard' ) { ?>
		.product-grid .product .price, 
		.hover-product .price, 
		.product-list .actions > div .price, 
		#main .product-info .price .price-new,
		ul.megamenu li .product .price,
		.advanced-grid-products .product .right .price {
			font-family: <?php echo $theme_options->get( 'custom_price' ); ?>;
		}
		<?php } ?>
		
		.product-grid .product .price,
		.advanced-grid-products .product .right .price {
			font-size: <?php echo $theme_options->get( 'custom_price_px_small' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
		
		#main .product-info .price .price-new {
			font-size: <?php echo $theme_options->get( 'custom_price_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
		
		.product-list .actions > div .price {
			font-size: <?php echo $theme_options->get( 'custom_price_px_medium' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
		
		.price-old {
			font-size: <?php echo $theme_options->get( 'custom_price_px_old_price' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
	<?php } ?>
</style>
<?php } ?>

<?php if($theme_options->get( 'background_status' ) == 1) { ?>
<style type="text/css">
	<?php if($theme_options->get( 'body_background_background' ) == '1') { ?> 
	body { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'body_background_background' ) == '2') { ?> 
	body { background-image:url(image/<?php echo $theme_options->get( 'body_background' ); ?>);background-position:<?php echo $theme_options->get( 'body_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'body_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'body_background_attachment' ); ?> !important; }
	<?php } ?>
	<?php if($theme_options->get( 'body_background_background' ) == '3') { ?> 
	body { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'body_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'body_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'body_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'body_background_attachment' ); ?> !important; }
	<?php } ?>
</style>
<?php } ?>