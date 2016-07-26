<?php get_header(); ?>
<div class="container">
	<div class="row">

<!--aqui va el loop-->
		<div class="col-sm-8">
			<div class="row">
        <h2>Categoria: <?php single_cat_title();?></h2>
			  <?php get_template_part('loop'); ?>
			</div>
		</div>

<!--aqui va el sidebar-->
		<div class="col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
