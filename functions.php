<?php 

// Setup
define ('JU_DEV_MODE', true );

// Includes
include( get_theme_file_path('assets\includes\front\enqueue.php'));
include( get_theme_file_path('assets\includes\setup.php'));
include( get_theme_file_path('assets\includes\widgets.php'));
include( get_theme_file_path('assets\includes\theme-customizer.php'));
include( get_theme_file_path('assets\includes\customizer\social.php'));
include( get_theme_file_path('assets\includes\customizer\misc.php'));

// Hooks
add_action('wp_enqueue_scripts', 'ju_enqueue');
add_action('after_setup_theme', 'ju_setup_theme');
add_action('widgets_init','ju_widgets');
add_action('customize_register', 'ju_customize_register');

// Shortcodes













?>