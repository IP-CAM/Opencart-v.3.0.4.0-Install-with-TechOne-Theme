<?php 
if($registry->has('theme_options') == true) { 

$ids = rand(0, 5000)*rand(5000, 50000);

$theme_options = $registry->get('theme_options');
$config = $registry->get('config'); ?>

<div class="box clearfix box-with-products products-grid-with-carousel box-type-2">
  <a class="next" href="#myCarousel<?php echo $ids; ?>" id="myCarousel<?php echo $ids; ?>_next"><span></span></a>
  <a class="prev" href="#myCarousel<?php echo $ids; ?>" id="myCarousel<?php echo $ids; ?>_prev"><span></span></a>
  <?php if($module['content']['title'] != '') { ?>
  <div class="box-heading"><?php echo $module['content']['title']; ?></div>
  <div class="strip-line"></div>
  <?php } ?>
  <div class="clear"></div>
  <div class="box-content">
    <div class="box-product">
    	<div id="myCarousel<?php echo $ids; ?>">
    	     <div class="owl-carousel">
         		<?php foreach ($module['content']['products'] as $product) { ?>
     	    		<div class="item">
     	    			<div class="product-grid"><?php include('catalog/view/theme/'.$config->get('theme_' . $config->get('config_theme') . '_directory').'/template/new_elements/product.tpl'); ?></div>
     	    		</div>
         		<?php } ?>
    		</div>
     </div>
   </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    var owl<?php echo $ids; ?> = $(".box #myCarousel<?php echo $ids; ?> .owl-carousel");
  	
    $("#myCarousel<?php echo $ids; ?>_next").click(function(){
        owl<?php echo $ids; ?>.trigger('owl.next');
        return false;
      })
    $("#myCarousel<?php echo $ids; ?>_prev").click(function(){
        owl<?php echo $ids; ?>.trigger('owl.prev');
        return false;
    });
      
    owl<?php echo $ids; ?>.owlCarousel({
    	  slideSpeed : 500,
        singleItem:true
     });
  });
  </script>
<?php } ?>