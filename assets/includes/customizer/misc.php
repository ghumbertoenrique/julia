<?php


function ju_misc_customizer_section ( $wp_customize ){

    $wp_customize->add_setting( 'ju_header_show_search', [
        'default'           =>  'yes'
    ] );

    $wp_customize->add_setting( 'ju_header_show_cart', [
        'default'           =>  'yes'
    ] );

    $wp_customize->add_setting( 'ju_footer_copyright_text', [
        'default'           =>  'Copyright &copy; 2021 All Rights Reserved'
    ] );

    $wp_customize->add_setting( 'ju_footer_tos_page', [
        'default'           =>  0
    ] );

    $wp_customize->add_setting( 'ju_footer_privacy_page', [
        'default'           =>  0
    ] );

    $wp_customize->add_section('ju_misc_section', [
        'title'             =>  __('julia Misc Settings', 'julia'),
        'priority'          =>  30
    ]);

    $wp_customize->add_control( new WP_Customize_Control (
        $wp_customize,
        'ju_header_show_search_input',[
            'label'         =>  __('Show Search Button in Header', 'julia'),
            'section'       => 'ju_misc_section',
            'settings'      =>  'ju_header_show_search',
            'type'          =>  'checkbox',
            'choices'       =>  [
                'yes'       =>  'Yes'
            ]
        ]

    ) );

    $wp_customize->add_control( new WP_Customize_Control (
        $wp_customize,
        'ju_header_show_cart_input',[
            'label'         =>  __('Show Cart Button in Header', 'julia'),
            'section'       => 'ju_misc_section',
            'settings'      =>  'ju_header_show_cart',
            'type'          =>  'checkbox',
            'choices'       =>  [
                'yes'       =>  'Yes'
            ]
        ]

    ) );


    $wp_customize->add_control( new WP_Customize_Control (
        $wp_customize,
        'ju_footer_copyright_text_input',[
            'label'         =>  __('Change Copyright Text', 'julia'),
            'section'       => 'ju_misc_section',
            'settings'      =>  'ju_footer_copyright_text',
            'type'          =>  'text',
        ]

    ) );


    $wp_customize->add_control( new WP_Customize_Control (
        $wp_customize,
        'ju_footer_tos_page_input',[
            'label'         =>  __('Footer TOS Page', 'julia'),
            'section'       => 'ju_misc_section',
            'settings'      =>  'ju_footer_tos_page',
            'type'          =>  'dropdown-pages',
        ]

    ) );


    $wp_customize->add_control( new WP_Customize_Control (
        $wp_customize,
        'ju_footer_privacy_page_input',[
            'label'         =>  __('Footer Privacy Page', 'julia'),
            'section'       => 'ju_misc_section',
            'settings'      =>  'ju_footer_privacy_page',
            'type'          =>  'dropdown-pages',
        ]

    ) );

}   


?>