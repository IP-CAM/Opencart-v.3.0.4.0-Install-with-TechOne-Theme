<?php 
if($registry->has('theme_options') == true) { 

$class = 4; 
$all = 3;
$id = rand(0, 5000)*rand(5000, 50000);

$theme_options = $registry->get('theme_options');
$config = $registry->get('config'); ?>

<div class="box clearfix box-with-products <?php if($module['content']['title'] == '') { echo 'without-heading'; } ?>">
  <?php if($module['content']['title'] != '') { ?>
  <div class="box-heading"><?php echo $module['content']['title']; ?></div>
  <div class="strip-line"></div>
  <?php } ?>
  <div class="clear"></div>
  <div class="box-content products">
  	<div class="homeproductsrow">
  		<div class="featured-product">
  			<?php $i = 0; foreach ($module['content']['products'] as $product) { if($i == 0) { ?>
 			<?php
 			$product['thumb'] =  $theme_options->productImageThumb($product['product_id'], 400, 400);
 			$images = $theme_options->getProductImages($product['product_id'], 150, 150, 400, 400);
 			?>
 			<!-- Product -->
 			<div class="product product-img-slider clearfix">
 				<div class="left">
 					<?php if($product['special'] && $theme_options->get( 'display_text_sale' ) != '0') { ?>
 						<?php $text_sale = 'Sale';
 						if($theme_options->get( 'sale_text', $config->get( 'config_language_id' ) ) != '') {
 							$text_sale = $theme_options->get( 'sale_text', $config->get( 'config_language_id' ) );
 						} ?>
 						<?php if($theme_options->get( 'type_sale' ) == '1') { ?>
 							<?php $product_detail = $theme_options->getDataProduct( $product['product_id'] );
 							$roznica_ceny = $product_detail['price']-$product_detail['special'];
 							$procent = ($roznica_ceny*100)/$product_detail['price']; ?>
 							<div class="sale">-<?php echo round($procent); ?>%</div>
 						<?php } else { ?>
 							<div class="sale"><?php echo $text_sale; ?></div>
 						<?php } ?>
 					<?php } ?>
 					<?php if ($product['thumb']) { ?>
 						<div class="image">
 							<a href="<?php echo $product['href']; ?>">
 								<?php if($theme_options->get( 'lazy_loading_images' ) != '0') { ?>
 								<img src="image/catalog/blank.gif"  id="advanced-product-slider" data-image="<?php echo $product['thumb']; ?>" data-echo="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" class="<?php if($theme_options->get( 'product_image_effect' ) == '2') { echo 'zoom-image-effect'; } ?>" />
 								<?php } else { ?>
 								<img src="<?php echo $product['thumb']; ?>" id="advanced-product-slider" alt="<?php echo $product['name']; ?>"  data-image="<?php echo $product['thumb']; ?>" class="<?php if($theme_options->get( 'product_image_effect' ) == '2') { echo 'zoom-image-effect'; } ?>" />
 								<?php } ?>
 			                    </a>
 			                    <?php if ($images): ?>
 			                    <div>
 			                        <div class="thumbnails thumbnails-left clearfix">
 			                            <div class="thumbnails-carousel owl-carousel">
 			                                <div class="item active" data-image="<?php echo $product['thumb']; ?>"><img src="<?php echo  $theme_options->productImageThumb($product['product_id'], 150, 150); ?>" title="<?php echo $product['name']; ?>" alt="<?php echo $product['name']; ?>" /></div>
 			                               <?php foreach ($images as $image): ?>
 			                                   <div class="item" data-image="<?php echo $image['large']; ?>"><img src="<?php echo $image['thumb']; ?>" title="<?php echo $product['name']; ?>" alt="<?php echo $product['name']; ?>" /></div>
 			                               <?php endforeach ?>
 			                            </div>
 			                        </div>
 			
 			                        <script type="text/javascript">
 			                            $(document).ready(function() {
 			                                $(".thumbnails-carousel").owlCarousel({
 			                                    autoPlay: 6000, //Set AutoPlay to 3 seconds
 			                                    navigation: true,
 			                                    navigationText: ['', ''],
 			                                    itemsCustom : [
 			                                      [0, 4],
 			                                      [450, 5],
 			                                      [550, 5],
 			                                      [768, 4],
 			                                      [1200, 5]
 			                                    ]
 			                                });
 			
 			                                $('.featured-product .thumbnails .item, .featured-product .thumbnails-carousel .item').click(function() {
 			                                    
 			                                    $(this).parent().parent().find('.item').removeClass('active');
 			                                    $(this).addClass('active');
 			                                    
 			                                    var image = $(this).attr('data-image');
 			                                    
 			                                    $(this).parent().parent().parent().parent().parent().parent().parent().find('#advanced-product-slider').attr('src', image);  
 			                                    $(this).parent().parent().parent().parent().parent().parent().parent().find('#advanced-product-slider').attr('href', image);  
 			                                    return false;
 			                                });
 			                            });
 			                        </script>
 			                    </div>
 			                <?php endif; ?> 
 							
 						</div>
 					<?php } else { ?>
 						<div class="image">
 							<a href="<?php echo $product['href']; ?>"><img src="image/no_image.jpg"  style="width: <?php echo  $product['img_width'] ?>px; height: <?php echo $product['img_height']; ?>px"  alt="<?php echo $product['name']; ?>" <?php if($theme_options->get( 'product_image_effect' ) == '2') { echo 'class="zoom-image-effect"'; } ?> /></a>
 						</div>
 					<?php } ?>      
 				</div>
 				<div class="right">
 					 <?php if ($product['rating'] && $theme_options->get( 'display_rating' ) != '0') { ?>
 					 <div class="rating"><i class="fa fa-star<?php if($product['rating'] >= 1) { echo ' active'; } ?>"></i><i class="fa fa-star<?php if($product['rating'] >= 2) { echo ' active'; } ?>"></i><i class="fa fa-star<?php if($product['rating'] >= 3) { echo ' active'; } ?>"></i><i class="fa fa-star<?php if($product['rating'] >= 4) { echo ' active'; } ?>"></i><i class="fa fa-star<?php if($product['rating'] >= 5) { echo ' active'; } ?>"></i></div>
 					 <?php } ?>
 					<div class="name">
 			            <a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
 			        </div>
 					<div class="price">
 						<?php if (!$product['special']) { ?>
 						<?php echo $product['price']; ?>
 						<?php } else { ?>
 						<span class="price-old"><?php echo $product['price']; ?></span> <span class="price-new"><?php echo $product['special']; ?></span>
 						<?php } ?>
 					</div>
 				</div>
 			</div>
  			<?php } $i++; } ?>
  		</div>
  		
  		<div class="content-product">
		    <div class="box-product">
		    	<div id="myCarousel<?php echo $id; ?>">
		    		<!-- Carousel items -->
		    		<div class="carousel-inner">
		    			<?php $i = 0; $row_fluid = 0; $item = 0; $test = false; foreach ($module['content']['products'] as $product) { if($test) { $row_fluid++; ?>
			    			<?php if($i == 0) { $item++; echo '<div class="active item"><div class="product-grid"><div class="row">'; } ?>
			    			<?php $r=$row_fluid-floor($row_fluid/$all)*$all; if($row_fluid>$all && $r == 1) { echo '</div><div class="row">'; } ?>
			    			<div class="col-sm-<?php echo $class; ?> <?php if($class != 12) { ?>col-xs-6<?php } ?>">
			    				<?php include('catalog/view/theme/'.$config->get('theme_' . $config->get('config_theme') . '_directory').'/template/new_elements/product.tpl'); ?>
			    			</div>
		    			<?php $i++; } else { $test = true; } } ?>
		    			<?php if($i > 0) { echo '</div></div></div>'; } ?>
		    		</div>
				</div>
		    </div>
		</div>
    </div>
  </div>
</div>
<?php } ?>