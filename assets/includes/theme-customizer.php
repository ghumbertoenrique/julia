<?php


function ju_customize_register( $wp_customize ){
    $wp_customize->add_panel( 'Julia', [
        'title'                 =>  __('Julia', 'julia'),
        'description'           =>  '<p>Julia Theme Settings</p>',
        'priority'              =>  160
    ] );

    ju_social_customizer_section($wp_customize);
    ju_misc_customizer_section( $wp_customize );

}
