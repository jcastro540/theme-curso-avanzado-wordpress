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

 }

 add_action('customize_register', 'curso_customize_register');

 ?>
