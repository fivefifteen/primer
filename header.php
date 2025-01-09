<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header>
      <div class="container">
        <div class="header-logo-container">
          <a href="<?=home_url()?>">
            <img src="<?=IMAGES?>/svg/logo.svg" class="header-logo">
          </a>
        </div>

        <?php
        get_template_part('parts/header', 'navigation-btn');

        wp_nav_menu(array(
          'container_class' => 'header-navigation-container',
          'depth'           => 1,
          'fallback_cb'     => function ($args) { echo '<div></div>'; }, // Fallback to an empty div so the flex layout doesn't get messed up
          'menu_id'         => 'header-navigation',
          'theme_location'  => 'header-navigation'
        ));
        ?>
      </div>
    </header>

    <main>