<?php
  $the_feathouse= new WP_Query ( 
    array(
    	'post_type' => 'house',
    	'posts_per_page'=>3,
     )
    );
?>

<div class="feathouseblockwrap">
	<div class="container-fluid wrap feathouseblock">
		<div class="row-fluid">
			<div class="span12">
				<h3 class="featblock-title"><?php _e('Ízelitő parasztházainkból','roots') ?></h3><br />
				<?php while ( $the_feathouse->have_posts()) : $the_feathouse->the_post(); ?>
					<div class="feat-houses clearfix" >
							<figure class="house-figure">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('tiny43');  ?>
								</a>
							</figure>
							<div class="house-data">
								<h3 class="house-title">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_title(); ?>
									</a>
								</h3>
								<div class="hosue-readiness">
						            <?php echo readiness(get_post_meta( get_the_ID(), '_house_readiness', true)); ?>
						         </div>
								<h4 class="house-subtitle">
	     							<?php echo get_post_meta( get_the_ID(), '_house_subtitle', true); ?>
	    						</h4>

							</div><!-- ! .hosue-data -->
						</div>
				<?php endwhile; ?>
			</div>	
		</div>
	</div><!-- / .feathoseblock -->
</div><!-- / .feathouseblockwrap -->

