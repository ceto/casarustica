<article <?php post_class(); ?>>
    <?php if (has_post_thumbnail() ) :?>
      <figure class="entry-figure">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('tiny11'); ?></a>
      </figure>
    <?php endif; ?>
  <div class="rizsa">
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php //get_template_part('templates/entry-meta'); ?>
    </header>
<!--     <div class="entry-summary ">
      <?php the_excerpt(); ?>
    </div> -->
    <footer>
      <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
    </footer>
  </div><!-- /.rizsa -->
</article>

<article <?php post_class(); ?>>
    <?php if (has_post_thumbnail() ) :?>
      <figure class="entry-figure">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('tiny11'); ?></a>
      </figure>
    <?php endif; ?>
  <div class="rizsa">
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php // get_template_part('templates/entry-meta'); ?>
    </header>
<!--     <div class="entry-summary ">
      <?php the_excerpt(); ?>
    </div> -->
    <footer>
      <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
    </footer>
  </div><!-- /.rizsa -->
</article>


