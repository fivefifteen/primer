    </main>

    <footer>
      <div class="container">
        <?php
        wp_nav_menu(array(
          'container_class' => 'footer-navigation-container',
          'depth'           => 1,
          'fallback_cb'     => function ($args) { echo '<div></div>'; }, // Fallback to an empty div so the flex layout doesn't get messed up
          'menu_id'         => 'footer-navigation',
          'theme_location'  => 'footer-navigation'
        ));
        ?>

        <div class="footer-logo-container">
          <a href="<?=home_url()?>">
            <img src="<?=IMAGES?>/svg/logo.svg" class="footer-logo">
          </a>
        </div>

        <div class="footer-notice">
          <p class="copyright">&copy; <?=date('Y')?> <?php bloginfo('name'); ?></p>
        </div>
      </div>

      <div class="fivefifteen">
        <a href="https://fivefifteen.com" target="_blank" title="This website's design was built on Primer - A WordPress boilerplate theme by Five Fifteen">
          <img src="<?=IMAGES?>/svg/fivefifteen.svg" class="fivefifteen-logo">
        </a>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>