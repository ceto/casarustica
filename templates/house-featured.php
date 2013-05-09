<?php
  $the_feathouse= new WP_Query ( 
    array('post_type' => 'house', )
    );
?>

<div class="feathouseblockwrap">
	<div class="container-fluid wrap feathouseblock">
		<h3 class="featblock-title"><?php _e('Ízelitő parasztházainkból','roots') ?></h3>
		<aside class="row-fluid">
			<?php while ( $the_feathouse->have_posts()) : $the_feathouse->the_post(); ?>
				<div class="span4 feathouse" >
					<div class="row-fluid">
						<figure class="feat-figure span4">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<img src="http://placehold.it/160x120/3b312a" alt="<?php the_title(); ?>">
							</a>
						</figure>
						<div class="feat-data span8">
							<h3 class="feat-title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_title(); ?>
								</a>
							</h3>
							<div class="feat-text">
								Lorem ipsum dolor sit amet ...
							</div>
						</div><!-- ! .feat-data -->
					</div>

				</div>
			<?php endwhile; ?>
		</aside>
	</div><!-- / .feathoseblock -->
</div><!-- / .feathouseblockwrap -->

