<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('row-fluid'); ?>>
      <figure class="house-figure span6">
        <img src="http://placehold.it/768x420" />
      </figure>
    <div class="span6 house-datablock">
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php // get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
      <p class="actionblock">
        <a class="btn btn-danger" href="#">ÉRDEKLŐDJÖN TELEFONON<span>+36 70 770 5653</span> vagy ürlapunkon keresztül</a>
</p>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </div><!-- / .data-block -->
      <aside class="house-tabdata span6">
      <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#photo3d" data-toggle="tab"><?php _e('Fotók / 3D','casarustica'); ?></a></li>
        <li><a href="#alap" data-toggle="tab"><?php _e('Alaprajz','casarustica'); ?></a></li>
        <li><a href="#past" data-toggle="tab"><?php _e('Ilyen volt','casarustica'); ?></a></li>
        <li><a href="#map" data-toggle="tab"><?php _e('Térkép','casarustica'); ?></a></li>
      </ul>
       
      <div class="tab-content">
        <div class="tab-pane active" id="photo3d">
          <ul class="thumbnails">
            <div class="row-fluid">
              
              <li class="span4">
                <a href="#" class="thumbnail">
                  <img src="http://lorempixel.com/309/206/" data-src="http://lorempixel.com/300/200/" alt="">
                </a>
              </li>

              <li class="span4">
                <a href="#" class="thumbnail">
                  <img src="http://lorempixel.com/303/202/" data-src="http://lorempixel.com/300/200/" alt="">
                </a>
              </li>

              <li class="span4">
                <a href="#" class="thumbnail">
                  <img src="http://lorempixel.com/306/204/" data-src="http://lorempixel.com/300/200/" alt="">
                </a>
              </li>
            </div>

            <div class="row-fluid">
              <li class="span4">
                <a href="#" class="thumbnail">
                  <img src="http://lorempixel.com/309/206/" data-src="http://lorempixel.com/300/200/" alt="">
                </a>
              </li>

              

              <li class="span4">
                <a href="#" class="thumbnail">
                  <img src="http://lorempixel.com/300/200/" data-src="http://lorempixel.com/300/200/" alt="">
                </a>
              </li>
            </div>
          </ul>
        </div><!-- / #photo3d-->

        <div class="tab-pane" id="alap">
         
          <ul class="thumbnails">

            <div class="row-fluid">
              <li class="span12">
                <a href="#" class="thumbnail">
                  <img src="http://lorempixel.com/768/420/" data-src="http://lorempixel.com/768/420/" alt="">
                </a>
              </li>
            </ul>
          Alaprajz látható itt, esetleg letölthető pdf-ben.
        </div>
        
        <div class="tab-pane" id="past">
          <ul class="thumbnails">
            <div class="row-fluid">
              
              <li class="span4">
                <a href="#" class="thumbnail">
                  <img src="http://lorempixel.com/300/200/" data-src="http://lorempixel.com/300/200/" alt="">
                </a>
              </li>

              <li class="span4">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/300x200" data-src="http://placehold.it/300x200" alt="">
                </a>
              </li>

              <li class="span4">
                <a href="#" class="thumbnail">
                  <img src="http://lorempixel.com/306/204/" data-src="http://lorempixel.com/300/200/" alt="">
                </a>
              </li>
            </div>
            
          </ul>
        </div>
        <div class="tab-pane" id="map">
          Google maps jön ide ...
        </div>
      </div><!-- / .tab-content -->

    </aside><!-- / .house-tabdata -->


  </article>
<?php endwhile; ?>
