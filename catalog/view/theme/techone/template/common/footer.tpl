<?php 
if($registry->has('theme_options') == true) { 
	$theme_options = $registry->get('theme_options');
	$config = $registry->get('config');
	
	require_once( DIR_TEMPLATE.$config->get('theme_' . $config->get('config_theme') . '_directory')."/lib/module.php" );
	$modules = new Modules($registry); ?>
	
	<?php 
	$customfootertop = $modules->getModules('customfooter_top');
	if( count($customfootertop) ) { 
		foreach ($customfootertop as $module) {
			echo $module;
		}
	} 
	
	$customfooter = $modules->getModules('customfooter');
	if( count($customfooter) ) { 
		foreach ($customfooter as $module) {
			echo $module;
		}
	} 
	
	$customfooterbottom = $modules->getModules('customfooter_bottom');
	if( count($customfooterbottom) ) { 
		foreach ($customfooterbottom as $module) {
			echo $module;
		}
	} 
	
	?>
	
	<!-- FOOTER
		================================================== -->
	<div class="footer <?php if($theme_options->get( 'footer_layout' ) == 2) { echo 'fixed'; } else { echo 'full-width'; } ?>">
		<div class="background-footer"></div>
		<div class="background">
			<div class="shadow"></div>
			<div class="pattern">
				<div class="container">
					<?php 
					$footer_top = $modules->getModules('footer_top');
					if( count($footer_top) ) { 
						foreach ($footer_top as $module) {
							echo $module;
						}
					} ?>
					
					<?php 
					$footer_center = $modules->getModules('footer');
					if( count($footer_center) ) { 
						foreach ($footer_center as $module) {
							echo $module;
						}
					} else { ?>
     					<div class="row">
     						<?php 
     						$footer_left = $modules->getModules('footer_left');
     						$footer_right = $modules->getModules('footer_right');
     						
     						$span = 3;
     						if( count($footer_left) && count($footer_right) ) {
     							$span = 2;
     						} elseif( count($footer_left) || count($footer_right) ) {
     							$span = 25;
     						} ?>
     						
     						<?php if( count($footer_left) ) { ?>
     						<div class="col-sm-<?php echo $span; ?>">
     						<?php foreach ($footer_left as $module) {
     								echo $module;
     							} ?>
     						</div>
     						<?php } ?>
     						
     						<!-- Information -->
     						<div class="col-sm-<?php echo $span; ?>">
     							<h4><?php echo $text_information; ?></h4>
     							<div class="strip-line"></div>
     							<ul>
     								<?php foreach ($informations as $information) { ?>
     								<li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
     								<?php } ?>
     							</ul>
     						</div>
     						
     						<!-- Customer Service -->
     						<div class="col-sm-<?php echo $span; ?>">
     							<h4><?php echo $text_service; ?></h4>
     							<div class="strip-line"></div>
     							<ul>
     								<li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
     								<li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>
     								<li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li>
     							</ul> 
     						</div>
     						
     						<!-- Extras -->
     						<div class="col-sm-<?php echo $span; ?>">
     							<h4><?php echo $text_extra; ?></h4>
     							<div class="strip-line"></div>
     							<ul>
     								<li><a href="<?php echo $manufacturer; ?>"><?php echo $text_manufacturer; ?></a></li>
     								<li><a href="<?php echo $voucher; ?>"><?php echo $text_voucher; ?></a></li>
     								<li><a href="<?php echo $affiliate; ?>"><?php echo $text_affiliate; ?></a></li>
     								<li><a href="<?php echo $special; ?>"><?php echo $text_special; ?> </a></li>
     							</ul>
     						</div>
     						
     						<!-- My Account -->
     						<div class="col-sm-<?php echo $span; ?>">
     							<h4><?php echo $text_account; ?></h4>
     							<div class="strip-line"></div>
     							<ul>
     								<li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
     								<li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
     								<li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
     								<li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
     							</ul>
     						</div>
     						
     						<?php if( count($footer_right) ) { ?>
     						<div class="col-sm-<?php echo $span; ?>">
     						<?php foreach ($footer_right as $module) {
     								echo $module;
     							} ?>
     						</div>
     						<?php } ?>
     					</div>
					<?php } ?>
					
					<?php 
					$footer_bottom = $modules->getModules('footer_bottom');
					if( count($footer_bottom) ) { 
						foreach ($footer_bottom as $module) {
							echo $module;
						}
					} ?>
				</div>
			</div>
		</div>
	</div>
	
	<!-- COPYRIGHT
		================================================== -->
	<div class="copyright <?php if($theme_options->get( 'footer_layout' ) == 2) { echo 'fixed'; } else { echo 'full-width'; } ?>">
		<div class="background-copyright"></div>
		<div class="background">
			<div class="shadow"></div>
			<div class="pattern">
				<div class="container">
					<div class="line"></div>
					<?php if(is_array($theme_options->get( 'payment' ))) { if($theme_options->get( 'payment_status' ) != '0') { ?>
					<ul>
						<?php foreach($theme_options->get( 'payment' ) as $payment) { 
							echo '<li>';
							if($payment['link'] != '') {
								$new_tab = false;
								if($payment['new_tab'] == 1) {
									$new_tab = ' target="_blank"';
								}
								echo '<a href="' .$payment['link']. '"'.$new_tab.'>';
							}
							echo '<img src="image/' .$payment['img']. '" alt="' .$payment['name']. '">';
							if($payment['link'] != '') {
								echo '</a>';
							}
							echo '</li>'; 
						} ?>
					</ul>
					<?php } } ?>
					<!--
					OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
					Please donate via PayPal to donate@opencart.com
					//-->
					<p><?php echo $powered; ?></p>
					<!--
					OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
					Please donate via PayPal to donate@opencart.com
					//-->
					
					<?php 
					$bottom = $modules->getModules('bottom');
					if( count($bottom) ) { 
						foreach ($bottom as $module) {
							echo $module;
						}
					} ?>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="catalog/view/theme/<?php echo $config->get('theme_' . $config->get('config_theme') . '_directory'); ?>/js/megamenu.js"></script>
</div>

<a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
</div>
<?php } ?>
</body>
</html>