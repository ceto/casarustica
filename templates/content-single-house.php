<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('row-fluid'); ?>>
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

      <ul class="nav nav-tabs" id="firstTab">
        <li class="active"><a href="#haz" data-toggle="tab"><?php _e('Adatlap','casarustica'); ?></a></li>
        <li><a href="#reszek" data-toggle="tab"><?php _e('Épületrészek','casarustica'); ?></a></li>
        <li><a href="#telek" data-toggle="tab"><?php _e('Telek','casarustica'); ?></a></li>
        <li><a href="#leiras" data-toggle="tab"><?php _e('Leírás','casarustica'); ?></a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active fade in adatlap" id="haz">

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
           <div class="house-lebonyi">
            <p>
              <i class="icon-magic"></i> <a href="?page_id=189" class="ajax-popup-link">Lebonyolítás és finanszírozás</a>          
            </p>
          </div>

        </div><!-- / #haz -->

       
        <div class="tab-pane fade adatlap" id="reszek">
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
          <div class="house-lebonyi">
          <p>
            <i class="icon-magic"></i> <a href="?page_id=189" class="ajax-popup-link">Lebonyolítás és finanszírozás</a>          
          </p>
          </div>
          
        </div><!-- / #reszek -->

                <div class="tab-pane fade adatlap" id="telek">
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
          
          <div class="house-lebonyi">
          <p>
            <i class="icon-magic"></i> <a href="?page_id=189 ajax-popup-link">Lebonyolítás és finanszírozás</a>          
          </p>
          </div>

        </div><!-- / #telek -->
      

        <div class="tab-pane fade" id="leiras">
            <?php the_content(); ?>
            <div class="house-lebonyi">
              <p>
                <i class="icon-magic"></i> <a href="?page_id=189" class="ajax-popup-link">Lebonyolítás és finanszírozás</a>          
              </p>
            </div>

        </div><!-- / #leiras --> 

    </div>

        <p class="actionblock">
        <a class="btn btn-warning" href="#">ÉRDEKLŐDJÖN TELEFONON<span>+36 70 770 5653</span> vagy ürlapunkon keresztül</a> 
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
        <div class="tab-pane active fade in" id="photo3d">

          <?php if ( get_post_meta( get_the_ID(), '_house_fotogallery', true ) >0 ) :?>
          <div class="gwrap">
                <?php echo do_shortcode('[nggallery id='.get_post_meta( get_the_ID(), '_house_fotogallery', true ).' images=15 ]'); ?>
          </div>
          <?php endif; ?>
        </div><!-- / #photo3d-->

        <div class="tab-pane fade" id="alap">
          <?php if ( get_post_meta( get_the_ID(), '_house_fotoalaprajz', true ) >0 ) :?>
          <div class="gwrap">
                <?php echo do_shortcode('[nggallery id='.get_post_meta( get_the_ID(), '_house_fotoalaprajz', true ).' images=15 ]'); ?>
          </div>
          <?php endif; ?>

          Alaprajz látható itt, esetleg letölthető pdf-ben.
        </div>
        
        <div class="tab-pane fade" id="past">
          <?php if ( get_post_meta( get_the_ID(), '_house_fotoilyenvolt', true ) >0 ) :?>
          <div class="gwrap">
                <?php echo do_shortcode('[nggallery id='.get_post_meta( get_the_ID(), '_house_fotoilyenvolt', true ).' images=15 ]'); ?>
          </div>
          <?php endif; ?>
        </div>

        <div class="tab-pane fade" id="map">
         <div id="helyszin_map" class="gmap"></div>
        </div>
      </div><!-- / .tab-content -->

    </aside><!-- / .house-tabdata -->


  </article>

<?php endwhile; ?>
              <?php  roots_content_nav(); ?>

