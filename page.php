<?php get_header(); ?>

<section class="page-section">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>

    <?php
    if (function_exists('yoast_breadcrumb')) {
      yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    ?>

    <div class="page-content">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>