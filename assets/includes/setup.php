 <?php

    function ju_setup_theme()
    {

        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('custom-logo');

        register_nav_menu('primary', __('Primary Menu', 'julia'));
        register_nav_menu('secundary', __('Secundary Menu', 'julia'));

        if (function_exists('quads_register_ad')) {
            quads_register_ad(array(
                'location'      => 'julia_header', 
                'description'   => 'julia_header position'));
        }
    }


    ?>