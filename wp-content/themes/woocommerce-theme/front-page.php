<?php get_header();?>


<div id="hero">
	<div class="container d-flex align-items-center justify-content-center h-100">
    	
			<div class="slider">				
					<?php echo do_shortcode('[metaslider id="75"]'); ?>
			</div>

	</div>

</div>


<div class="content">
	

	<div class="container">

		<div class="title-category d-flex align-items-center justify-content-center h-100">
			<h2>Shop by Category</h2>
		</div>
		
		<div class="list-image d-flex align-items-center justify-content-center h-100">
			<?php echo do_shortcode('[ihewc_oxi  id="1"]'); ?>
		</div>

		<!-- <?php if(have_posts()) : while (have_posts()) : the_post();?> 
		<?php the_content();?> -->

		

		<?php endwhile; else: endif;?>

	</div>

</div>


<?php get_footer();?>