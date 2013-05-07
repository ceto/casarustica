<footer class="content-info container" role="contentinfo">
  <div class="row">
    <?php dynamic_sidebar('sidebar-footer'); ?>    
  </div>
  <div class="row">
  	<div class="span12">
  		<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  	</div>
  </div>
</footer>

<?php wp_footer(); ?>
