<?php
    $child = new WP_Query(array('post_type' => 'page', 'post_parent'=>get_the_ID() ) );
    $itera=1; 
    if ( $child->have_posts() ) :
  ?>  
    <?php while ($child->have_posts()) : $child->the_post(); ?>
      <div class="kwrap-<?php echo ++$itera; ?>">
        <div class="wrap container-fluid" role="document">
          <div class="content row-fluid">
            <div class="main span12" role="main">
              <div class="page-header">
                <h2>
                  <?php echo roots_title(); ?>
                </h2>
              </div>
              <?php the_content(); ?>
              <?php // wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
            </div><!-- /.main -->
          </div>
        </div>
      </div><!-- .kwrap-x-->
    <?php endwhile; ?>
  <?php endif; ?>