<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
  <section class="post-section">
    <div class="container">
      <h1 class="post-title"><?php the_title(); ?></h1>

      <div class="post-content">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>