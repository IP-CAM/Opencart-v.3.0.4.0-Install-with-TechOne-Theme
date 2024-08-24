<?php
if($registry->has('theme_options') == false) { 
 header("location: themeinstall/index.php"); 
 exit; 
}
$theme_options = $registry->get('theme_options');
?>
<div class="box blog-module blog-latest-posts box-no-advanced">
    <div class="box-heading"><?php echo $heading_title; ?></div>
    <div class="strip-line"></div>
    <!-- Carousel nav -->
    <a class="next" href="#Blog" id="Blog_next"><span></span></a>
    <a class="prev" href="#Blog" id="Blog_prev"><span></span></a>
    <div class="box-content">
        <?php if(!empty($articles)):?> 
        <div class="blog-list-default owl-carousel" id="Blog">
            <?php foreach($articles as $article):?>
            <div class="blog-item item">
            	<div class="blog-content clearfix">
	            	<?php if($article['thumb']):?>
	            	<div  class="thumb-holder">
	            	    <img alt="" src="<?php echo $article['thumb'] ?>"></a>
	            	</div>
	            	<?php endif; ?>
	            	
					<div class="post-info">
						<div class="head">
							<span class="time">
								<span class="day"><?php echo date('d', strtotime($article['date_published'])) ?></span>
								<span class="month"><?php echo date('M', strtotime($article['date_published'])) ?></span>
							</span>
							
							<h4 class="post-title"><a href="<?php echo $article['href']; ?>"><?php echo $article['title'] ?></a></h4>
						</div>
						
						<div class="blog-des"><?php echo $article['description']?></div>
						<a href="<?php echo $article['href']; ?>" class="readmore"><?php echo $button_read_more ?></a>
					</div>
				</div>
			</div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
	var blog = $(".box #Blog");
		
	$("#Blog_next").click(function(){
	    blog.trigger('owl.next');
	    return false;
	  })
	$("#Blog_prev").click(function(){
	    blog.trigger('owl.prev');
	    return false;
	});
	  
	blog.owlCarousel({
		autoPlay: 6000, //Set AutoPlay to 3 seconds
		navigation: false,
		itemsCustom : [
		[0, 1],
		[450, 1],
		[550, 1],
		[768, 1],
		[1200, 2]
		]
	 });
});
</script>