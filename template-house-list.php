<?php
/*
Template Name: List of Houses
*/
?>
<?php get_template_part('templates/page', 'header'); ?>
<?php
  $the_house= new WP_Query ( 
    array('post_type' => 'house', )

    );

?>


<?php if (! $the_house->have_posts()) : ?>
  <div class="alert">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>


<?php $ina=0; while ( $the_house->have_posts()) : $the_house->the_post(); ?>
   <?php if (++$ina%3==1) : ?><div class="row-fluid"><?php endif;?>
    <?php get_template_part('templates/content', 'house'); ?>
   <?php if ($ina%3==0) : ?></div><!-- ./row-fluid --><?php endif;?>
<?php endwhile; ?>
  <?php if ($ina%3!=0) : ?></div><!-- ./row-fluid --><?php endif;?>

