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

						<div class="r-block">

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
								<a href="<?php echo get_permalink(langed_id(51,'house')); ?>" class="btn btn-warning">Referenzhäuser ansehen</a>
							</p>

						<?php else : ?>
							<h1>Eladó parasztház</h1>
							<p>Felújított erdő széli vidéki ház Balaton közelében eladó. Ár: 12.5 millió Ft.</p>
								<ul>
									<li>Azonnal költözhető</li>
									<li>Csendes erdei zsákfaluban</li>
									<li>Teljesen modernizált tégla épület</li>
									<li>Nagy, gyümölcsfás telekkel</li>
								</ul>
							<p>
								<a href="<?php echo get_permalink(langed_id(51,'house')); ?>" class="btn btn-warning">Mutasd a részleteket</a>
							</p>
						<?php endif; ?>

						</div>

						</div>


					<div class="l-block">
						<?php
							$the_slider = new WP_Query( array(
								'post_type'=>'slide',
								'posts_per_page'=>19,
								));
						 ?>
						<div class="carousel fade" id="homeCarousel">
							<ol class="carousel-indicators">
								<?php $iti=0; ?>
								<?php while ( $the_slider->have_posts()) : $the_slider->the_post(); ?>
									<li data-target="#homeCarousel" data-slide-to="<?php echo $iti++; ?>" class="<?php echo ($iti==1)?'active':''; ?>"></li>
								<?php endwhile; ?>
							</ol>

							<?php rewind_posts(); ?>
							<?php $iti=0; ?>
							<div class="carousel-inner">
							<?php while ( $the_slider->have_posts()) : $the_slider->the_post(); ?>
								<div class="item <?php echo ($iti++==0)?'active':''; ?>">
									<?php the_post_thumbnail('medium169'); ?>
									<div class="carousel-caption">
										<h4>
										<?php if (get_post_meta( get_the_ID(), '_slide_url', true)!='') :?>
											<a href="<?php echo get_post_meta( get_the_ID(), '_slide_url', true); ?>">
											<?php the_title(); ?>
											</a>
										<?php else : ?>
											<?php the_title(); ?>
										<?php endif; ?>
										</h4>
									</div>
								</div>
							<?php endwhile; ?>
							</div>


						</div>
					</div>


			</div><!-- / .sliderblock -->

	<!-- Carousel nav -->
  <a class="carousel-control left" href="#homeCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#homeCarousel" data-slide="next">&rsaquo;</a>
  <a class="topi" href="#contenttop"><i class="icon-arrow-down"></i></a>

</div><!-- / .sliderwrap -->