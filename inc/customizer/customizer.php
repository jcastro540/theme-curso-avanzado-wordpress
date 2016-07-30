<?php
/**
 * Archivo para personalizar nuestro tema
 */
 function curso_customize_register($wp_customize){
  //  PANEL OPCIONES GENERALES
  $wp_customize->add_panel('generales', array(
    'priority' => 10,
   	'capability' => 'edit_theme_options',
   	'title' => __( 'Opciones Generales', 'curso' ),
   	'description' => __( 'Sección para configurar las opciones generales del tema', 'curso' )
  ));
  // Logo
   $wp_customize->add_section( 'curso_generales_section' , array(
     'title'       => __( 'Logo', 'curso' ),
     'description' => 'Modificar el logo',
     'priority'    => 42,
     'panel' => 'generales'
   ));

   /* default */
  $wp_customize->add_setting( 'curso_logo', array(
    'default' => get_template_directory_uri().'/assets/img/logo.png'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'curso_logo',
    array(
      'label'      => __( 'Sube tu Logo', 'curso' ),
      'section'    => 'curso_generales_section',
      'settings'   => 'curso_logo',
      'context'    => 'your_setting_context'
    )
  ));
  // Colores Titulos
  $wp_customize->add_section( 'curso_generales_colores' , array(
    'title'       => __( 'Colores', 'curso' ),
    'description' => 'Modificar los colores de las fuentes',
    'priority'    => 43,
    'panel' => 'generales'
  ));

  $wp_customize->add_setting( 'curso_colores', array(
    'default' => '#34495e',
    'transport'   => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'curso_colores',
    array(
      'label'      => __( 'Cambio de colores a los Titulos', 'curso' ),
      'section'    => 'curso_generales_colores',
      'settings'   => 'curso_colores',
      'context'    => 'your_setting_context',
    )
  ));

  // Colores Links
  $wp_customize->add_section( 'curso_generales_colores' , array(
    'title'       => __( 'Colores', 'curso' ),
    'description' => 'Modificar los colores de las fuentes',
    'priority'    => 44,
    'panel' => 'generales'
  ));

  $wp_customize->add_setting( 'curso_colores_link', array(
    'default' => '#34495e',
    'transport'   => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'curso_colores_link',
    array(
      'label'      => __( 'Cambio de colores a los links', 'curso' ),
      'section'    => 'curso_generales_colores',
      'settings'   => 'curso_colores_link',
      'context'    => 'your_setting_context',
    )
  ));

  // LANDING
  $wp_customize->add_panel('landing', array(
    'priority' => 11,
    'capability' => 'edit_theme_options',
    'title' => __( 'Personalización del Template del landing', 'curso' ),
    'description' => __( 'Sección parapersonalizar el landing', 'curso' )
  ));

  $wp_customize->add_section( 'curso_slider_section' , array(
    'title'       => __( 'Slider', 'curso' ),
    'description' => 'Modificar imagenes del slider',
    'priority'    => 42,
    'panel' => 'landing'
  ));
  // primera imagen
  $wp_customize->add_setting( 'curso_slider1', array(
    'default' => get_template_directory_uri().'/assets/img/slide1.jpg'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'curso_slider1',
    array(
      'label'      => __( 'Primera imagen', 'curso' ),
      'section'    => 'curso_slider_section',
      'settings'   => 'curso_slider1',
      'context'    => 'your_setting_context'
    )
  ));

  // segunda imagen
  $wp_customize->add_setting( 'curso_slider2', array(
    'default' => get_template_directory_uri().'/assets/img/slide2.jpg'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'curso_slider2',
    array(
      'label'      => __( 'Segunda imagen', 'curso' ),
      'section'    => 'curso_slider_section',
      'settings'   => 'curso_slider2',
      'context'    => 'your_setting_context'
    )
  ));

  // tercer imagen
  $wp_customize->add_setting( 'curso_slider3', array(
    'default' => get_template_directory_uri().'/assets/img/slide3.jpg'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'curso_slider3',
    array(
      'label'      => __( 'Tercera imagen', 'curso' ),
      'section'    => 'curso_slider_section',
      'settings'   => 'curso_slider3',
      'context'    => 'your_setting_context'
    )
  ));

  //------- Team Section-------------
  $wp_customize->add_section( 'curso_team_section' , array(
    'title'       => __( 'Nosotros', 'curso' ),
    'description' => 'Modificar Sección de Nosotros',
    'priority'    => 43,
    'panel' => 'landing'
  ));

  // Titulo de la Sección
  $wp_customize->add_setting( 'curso_team_titulo', array(
    'default' => 'Nosotros'
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'curso_team_titulo',
    array(
      'label'      => __( 'Titulo de la sección', 'curso' ),
      'section'    => 'curso_team_section',
      'settings'   => 'curso_team_titulo',
      'type'           => 'text'
    )
  ));

  // Primera imagen del Nosotros
  $wp_customize->add_setting( 'curso_team_img1', array(
    'default' => 'http://placehold.it/200x200?text=Team'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'curso_team_img1',
    array(
      'label'      => __( 'Primera Imagen', 'curso' ),
      'section'    => 'curso_team_section',
      'settings'   => 'curso_team_img1'
    )
  ));

  // Primer Sub Titulo del Nosotros
  $wp_customize->add_setting( 'curso_team_subtitle1', array(
    'default' => 'Titulo'
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'curso_team_subtitle1',
    array(
      'label'      => __( 'Primer subtitulo', 'curso' ),
      'section'    => 'curso_team_section',
      'settings'   => 'curso_team_subtitle1',
      'type'       => 'text'
    )
  ));

  // Primer parrafo del Nosotros
  $wp_customize->add_setting( 'curso_team_parrafo1', array(
    'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,ipsum dolor sit amet, consectetur adipisicing'
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'curso_team_parrafo1',
    array(
      'label'      => __( 'Primer parrafo', 'curso' ),
      'section'    => 'curso_team_section',
      'settings'   => 'curso_team_parrafo1',
      'type'       => 'textarea'
    )
  ));

  // Segunda imagen del Nosotros
  $wp_customize->add_setting( 'curso_team_img2', array(
    'default' => 'http://placehold.it/200x200?text=Team'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'curso_team_img2',
    array(
      'label'      => __( 'Segunda Imagen', 'curso' ),
      'section'    => 'curso_team_section',
      'settings'   => 'curso_team_img2'
    )
  ));

  // Segundo Sub Titulo del Nosotros
  $wp_customize->add_setting( 'curso_team_subtitle2', array(
    'default' => 'Titulo'
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'curso_team_subtitle2',
    array(
      'label'      => __( 'Segundo subtitulo', 'curso' ),
      'section'    => 'curso_team_section',
      'settings'   => 'curso_team_subtitle2',
      'type'       => 'text'
    )
  ));

  // Segundo parrafo del Nosotros
  $wp_customize->add_setting( 'curso_team_parrafo2', array(
    'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,ipsum dolor sit amet, consectetur adipisicing'
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'curso_team_parrafo2',
    array(
      'label'      => __( 'Segundo parrafo', 'curso' ),
      'section'    => 'curso_team_section',
      'settings'   => 'curso_team_parrafo2',
      'type'       => 'textarea'
    )
  ));

  // Tercera imagen del Nosotros
  $wp_customize->add_setting( 'curso_team_img3', array(
    'default' => 'http://placehold.it/200x200?text=Team'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'curso_team_img3',
    array(
      'label'      => __( 'Tercera Imagen', 'curso' ),
      'section'    => 'curso_team_section',
      'settings'   => 'curso_team_img3'
    )
  ));

  // Tercera Sub Titulo del Nosotros
  $wp_customize->add_setting( 'curso_team_subtitle3', array(
    'default' => 'Titulo'
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'curso_team_subtitle3',
    array(
      'label'      => __( 'Tercera subtitulo', 'curso' ),
      'section'    => 'curso_team_section',
      'settings'   => 'curso_team_subtitle3',
      'type'       => 'text'
    )
  ));

  // Tercer parrafo del Nosotros
  $wp_customize->add_setting( 'curso_team_parrafo3', array(
    'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,ipsum dolor sit amet, consectetur adipisicing'
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'curso_team_parrafo3',
    array(
      'label'      => __( 'Tercer parrafo', 'curso' ),
      'section'    => 'curso_team_section',
      'settings'   => 'curso_team_parrafo3',
      'type'       => 'textarea'
    )
  ));

  // Productos Ocultar o Mostrar la sección
  $wp_customize->add_section( 'curso_productos_section' , array(
    'title'       => __( 'Productos', 'curso' ),
    'description' => 'Configuración de los Productos',
    'priority'    => 45,
    'panel' => 'landing'
  ));

  $wp_customize->add_setting('curso_productos[checkbox_test]', array(
        'default'    => false
  ));

 $wp_customize->add_control(new WP_Customize_Control(
   $wp_customize,
   'curso_productos',
   array(
     'label'      => __( 'Mostrar u ocultar', 'curso' ),
     'settings' => 'curso_productos[checkbox_test]',
     'label'    => __('Ocultar la sección de Productos'),
     'section'  => 'curso_productos_section',
     'type'     => 'checkbox',
   )
 ));

}

  function customize_css(){
    ?>
      <style type="text/css">
        h1, h2, h3, h4, h5, h5 {color: <?php echo get_theme_mod("curso_colores");?>}
        a {color: <?php echo get_theme_mod("curso_colores_link");?>}
        a:hover {text-decoration: none;}
        .ocultar{
          <?php $vari = get_theme_mod('curso_productos');
            if ($vari['checkbox_test'] == 1) {
              echo 'display: none;';
            }
          ?>
        }

      </style>
    <?php
  }

 add_action('wp_head', 'customize_css');
 add_action('customize_register', 'curso_customize_register');


 ?>
