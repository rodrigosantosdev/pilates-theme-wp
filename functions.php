<?php

// theme supports
function custom_theme_setup()
{
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'custom_theme_setup');

// customizers
include_once get_template_directory() . '/inc/customizer-settings.php';

// função de style
function pilates_styles()
{
  wp_enqueue_style('tailwind', get_template_directory_uri() . '/app.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'pilates_styles');

function pilates_scripts()
{
  wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'pilates_scripts');

// Adiciona o script do FontAwesome ao tema
function add_fontawesome_script()
{
  wp_enqueue_script('fontawesome-script', 'https://kit.fontawesome.com/39d08c0666.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'add_fontawesome_script');


// função de menu de navegação
function add_nav_menus()
{
  register_nav_menus(array(
    'Header Menu' => 'Navigation Bar',
    'Fotter menu' => 'Footer Bar',
  ));
}
add_action('init', 'add_nav_menus');

// custom fonts
function load_custom_fonts()
{
  wp_enqueue_style('custom-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
}
add_action('wp_enqueue_scripts', 'load_custom_fonts');