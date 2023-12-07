<?php
// customizer-settings.php

function custom_theme_customize_register($wp_customize)
{
  $wp_customize->add_section('social_section', array(
    'title' => __('Redes Sociais', 'text_domain'),
    'priority' => 30,
  ));

  // Adiciona campos para cada rede social
  $social_networks = array('facebook', 'twitter', 'instagram', 'linkedin', 'tiktok', 'youtube');
  foreach ($social_networks as $network) {
    $wp_customize->add_setting($network . '_url', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control($network . '_url', array(
      'label' => ucfirst($network) . ' URL',
      'section' => 'social_section',
      'type' => 'url',
    ));

    $wp_customize->add_setting($network . '_enabled', array(
      'default' => false,
      'sanitize_callback' => 'sanitize_key',
    ));

    $wp_customize->add_control($network . '_enabled', array(
      'label' => ucfirst($network) . ' Ativo',
      'section' => 'social_section',
      'type' => 'checkbox',
    ));
  }
}
add_action('customize_register', 'custom_theme_customize_register');