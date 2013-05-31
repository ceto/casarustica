<?php
  $the_sidehouse= new WP_Query ( 
    array(
    	'post_type' => 'house',
    	'posts_per_page'=>5,
     )
    );
?>
<section class="widget clearfix">
	<div class="widget-inner">
		<h3><?php _e('Parasztházainkból','roots') ?></h3>
		<?php while ( $the_sidehouse->have_posts()) : $the_sidehouse->the_post(); ?>
				<div class="side-houses clearfix">
					<figure class="side-figure">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('tiny43');  ?>
							</a>
					</figure>
					<div class="side-data">
						<h3 class="side-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<div class="side-readiness">
				            <?php echo readiness(get_post_meta( get_the_ID(), '_house_readiness', true)); ?>
				         </div>
						<h4 class="side-subtitle">
 							<?php echo get_post_meta( get_the_ID(), '_house_subtitle', true); ?>
						</h4>

					</div><!-- ! .side-data -->
				</div>
			<?php endwhile; ?>
	</div>
</section>
<?php dynamic_sidebar('sidebar-secondary'); ?>
