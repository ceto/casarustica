<article <?php post_class('clearfix houses listas'); ?>>
  <header>
      <h2 class="house-title">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
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
    <a href="<?php the_permalink(); ?>" class="action"><?php _e('Részletek ...','roots'); ?></a>

  </div><!-- /.house-data -->
</article>
