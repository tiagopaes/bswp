<?php

function bs4wp_customize_register($wp_customize)
{

  //footer
  $wp_customize->add__section('footer', [
    'title' => __('Rodapé', 'BS4 + WP'),
    'description' => sprintf(__('Opções para o radapé', 'BS4 + WP')),
    'priority' => 20
  ]);

  $wp_customize->add_setting('footer_title', [
    'default' => __('Meu primeiro tema wordpress', 'BS4 + WP'),
    'type' => 'theme_mod'
  ]);

  $wp_customize->add_control('footer_title', [
    'label' => __('Título do radapé', 'BS4 + WP'),
    'section' => 'footer',
    'priority' => 1
  ]);

  $wp_customize->add_setting('footer_text', [
    'default' => __('Feito com muita dedicação e esforço!', 'BS4 + WP'),
    'type' => 'theme_mod'
  ]);

  $wp_customize->add_control('footer_text', [
    'label' => __('Text do radapé', 'BS4 + WP'),
    'section' => 'footer',
    'priority' => 2
  ]);
}
add_action('customize_register', 'bs4wp_customize_register');
