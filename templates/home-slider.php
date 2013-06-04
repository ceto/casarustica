<div class="sliderwrap header2" role="banner">
	<div class="wrap container-fluid clearfix">



    <div class="row-fluid headinfo">
		<div class="fixblock">
        	<div class="langsel">HU | DE</div>
        	<div class="callmenow">(+36) 70 770 5653</div>              
        </div><!-- .fixblock -->
	    <div class="slogan">Új parasztházak építése, és régi házak helyreállítása<br />Belső–Somogy erdővel határos falvaiban.</div>
    </div>







			<div class="sliderblock clearfix">

									<div class="r-block">
						<div class="slidertext">
							<h1>Legyen Önnek is parasztháza</h1>
							<p>Parasztházak, felújítva, magas komfortfokozatttal</p>
		 					<ul>
		 						<li>Balatonhoz közel,</li>
		 						<li>teljesen modernizált,</li>
		 						<li>lakóháznak, </li>
		 						<li>hétvégi háznak.</li>
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
								));
						 ?>
						<div class="carousel slide" id="homeCarousel">
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
										<h4><?php the_title(); ?></h4>
										<!--p><?php echo get_post_meta( get_the_ID(), '_slide_desc', true); ?></p -->
										<p class="gombi">
											<a href="#">Részletek</a>
										</p>
									</div>
								</div>
							<?php endwhile; ?>
							</div>
							<!-- Carousel nav -->
							  <a class="carousel-control left" href="#homeCarousel" data-slide="prev">&lsaquo;</a>
							  <a class="carousel-control right" href="#homeCarousel" data-slide="next">&rsaquo;</a>

						</div>
					</div>


			</div><!-- / .sliderblock -->

	</div>
</div><!-- / .sliderwrap -->