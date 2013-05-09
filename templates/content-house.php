<article <?php post_class('span4'); ?>>
  <figure class="house-figure">
    <a href="<?php the_permalink(); ?>">
      <img src="http://placehold.it/480x320">
    </a>
  </figure>
  <div class="rizsa">
    <header>
      <h2 class="house-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="house-summary ">
      <?php the_excerpt(); ?>
      <p class="actionblock">
        <a class="btn btn-warning" href="<?php the_permalink(); ?>">Tovább az adatlapra</a>
      </p>
    </div>
    <footer>
      <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
    </footer>
  </div><!-- /.rizsa -->
</article>
