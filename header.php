<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header>
      <div class="container">
        <div class="header-brand">
          <a href="<?=home_url()?>">
            <img src="<?=IMAGES?>/svg/logo.svg" class="logo">
          </a>
        </div>

        <?php
        wp_nav_menu(array(
          'theme_location'  => 'header-navigation',
          'depth'           => 2
        ));

        get_template_part('parts/header', 'nav-btn');
        ?>
      </div>
    </header>

    <main>