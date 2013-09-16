<header class="banner navbar navbar-inverse navbar-fixed-top " role="banner">
  <div class="navbar-inner">
    <div class="container-fluid">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo home_url(); ?>/">
        <img class="logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>">
        <span class="logotext">Casa Rustica</span>
      </a>
      <nav class="nav-main nav-collapse collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav pull-right'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
