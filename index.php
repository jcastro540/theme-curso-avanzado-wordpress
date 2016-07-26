<?php get_header(); ?>
<section class="container">
  <h1><?php bloginfo ("name"); ?></h1>
  <div class="row">
    <article class="col-sm-8">
        <?php get_template_part('loop'); ?>
    </article>
    <article class="col-sm-4">
      <?php get_sidebar(); ?>
    </article>
  </div>


</section>


<?php get_footer(); ?>