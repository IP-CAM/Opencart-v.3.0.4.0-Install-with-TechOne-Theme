<?php 
if($registry->has('theme_options') == true) { 

$class = 25; 
$all = 5;
$id = rand(0, 5000)*rand(5000, 50000);

$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
$page_direction = $theme_options->get( 'page_direction' ); ?>

<div class="box withproductscarousel">
	<div class="overflow-box-heading">
		<div class="box-heading">
			<?php echo $module['content']['title']; ?>
		</div>
		
		<ul id="tab<?php echo $id; ?>" class="tabsproducts">
			<?php $i = 0; foreach($module['content']['products_tabs'] as $product_tab) {
				echo '<li'.($i == 0 ? ' class="active"' : '').'><a href="#pko'.$id.'-'.$i.'">'.$product_tab['name'].'</a></li>';
			$i++; } ?>
		</ul>
	</div>
	
	<div class="tab-content clearfix">
		<?php $s = 0; foreach($module['content']['products_tabs'] as $product_tab) { ?>
		<div class="tab-pane <?php if($s == 0) { echo 'active'; } ?>" id="pko<?php echo $id.'-'.$s; ?>">
			<!-- Carousel nav -->
			<a class="next-products" href="#myCarousel<?php echo $id.'-'.$s; ?>" id="myCarousel<?php echo $id.'-'.$s; ?>_next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a class="prev-products" href="#myCarousel<?php echo $id.'-'.$s; ?>" id="myCarousel<?php echo $id.'-'.$s; ?>_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
			<script type="text/javascript">
			$(document).ready(function() {
			  var owl<?php echo $id . $s; ?> = $(".box #myCarousel<?php echo $id.'-'.$s; ?> .carousel-inner");
				
			  $("#myCarousel<?php echo $id.'-'.$s; ?>_next").click(function(){
			      owl<?php echo $id . $s; ?>.trigger('owl.next');
			      return false;
			    })
			  $("#myCarousel<?php echo $id.'-'.$s; ?>_prev").click(function(){
			      owl<?php echo $id . $s; ?>.trigger('owl.prev');
			      return false;
			  });
			    
			  owl<?php echo $id . $s; ?>.owlCarousel({
			  	  slideSpeed : 500,
			      singleItem:true
			   });
			});
			</script>
			
			<div class="box-product">
				<div id="myCarousel<?php echo $id.'-'.$s; ?>" class="carousel slide">
					<!-- Carousel items -->
					<div class="carousel-inner">
						<?php $i = 0; $row_fluid = 0; foreach ($product_tab['products'] as $product) { $row_fluid++; ?>
			    			<?php if($i == 0) { echo '<div class="active item"><div class="product-grid"><div class="row">'; } ?>
			    			<?php $r=$row_fluid-floor($row_fluid/$all)*$all; if($row_fluid>$all && $r == 1) { echo '</div></div></div><div class="item"><div class="product-grid"><div class="row">'; } else { $r=$row_fluid-floor($row_fluid/$row)*$row; if($row_fluid>$row && $r == 1) { echo '</div><div class="row">'; } } ?>
			    			<div class="col-sm-<?php echo $class; ?> col-xs-6 <?php if($class == 25) { echo 'col-md-25 col-lg-25 col-sm-3 '; } if($class == 25 && $r == 1) { echo 'hidden-sm'; } ?>">
			    				<?php include('catalog/view/theme/'.$config->get('theme_' . $config->get('config_theme') . '_directory').'/template/new_elements/product.tpl'); ?>
			    			</div>
						<?php $i++; } ?>
						<?php if($i > 0) { echo '</div></div></div>'; } ?>
					</div>
				</div>
			</div>
		</div>
		<?php $s++; } ?>
	</div>
</div>
 
<script type="text/javascript">
$('#tab<?php echo $id; ?> a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
</script>
<?php } ?>