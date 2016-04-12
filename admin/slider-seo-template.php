<?php get_header(); ?>

<div id="slider-seo-wrapper">

	<?php $imgSrcs = get_post_meta( $post->ID, 'slider-img-src', true );
		
		while ( have_posts() ) : the_post(); ?>

			<div class="owl-carousel owl-theme">
			
			<?php foreach ( $imgSrcs as $imgSrc ) : ?>
				
				<img src="<?php echo $imgSrc; ?>" alt="" title=""/>
				
			<?php endforeach; ?>

		</div>

	<?php endwhile; // End of the loop. ?>

</div><!-- .slider-seo-wrapper -->
error
<?php get_footer(); ?>