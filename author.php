<?php get_header(); ?>
  <section class="container">
    <div class="row">
      <article class="col-sm-8">
        <?php the_post(); ?>
        <h2>Los post de: <?php the_author(); ?></h2>
        <?php if (get_the_author_meta()): ?>
          <div class="row">
    				<article class="col-md-4">
    					<?php echo get_avatar(get_the_author_meta('email'), $size='220') ?>
    				</article>
    				<article class="col-md-8">
    				<?php get_the_author_meta('description')?>
          </article>
			</div>
        <?php endif ?>
        <?php rewind_posts(); ?>

        <?php get_template_part('loop'); ?>
      </article>

       <article class="col-sm-4">
        <?php get_sidebar(); ?>
       </article>

    </div>
  </section>



<?php get_footer(); ?>
