<?php
  $the_feathouse= new WP_Query ( 
    array(
    	'post_type' => 'house',
    	'posts_per_page'=>3,
     )
    );
?>

<div class="feathouseblockwrap clearfix">
	<div class="container-fluid wrap feathouseblock">
		<div class="row-fluid">
			<div class="span12">
				<h3 class="featblock-title"><?php _e('Ízelitő parasztházainkból','roots') ?></h3>
				<?php while ( $the_feathouse->have_posts()) : $the_feathouse->the_post(); ?>
					<div class="feat-houses clearfix" >
						<header>
      <h2 class="house-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
  <figure class="house-figure">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('small43');  ?>
    </a>
  </figure>
  <div class="house-data">
    <div class="house-readiness">

        <?php echo readiness(get_post_meta( get_the_ID(), '_house_readiness', true)); ?>

    </div>     
    <h3 class="house-subtitle">
      <?php echo get_post_meta( get_the_ID(), '_house_subtitle', true); ?>
    </h3>
    <a href="<?php the_permalink(); ?>" class="action">Részletek ...</a>

  </div><!-- /.house-data -->
					</div>
				<?php endwhile; ?>
			</div>	
		</div>
	<a class="fblockmore" href="?page_id=26">További házak ...</a>

	</div><!-- / .feathoseblock -->
</div><!-- / .feathouseblockwrap -->

