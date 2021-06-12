<?php

function ju_widgets(){
    register_sidebar([
        'name'                  => __('sidebar', 'julia'),
        'id'                    => 'ju_sidebar',
        'description'           => __('Sidebar for the theme', 'julia'),
        'before_widget'         => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'          =>'</div>',
        'before_title'          => '<h4>',
        'after_title'           => '</h4>'
    ]);
}


?>