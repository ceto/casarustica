<aside class="sidebar sidebar-1 <?php echo roots_sidebar_class(); ?>" role="complementary">

  <section class="side-albums widget widget-first clearfix">
  	<div class="widget-inner">
  		<h3 class="widget-title"><?php _e('Fotó','roots'); ?></h3>
  		<?php echo do_shortcode('[nggalbum id=6 template=compact]'); ?>
  	</div>
  </section>

  <?php dynamic_sidebar('sidebar-primary'); ?>
</aside><!-- /.sidebar-1 -->