<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="row-fluid">
      <figure class="house-figure span6">
          <?php the_post_thumbnail('medium43');  ?>
            <div class="house-readiness">
              <?php echo readiness(get_post_meta( get_the_ID(), '_house_readiness', true)); ?>
            </div>
      </figure>

      <div class="span6 house-datablock">
        <header>

          <h1 class="house-title"><?php the_title(); ?></h1>
          <h2 class="house-subtitle"><?php echo get_post_meta( get_the_ID(), '_house_subtitle', true); ?></h2>
          <?php // get_template_part('templates/entry-meta'); ?>
        </header>
        <div class="house-content">
          <div class="house-excerpt">
            <?php  echo wpautop(get_post_meta( get_the_ID(), '_house_excerpt', true)); ?>
          </div>
          <p class="actionblock">
            <a class="btn btn-warning" href="?page_id=30&message_subject=<?php the_ID(); ?>">ÉRDEKLŐDJÖN TELEFONON<span>(+36) 30 249 9567</span> vagy ürlapunkon keresztül</a>
            <input type="hidden" name="message_subject" id="message_subject" value="<?php the_ID(); ?>" />
          </p>
        </div>

      </div><!-- / .data-block -->
    </div>
    <?php if ( get_post_meta( get_the_ID(), '_house_gallery', true ) !='' ) :?>
      <aside class="row-fluid">
        <?= apply_filters('the_content', get_post_meta( get_the_ID(), '_house_gallery', true )  ); ?>
      </aside>
    <?php endif; ?>

    <aside class="house-tabdata row-fluid">
      <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#photo3d" data-toggle="tab"><?php _e('Fotók / 3D','roots'); ?></a></li>
        <?php if ( get_post_meta( get_the_ID(), '_house_alaprajz1', true ) !='' ) :?>
          <li><a href="#alap" data-toggle="tab"><?php _e('Alaprajz','roots'); ?></a></li>
        <?php endif; ?>
         <?php if ( get_post_meta( get_the_ID(), '_house_fotoilyenvolt', true ) >0 ) :?>
        <li><a href="#past" data-toggle="tab"><?php _e('Ilyen volt','roots'); ?></a></li>
      <?php endif; ?>
        <?php if ( get_post_meta( get_the_ID(), '_house_gpsnorth', true ) !='' ) :?>
          <li><a href="#map" data-toggle="tab"><?php _e('Térkép','roots'); ?></a></li>
        <?php endif; ?>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active fade in" id="photo3d">

          <?php if ( get_post_meta( get_the_ID(), '_house_fotogallery', true ) >0 ) :?>
          <div class="gwrap">
                <?php echo do_shortcode('[nggallery id='.get_post_meta( get_the_ID(), '_house_fotogallery', true ).' images=15 ]'); ?>
          </div>
          <?php endif; ?>
        </div><!-- / #photo3d-->

        <?php if ( get_post_meta( get_the_ID(), '_house_alaprajz1', true ) !='' ) :?>
        <div class="tab-pane fade" id="alap">

                <?php
                  //$tsrc = wp_get_attachment_image_src( get_post_meta( get_the_ID(), '_house_alaprajz1_id', true ), 'medium169', false ) ;
                  $tlnk = wp_get_attachment_image_src( get_post_meta( get_the_ID(), '_house_alaprajz1_id', true ), 'full', false ) ;
                  $thumb = wp_get_attachment_image( get_post_meta( get_the_ID(), '_house_alaprajz1_id', true ), 'medium169', false ) ;


                ?>
                <a href="<?php echo $tlnk[0] ; ?>">
                  <?php echo $thumb  ; ?>
                </a>


                <?php if ( get_post_meta( get_the_ID(), '_house_alaprajz2', true ) !='' ) :?>
                <?php
                  //$tsrc = wp_get_attachment_image_src( get_post_meta( get_the_ID(), '_house_alaprajz2_id', true ), 'medium169', false ) ;
                  $tlnk = wp_get_attachment_image_src( get_post_meta( get_the_ID(), '_house_alaprajz2_id', true ), 'full', false ) ;
                  $thumb = wp_get_attachment_image( get_post_meta( get_the_ID(), '_house_alaprajz2_id', true ), 'medium169', false ) ;

                ?>
                <a href="<?php echo $tlnk[0] ; ?>">
                   <?php echo $thumb  ; ?>
                </a>
                <?php endif; ?>

        </div>
         <?php endif; ?>

          <?php if ( get_post_meta( get_the_ID(), '_house_fotoilyenvolt', true ) >0 ) :?>
        <div class="tab-pane fade" id="past">
           <div class="gwrap">
                <?php echo do_shortcode('[nggallery id='.get_post_meta( get_the_ID(), '_house_fotoilyenvolt', true ).' images=15 ]'); ?>
            </div>
        </div>
          <?php endif; ?>

       <?php if ( get_post_meta( get_the_ID(), '_house_gpsnorth', true ) !='' ) :?>
        <div class="tab-pane fade" id="map">
          <script>
              var north = <?php echo get_post_meta( get_the_ID(), '_house_gpsnorth', true); ?>;
              var south = <?php echo get_post_meta( get_the_ID(), '_house_gpssouth', true); ?>;
          </script>
         <div id="helyszin_map" class="gmap"></div>
        </div>
      <?php endif; ?>
      </div><!-- / .tab-content -->

    </aside><!-- / .house-tabdata -->

    <aside class="row-fluid">
        <div class="adatlap" id="adatlap">
          <div class="span6">
          <h2><?php _e('Ház adatlapja','roots'); ?></h2>
          <?php if (get_post_meta( get_the_ID(), '_house_szerkezet', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('Szerkezet','roots'); ?>:</div>
              <div class="value"><?php echo get_post_meta( get_the_ID(), '_house_szerkezet', true); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>

          <?php if (get_post_meta( get_the_ID(), '_house_fodem', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('Födém','roots'); ?>:</div>
              <div class="value"><?php echo get_post_meta( get_the_ID(), '_house_fodem', true); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>

          <?php if (get_post_meta( get_the_ID(), '_house_padloburkolat', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('Padlóburkolat','roots'); ?>:</div>
              <div class="value"><?php echo get_post_meta( get_the_ID(), '_house_padloburkolat', true); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>

           <?php if (get_post_meta( get_the_ID(), '_house_kozmu', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('Közmű','roots'); ?>:</div>
              <div class="value"><?php echo get_post_meta( get_the_ID(), '_house_kozmu', true); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>

          <?php if (get_post_meta( get_the_ID(), '_house_futes', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('Fűtés','roots'); ?>:</div>
              <div class="value"><?php echo get_post_meta( get_the_ID(), '_house_futes', true); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>

          <?php if (get_post_meta( get_the_ID(), '_house_lakoter', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('Lakótér alapterülete','roots'); ?>:</div>
              <div class="value"><?php echo get_post_meta( get_the_ID(), '_house_lakoter', true); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>

          <?php if (get_post_meta( get_the_ID(), '_house_szobak', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('Szobák/helyiségek','roots'); ?>:</div>
              <div class="value"><?php echo wpautop(get_post_meta( get_the_ID(), '_house_szobak', true)); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>
          <?php if (get_post_meta( get_the_ID(), '_house_egyebhaz', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('Információ','roots'); ?>:</div>
              <div class="value"><?php echo wpautop(get_post_meta( get_the_ID(), '_house_egyebhaz', true)); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>
          </div>
          <div class="span6">
          <h2><?php _e('Épületrészek','roots'); ?></h2>
          <?php if (get_post_meta( get_the_ID(), '_house_kiegeszito', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('Kiegészítő épületrészek','roots'); ?>:</div>
              <div class="value"><?php echo wpautop(get_post_meta( get_the_ID(), '_house_kiegeszito', true)); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>

          <?php if (get_post_meta( get_the_ID(), '_house_terasz', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('Teraszok, tornác','roots'); ?>:</div>
              <div class="value"><?php echo wpautop(get_post_meta( get_the_ID(), '_house_terasz', true)); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>

          <?php if (get_post_meta( get_the_ID(), '_house_pince', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('Pince','roots'); ?>:</div>
              <div class="value"><?php echo get_post_meta( get_the_ID(), '_house_pince', true); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>

          <?php if (get_post_meta( get_the_ID(), '_house_emeszto', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('Emésztő','roots'); ?>:</div>
              <div class="value"><?php echo get_post_meta( get_the_ID(), '_house_emeszto', true); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>
            <?php if (get_post_meta( get_the_ID(), '_house_egyebkiegeszito', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('Információ','roots'); ?>:</div>
              <div class="value"><?php echo wpautop(get_post_meta( get_the_ID(), '_house_kiegeszito', true)); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>

          <h2>Telek</h2>
          <?php if (get_post_meta( get_the_ID(), '_house_helyszin', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('Helyszín','roots'); ?>:</div>
              <div class="value"><?php echo get_post_meta( get_the_ID(), '_house_helyszin', true); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>

          <?php if (get_post_meta( get_the_ID(), '_house_telekmeret', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('A telek mérete','roots'); ?>:</div>
              <div class="value"><?php echo get_post_meta( get_the_ID(), '_house_telekmeret', true); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>

          <?php if (get_post_meta( get_the_ID(), '_house_beepitesi', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('Beépítési','roots'); ?>:</div>
              <div class="value"><?php echo get_post_meta( get_the_ID(), '_house_beepitesi', true); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>

          <?php if (get_post_meta( get_the_ID(), '_house_egyebtelek', true)!='') : ?>
            <div class="data-row clearfix">
              <div class="key"><?php _e('Információ','roots'); ?>:</div>
              <div class="value"><?php echo wpautop(get_post_meta( get_the_ID(), '_house_egyebtelek', true)); ?></div>
            </div><!-- / .data-row -->
          <?php endif; ?>
          </div>

        </div><!-- / #adatlap -->
    </aside>

    <div id="leiras" class="house__longdescr row-fluid">
       <?php the_content(); ?>
        <p class="actionblock">
          <a class="btn btn-warning" href="?page_id=30&message_subject=<?php the_ID(); ?>">ÉRDEKLŐDJÖN TELEFONON<span>(+36) 30 249 9567</span> vagy ürlapunkon keresztül</a>
          <input type="hidden" name="message_subject" id="message_subject" value="<?php the_ID(); ?>" />
        </p>
    </div>

    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>


  </article>

<?php endwhile; ?>
<?php  roots_content_nav(); ?>


