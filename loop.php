<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php if(is_single()): ?>
      <h4><?php the_date(); ?></h4>
    <?php endif ?>
    <div class="row">
      <article class="col-sm-12">
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        <p>
          	<p><?php the_excerpt() ?></p><br>
        </p>

      </article>
    </div>

<?php endwhile; else: ?>
  <p>
  <?php _e('Lo sentimos no hay contenido relacionado a su busqueda.'); ?>
  </p>
<?php endif; ?>
