<div class="sliderwrap header2 clearfix" role="banner">

  <div class="wrap container-fluid ">
    <div class="row-fluid headinfo">
      <div class="fixblock">
        <div class="langsel"><?php do_action('icl_language_selector'); ?></div>
        <div class="callmenow">(+36) 30 249 9567</div>
      </div><!-- .fixblock -->
      <div class="slogan">
        <?php if (ICL_LANGUAGE_CODE=='de') : ?>
        Neubau und Renovierung von Bauernhäusern im traditionellen Stil in den Dörfern am Rande der Wälder des Bezirks Somogy.
        <?php else : ?>
          Felújított parasztházakat kínálunk megvételre<br />Belső–Somogy erdővel határolt falvaiban.
        <?php endif; ?>
      </div>
    </div>
    </div>

    <div class="sliderblock clearfix">
      <div class="row-fluid">
        <figure class="house-figure span6">
          <?php the_post_thumbnail('medium43');  ?>
          <div class="house-readiness">
            <?php echo readiness(get_post_meta( get_the_ID(), '_house_readiness', true)); ?>
          </div>
        </figure>
        <div class="house-datablock span6">
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

    </div><!-- / .sliderblock -->
    <a class="topi" href="#contenttop"><i class="icon-arrow-down"></i></a>
</div><!-- / .sliderwrap -->

<?php if ( get_post_meta( get_the_ID(), '_house_gallery', true ) !='' ) :?>
  <div class="feathouseblockwrap housevertgallery clearfix">
    <div class="container-fluid">
      <aside class="row-fluid">
        <div class="owl-carousel kiskep-carousel gallery">
          <?php
            $files = get_post_meta( get_the_ID(), '_house_gallery', 1 );
            foreach ( (array) $files as $attachment_id => $attachment_url ) {
              ?>
              <div class="item">
                <figure class="gallery__item">
                  <?php $target= wp_get_attachment_image_src( $attachment_id, 'full' );?>
                  <a class="thumbnail" href="<?= $target[0] ?>">
                    <?= wp_get_attachment_image( $attachment_id, 'medium' ) ?>
                  </a>
                  <figcaption>Lorem ipsum dolor sit amet</figcaption>
                </figure>
              </div>
            <?php } ?>
        </div>

        <hr>
        <?= apply_filters('the_content', get_post_meta( get_the_ID(), '_house_gallery', true )  ); ?>



      </aside>
      <a class="fblockmore" href="#">Galéria indítása ...</a>
    </div>
  </div>
<?php endif; ?>