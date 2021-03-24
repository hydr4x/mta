<nav class="navbar">
  <div class="container-fluid navbar__wrapper">

    <div class="navbar__brand col-sm-2">
      <img src="<?php echo get_template_directory_uri(); ?>/images/codeunion-logo.png" alt="" class="navbar__brand-logo">
    </div>

    <div class="navbar__content col-sm-8">
      <?php
        global $lang;
        if($lang == 'pl') {
          wp_nav_menu( array( 'theme_location' => 'menu_pl' ) );
        } elseif ($lang == 'en') {
          wp_nav_menu( array( 'theme_location' => 'menu_en' ) );
        }
      ?>
    </div>

    <div class="navbar__langs col-sm-2">
      <?php wp_nav_menu( array( 'theme_location' => 'menu_lang' ) ); ?>
    </div>

  </div>
</nav>
