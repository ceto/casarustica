<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

 <?php
    if (is_page_template('template-home.php') ) {
      get_template_part('templates/home','slider'); 
      get_template_part('templates/house','featured');       
    } else {
      get_template_part('templates/header','info'); 
    }
  ?>

  <div class="nagywrap">
    <div class="kwrap-1">
      <div class="wrap container-fluid" role="document">
        <div class="content row-fluid">
          <div class="main <?php echo roots_main_class(); ?>" role="main">
            <?php include roots_template_path(); ?>
          </div><!-- /.main -->
          <?php if (roots_display_sidebar()) : ?>
          <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
            <?php include roots_sidebar_path(); ?>
          </aside><!-- /.sidebar -->
          <?php endif; ?>
        </div><!-- /.content -->
      </div><!-- /.wrap -->
    </div><!-- /.kwrap-1 -->

    <?php get_template_part('templates/content','child');   ?>
  </div><!-- / .nagywrap -->

  <div class="footerwrap">
    <?php get_template_part('templates/footer'); ?>
  </div>
  
</body>
</html>
