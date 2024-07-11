<?php 

// Adding techub options panels in Kirki
new \Kirki\Panel(
	'techub_options',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Techub Options', 'techub' ),
		'description' => esc_html__( 'My Panel Description.', 'techub' ),
	]
);


// techub header top section
function techub_header_top_section(){

    // Section
    new \Kirki\Section(
        'techub_top_header_section',
        [
            'title'       => esc_html__( 'Header Top', 'techub' ),
            'panel'       => 'techub_options',
            'priority'    => 160,
        ]
    );

    // Switch
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'techub_top_header_switch',
            'label'       => esc_html__( 'Header top switch', 'techub' ),
            'description' => esc_html__( 'Header top switch control', 'techub' ),
            'section'     => 'techub_top_header_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'techub' ),
                'off' => esc_html__( 'Disable', 'techub' ),
            ],
        ]
    );

    // Address text
    new \Kirki\Field\Text(
        [
            'settings' => 'techub_top_header_address',
            'label'    => esc_html__( 'Address Text', 'techub' ),
            'default'  => esc_html__( 'Manchester 21, Zurich, CH', 'techub' ),
            'section'  => 'techub_top_header_section',
            'priority' => 10,
        ]
    );

    // Address URL
    new \Kirki\Field\URL(
        [
            'settings' => 'techub_top_header_address_url',
            'label'    => esc_html__( 'Address URL', 'techub' ),
            'section'  => 'techub_top_header_section',
            'default'  => '#',
            'priority' => 10,
        ]
    );

    // Email ID
    new \Kirki\Field\Text(
        [
            'settings' => 'techub_top_header_emailID',
            'label'    => esc_html__( 'Email ID', 'techub' ),
            'default'  => esc_html__( 'techubinfo@mail.com' ),
            'section'  => 'techub_top_header_section',
            'priority' => 10,
        ]
    );

}
techub_header_top_section();


// Main Header section
function techub_header_section(){

    //Main Header Section
    new \Kirki\Section(
        'techub_header_section',
        [
            'title'       => esc_html__( 'Main Header', 'techub' ),
            'panel'       => 'techub_options',
            'priority'    => 160,
        ]
    );

    /* 
     Main header logo section START code 
    */

    //Logo Sections
    new \Kirki\Section(
        'techub_site_logo_section',
        [
            'title'       => esc_html__( 'Site Logo', 'techub' ),
            'panel'       => 'techub_options',
            'section'     => 'techub_header_section',
            'priority'    => 160,
        ]
    );

    // Site Logo
    new \Kirki\Field\Image(
        [
            'settings'    => 'site_logo',
            'label'       => esc_html__( 'Site Logo', 'techub' ),
            'description' => esc_html__( 'Suggested image dimensions: 350 × 100 pixels.', 'techub' ),
            'section'     => 'techub_site_logo_section',
            'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
        ]
    );

    // demo
    new \Kirki\Field\Text(
        [
            'settings' => 'demo_text',
            'label'    => esc_html__( 'Demo text', 'techub' ),
            'default'  => esc_html__( '#' ),
            'section'  => 'techub_header_section',
            'priority' => 10,
        ]
    );

    /* 
     Main header BUTTON section Start 
    */

    // Header Button
    new \Kirki\Section(
        'techub_button_section',
        [
            'title'       => esc_html__( 'Header Button', 'techub' ),
            'panel'       => 'techub_options',
            'section'     => 'techub_header_section',
            'priority'    => 160,
        ]
    );

    // Button Switch
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'button_switch',
            'label'       => esc_html__( 'Button Switch', 'techub' ),
            'description' => esc_html__( 'Button switch control', 'techub' ),
            'section'     => 'techub_button_section',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'techub' ),
                'off' => esc_html__( 'Disable', 'techub' ),
            ],
        ]
    );

    // Button Text
    new \Kirki\Field\Text(
        [
            'settings' => 'button_text',
            'label'    => esc_html__( 'Button Text', 'techub' ),
            'default'  => esc_html__( 'Get a Quete' ),
            'section'  => 'techub_button_section',
            'priority' => 10,
        ]
    );

    // Button URL
    new \Kirki\Field\Text(
        [
            'settings' => 'button_url',
            'label'    => esc_html__( 'Button URL', 'techub' ),
            'default'  => esc_html__( '#' ),
            'section'  => 'techub_button_section',
            'priority' => 10,
        ]
    );
}
techub_header_section();


// Techub social section
function techub_social_section(){

    // Section
    new \Kirki\Section(
        'techub_social_section',
        [
            'title'       => esc_html__( 'Techub Social', 'techub' ),
            'panel'       => 'techub_options',
            'priority'    => 160,
        ]
    );

    // Facebook URL
    new \Kirki\Field\Text(
        [
            'settings' => 'facebook_url',
            'label'    => esc_html__( 'Facebook URL', 'techub' ),
            'default'  => esc_html__( '#' ),
            'section'  => 'techub_social_section',
            'priority' => 10,
        ]
    );

    // LinkedIn URL
    new \Kirki\Field\Text(
        [
            'settings' => 'linkedin_url',
            'label'    => esc_html__( 'LinkedIn URL', 'techub' ),
            'default'  => esc_html__( '#' ),
            'section'  => 'techub_social_section',
            'priority' => 10,
        ]
    );

    // Twitter URL
    new \Kirki\Field\Text(
        [
            'settings' => 'twitter_url',
            'label'    => esc_html__( 'Twitter URL', 'techub' ),
            'default'  => esc_html__( '#' ),
            'section'  => 'techub_social_section',
            'priority' => 10,
        ]
    );

    // Instagram URL
    new \Kirki\Field\Text(
        [
            'settings' => 'instagram_url',
            'label'    => esc_html__( 'Instagram URL', 'techub' ),
            'default'  => esc_html__( '#' ),
            'section'  => 'techub_social_section',
            'priority' => 10,
        ]
    );

    // Pinterest URL
    new \Kirki\Field\Text(
        [
            'settings' => 'pinterest_url',
            'label'    => esc_html__( 'Pinterest URL', 'techub' ),
            'default'  => esc_html__( '#' ),
            'section'  => 'techub_social_section',
            'priority' => 10,
        ]
    );

    // Tiktok URL
    new \Kirki\Field\Text(
        [
            'settings' => 'tiktok_url',
            'label'    => esc_html__( 'Tiktok URL', 'techub' ),
            'default'  => esc_html__( '#' ),
            'section'  => 'techub_social_section',
            'priority' => 10,
        ]
    );

    // YouTube URL
    new \Kirki\Field\Text(
        [
            'settings' => 'youtube_url',
            'label'    => esc_html__( 'YouTube URL', 'techub' ),
            'default'  => esc_html__( '#' ),
            'section'  => 'techub_social_section',
            'priority' => 10,
        ]
    );
}
techub_social_section();


