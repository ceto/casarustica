<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('row-fluid narrow'); ?>>

    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php //get_template_part('templates/entry-meta'); ?>
    </header>
    <?php if (has_post_thumbnail() ) :?>
      <figure class="entry-figure">
        <?php the_post_thumbnail('medium43'); ?>
      </figure>
    <?php endif; ?>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
    </footer>
    <?php // comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
<div class="row-fluid narrow">
<?php  roots_content_nav(); ?>
</div>
