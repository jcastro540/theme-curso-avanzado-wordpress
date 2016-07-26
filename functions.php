<?php 
  //SOPORTE Y CONFIGURACIÓN GENERAL DEL TEMA
  add_action('after_setup_theme', 'curso_setup');
  if ( !function_exists( 'curso_setup' ) ):
  function curso_setup() {
   add_editor_style();
   add_theme_support( 'post-thumbnails' );
   add_theme_support( 'post-formats', array( 'aside', 'gallery','video' ) );
   add_image_size('max-thumbnail',640,250,true);
   add_theme_support('html5');
   add_theme_support('menus');
   add_theme_support( 'woocommerce' );

   //Registro y soporte de las areas del menu

   register_nav_menus( array(
    'primary' => __( 'Primary Navigation', 'curso' ),
    'footer-menu' => __( 'Footer Navigation' , 'curso')
    ) );
  }
  endif;

  //ENCOLAR ARCHIVOS CSS Y JS
  add_action("wp_enqueue_scripts", "incrustar_estilos", 11);
  function incrustar_estilos(){
      // nos aseguramos que no estamos en el area de administracion
      if( !is_admin() ){

          // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
          // en adicion a las dependencias podemos indicar que este aarchivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la funcion wp_footer
          wp_register_script('bootstrap', get_bloginfo('template_directory'). '/assets/js/bootstrap.min.js', array('jquery'), '1', true );
          wp_register_script('main', get_bloginfo('template_directory'). '/assets/js/main.js', array('bootstrap'), '1', true );

          wp_enqueue_script('bootstrap');
          wp_enqueue_script('main');
      }
  }

if (!function_exists('encolar_css')) {
  function encolar_css(){
    wp_register_style ('bootstrap', get_template_directory_uri()."/assets/css/bootstrap.min.css");
    wp_register_style ('curso', get_template_directory_uri()."/style.css", array('bootstrap'));

    wp_enqueue_style("curso");
  }
  add_action('wp_enqueue_scripts', 'encolar_css');

}


//MENU
require_once ('inc/wp_bootstrap_navwalker.php');

