<?php get_header(); ?>
<section class="container">
  <div class="row">
    <article class="col-sm-8">
      	<h1>Esto es el archivo</h1>
        <?php get_template_part('loop-archive','archive'); ?>
    </article>
    <article class="col-sm-4">
      <?php get_sidebar(); ?>
    </article>
  </div>


</section>


<?php get_footer(); ?>