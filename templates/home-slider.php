<div class="sliderwrap header2 clearfix" role="banner">
	<div class="wrap container-fluid ">



    <div class="row-fluid headinfo">
		<div class="fixblock">
        	<div class="langsel">HU | DE</div>
        	<div class="callmenow">(+36) 30 249 9567</div>              
        </div><!-- .fixblock -->
	    <div class="slogan">Új parasztházak építése, és régi házak helyreállítása<br />Belső–Somogy erdő közeli falvaiban.</div>
    </div>







			<div class="sliderblock clearfix">

									<div class="r-block">
						<div class="slidertext">
							<h1>Önnek is lehet parasztháza</h1>
							<p>Klasszikus parasztházak, felújítva, magas komfortfokozatttal</p>
								<ul>
									<li>Kulcsarakész parasztházak,</li>
									<li>Testre szabott hagyomány,</li>
									<li>Ember és természet, </li>
									<li>Karnyújtásnyira a Balatontól.</li>
							</ul>
							<p>
								<a href="?house=fajszi-haz" class="btn btn-warning">Referencia ház megtekintése</a>
							</p>
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

	</div>
	<!-- Carousel nav -->
  <a class="carousel-control left" href="#homeCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#homeCarousel" data-slide="next">&rsaquo;</a>
  <a data-atoggle="collapse" data-atarget=".nav-collapse" class="topi" href="#contenttop"><i class="icon-arrow-down"></i></a>

</div><!-- / .sliderwrap -->