<?php 

function ju_social_customizer_section($wp_customize){

    
    $wp_customize->add_setting('ju_facebook_handle', [
        'default'       =>  ''
    ]);

    $wp_customize->add_setting('ju_twitter_handle', [
        'default'       =>  ''
    ]);

    $wp_customize->add_setting('ju_instagram_handle', [
        'default'       =>  ''
    ]);

    $wp_customize->add_setting('ju_phone', [
        'default'       =>  ''
    ]);

    $wp_customize->add_setting('ju_email', [
        'default'       =>  ''
    ]);

    $wp_customize->add_section('ju_social_section', [
        'title'         => __('julia Social Settings', 'julia'),
        'priority'      => 30
    ] );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ju_social_facebook_input',
        array(
            'label'          => __( 'Facebook Handle', 'julia' ),
            'section'        => 'ju_social_section',
            'settings'       => 'ju_facebook_handle'
        )
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ju_social_twitter_input',
        array(
            'label'          => __( 'Twitter Handle', 'julia' ),
            'section'        => 'ju_social_section',
            'settings'       => 'ju_twitter_handle'
        )
    ));


    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ju_social_instagram_input',
        array(
            'label'          => __( 'Instagram Handle', 'julia' ),
            'section'        => 'ju_social_section',
            'settings'       => 'ju_instagram_handle'
        )
    ));


    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ju_social_phone_input',
        array(
            'label'          => __( 'Phone Number', 'julia' ),
            'section'        => 'ju_social_section',
            'settings'       => 'ju_phone'
        )
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ju_social_email_input',
        array(
            'label'          => __( 'Email', 'julia' ),
            'section'        => 'ju_social_section',
            'settings'       => 'ju_email'
        )
    ));


}


?>