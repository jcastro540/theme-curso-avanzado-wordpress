<?php
/*
Template Name: Front Page
*/
 get_header();
 ?>

<section class="carrusel">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo get_theme_mod('curso_slider1') ?>" alt="...">
      </div>
      <div class="item">
        <img src="<?php echo get_theme_mod('curso_slider2') ?>" alt="...">>
      </div>
      <div class="item">
        <img src="<?php echo get_theme_mod('curso_slider3') ?>" alt="...">
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>


<section class="container mt20">
  <h1 class="text-center"><?php echo get_theme_mod('curso_team_titulo'); ?></h1>
  <div class="row">
    <article class="col-sm-4">
      <img src="<?php echo get_theme_mod('curso_team_img1') ?>" alt="" class="img-circle img-responsive center-block" />
      <h3 class="text-center"></h3>
      <p class="text-center"></p>
    </article>
    <article class="col-sm-4">
      <img src="" alt="" class="img-circle img-responsive center-block" />
      <h3 class="text-center"></h3>
      <p class="text-center"></p>
    </article>
    <article class="col-sm-4">
      <img src="" alt="" class="img-circle img-responsive center-block" />
      <h3 class="text-center"></h3>
      <p class="text-center"></p>
    </article>
  </div>
</section>


<?php get_footer(); ?>
