<footer class="content-info container-fluid" role="contentinfo">
  <div class="row-fluid">
    <?php dynamic_sidebar('sidebar-footer'); ?>    
  </div>
  <div class="row-fluid">
  	<div class="span12">
  		<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | Designed by <a href="http://hydrogene.hu">Hydrogene</a> </p>
  	</div>
  </div>
</footer>
<?php wp_footer(); ?>
