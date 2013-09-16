<section class="widget clearfix cumo">
	<div class="widget-inner">
		<div class="slidertext">
			<?php if (ICL_LANGUAGE_CODE=='de') : ?>
							<h1>Werden auch Sie Eigentümer eines Bauernhauses</h1>
							<p>Bauernhäuser im traditionell klassischen Stil renoviert mit Komfortausstattung</p>
								<ul>
									<li>Schlüsselfertige Bauernhäuser,</li>
									<li>Maßgeschneiderte Tradition,</li>
									<li>Mensch und Natur,</li>
									<li>In der Nähe des Plattensees.</li>
							</ul>
							<p>
								<a href="<?php echo get_permalink(51); ?>" class="btn btn-warning">Referenzhäuser ansehen</a>
							</p>

			<?php else : ?>						
							<h1>Önnek is lehet parasztháza</h1>
							<p>Klasszikus parasztházak, felújítva, magas komfortfokozattal</p>
								<ul>
									<li>Kulcsrakész parasztházak,</li>
									<li>Testre szabott hagyomány,</li>
									<li>Ember és természet, </li>
									<li>Karnyújtásnyira a Balatontól.</li>
							</ul>
							<p>
								<a href="<?php echo get_permalink(51); ?>" class="btn btn-warning">Referencia ház megtekintése</a>
							</p>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php
  $the_sidehouse= new WP_Query ( 
    array(
    	'post_type' => 'house',
    	'posts_per_page'=>5,
     )
    );
?>
<section class="widget clearfix">
	<div class="widget-inner">
		<h3 class="widget-title"><?php _e('Házak','roots') ?></h3>
		<?php while ( $the_sidehouse->have_posts()) : $the_sidehouse->the_post(); ?>
				<div class="side-houses clearfix" >
						<header>
      <h4 class="house-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
    <h5 class="house-subtitle">
      <?php echo get_post_meta( get_the_ID(), '_house_subtitle', true); ?>
    </h5>
    <a href="<?php the_permalink(); ?>" class="action"><?php _e('Részletek ...','roots'); ?></a>

  </div><!-- /.house-data -->
					</div>
			<?php endwhile; ?>
	<a class="sidehousemore" href="<?php echo get_permalink(langed_id(26)); ?>"><?php _e('További házak ...','roots') ?></a>
	</div>
</section>

<?php dynamic_sidebar('sidebar-secondary'); ?>
