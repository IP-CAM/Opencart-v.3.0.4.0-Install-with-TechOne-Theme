<?php 
if($registry->has('theme_options') == true) { 

$class = 3; 
$all = 4;
$ids = rand(0, 5000)*rand(5000, 50000);

$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
$page_direction = $theme_options->get( 'page_direction' );?>

<div class="box clearfix box-with-products products-grid-with-carousel">
  <a class="next" href="#myCarousel<?php echo $ids; ?>" id="myCarousel<?php echo $ids; ?>_next"><span></span></a>
  <a class="prev" href="#myCarousel<?php echo $ids; ?>" id="myCarousel<?php echo $ids; ?>_prev"><span></span></a>
  <?php if($module['content']['title'] != '') { ?>
  <div class="box-heading"><?php echo $module['content']['title']; ?></div>
  <div class="strip-line"></div>
  <?php } ?>
  <div class="clear"></div>
  <div class="box-content products">
    <div class="box-product">
    	<div id="myCarousel<?php echo $ids; ?>">
    	     <div class="owl-carousel carousel">
    	     	<div class="item">
    	     		<div class="product-grid">
    	     			<div class="row">
			         		<?php $i = 0; foreach ($module['content']['products'] as $product) { $i++; ?>
			         			<?php if($i == 5) { echo '</div></div></div><div class="item"><div class="product-grid"><div class="row">'; } ?>
			         			<div class="col-sm-<?php echo $class; ?> col-xs-6">
			         				<?php include('catalog/view/theme/'.$config->get('theme_' . $config->get('config_theme') . '_directory').'/template/new_elements/product.tpl'); ?>
			         			</div>
			           		<?php } ?>
		           		</div>
		           	</div>
		        </div>
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