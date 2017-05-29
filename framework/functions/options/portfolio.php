<?php

    $fields[] = array(
        'type'        => 'image',
        'settings'     => 'universal_single_portfolio_image',
        'label' =>    esc_html__( 'Single Portfolio Image', 'universal-wp' ),
        'section'     => 'universal_portfolio',
        'default'     => get_template_directory_uri() . '/assets/images/22.jpg',
        'priority'    => 10,
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'     => 'universal_link_portfolio',
        'label'       => __( 'Link to Works', 'universal-wp' ),
        'description' => __( 'Add link to "All Works"', 'universal-wp' ),
        'section'     => 'universal_portfolio',
        'default'     => 'http://google.com',
        'priority'    => 10,
    );


     