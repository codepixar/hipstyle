<?php 
/**
 * @Packge     : Hipstyle
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
Epsilon_Customizer::add_field(
    'hipstyle_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'hipstyle' ),
        'description' => esc_html__( 'Select the theme color.', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_general_section',
        'default'     => '#f81c1c',
    )
);

 // Theme box shadow color field
Epsilon_Customizer::add_field(
    'hipstyle_theme_box_shadow_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Box Color', 'hipstyle' ),
        'description' => esc_html__( 'Select the theme color.', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_general_section',
        'default'     => 'rgba(248, 28, 28, 0.1)',
    )
);

 
// Header background color field
Epsilon_Customizer::add_field(
    'hipstyle_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'hipstyle' ),
        'description' => esc_html__( 'Select the header background color.', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_header_section',
        'default'     => '#f81c1c',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'hipstyle_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'hipstyle_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_header_section',
        'default'     => '#000000',
    )
);

// Other Page Header menu hover color field
Epsilon_Customizer::add_field(
    'hipstyle_ohter_page_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Other Page Header menu hover color', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_header_section',
        'default'     => '#f81c1c',
    )
);

// Header dropdown menu color field
Epsilon_Customizer::add_field(
    'hipstyle_header_drop_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_header_section',
        'default'     => '#ffffff',
    )
);

// Header dropdown menu hover color field
Epsilon_Customizer::add_field(
    'hipstyle_header_drop_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_header_section',
        'default'     => '#ffffff',
    )
);


/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'hipstyle_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'hipstyle' ),
        'description' => esc_html__( 'Set post excerpt length.', 'hipstyle' ),
        'section'     => 'hipstyle_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'hipstyle_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'hipstyle' ),
        'section'     => 'hipstyle_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'hipstyle_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'hipstyle' ),
        'section'     => 'hipstyle_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'hipstyle_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'hipstyle' ),
        'section'     => 'hipstyle_blog_section',
        'default'     => true
    )
);

/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'hipstyle_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'hipstyle' ),
        'section'           => 'hipstyle_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'hipstyle_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'hipstyle' ),
        'section'           => 'hipstyle_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'hipstyle_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'hipstyle_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'hipstyle_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_fof_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'hipstyle' ),
        'section'     => 'hipstyle_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'hipstyle_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'hipstyle' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'hipstyle' ),
        'section'     => 'hipstyle_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'hipstyle_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'hipstyle' ),
        'section'     => 'hipstyle_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'hipstyle' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'hipstyle_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'hipstyle' ),
        'section'     => 'hipstyle_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget/top background color field
Epsilon_Customizer::add_field(
    'hipstyle_footer_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Top Background Color', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_footer_section',
        'default'     => '#161f23',
    )
);

// Footer bottom background color field
Epsilon_Customizer::add_field(
    'hipstyle_footer_copy_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Copyright Background Color', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_footer_section',
        'default'     => '#121b1f',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'hipstyle_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_footer_section',
        'default'     => '#999999',
    )
);

// Footer widget title color field
Epsilon_Customizer::add_field(
    'hipstyle_footer_widget_title_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Title Color', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'hipstyle_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_footer_section',
        'default'     => '#f81c1c',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'hipstyle_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'hipstyle' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hipstyle_footer_section',
        'default'     => '#f81c1c',
    )
);

