<?php
  function razimal_script_enqueue(){
    wp_enqueue_style('customstyle', get_template_directory_uri().'/css/razimal.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customsjs', get_template_directory_uri().'/js/razimal.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'razimal_script_enqueue');

function razimal_theme_setup(){
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Header Navigations');
  register_nav_menu('secondary', 'Footer Navigations');
}

add_action('init', 'razimal_theme_setup');
?>
