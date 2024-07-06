<?php 

// Adding Panels in Kirki
new \Kirki\Panel(
	'techub_options',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Techub Options', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

// techub logo section
function techub_logo_section(){

    //Sections
    new \Kirki\Section(
        'techub_site_logo_section',
        [
            'title'       => esc_html__( 'Site Logo', 'kirki' ),
            'panel'       => 'techub_options',
            'priority'    => 160,
        ]
    );

    // Site Logo
    new \Kirki\Field\Image(
        [
            'settings'    => 'site_logo',
            'label'       => esc_html__( 'Site Logo', 'kirki' ),
            'description' => esc_html__( 'Suggested image dimensions: 350 × 100 pixels.', 'kirki' ),
            'section'     => 'techub_site_logo_section',
            'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
        ]
    );
}
techub_logo_section();


// techub top header section
function techub_top_header_info_section(){

    // Section
    new \Kirki\Section(
        'techub_top_header_section',
        [
            'title'       => esc_html__( 'Header Top', 'kirki' ),
            'panel'       => 'techub_options',
            'priority'    => 160,
        ]
    );

    // Switch
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'techub_top_header_switch',
            'label'       => esc_html__( 'Header top switch', 'kirki' ),
            'description' => esc_html__( 'Header top switch control', 'kirki' ),
            'section'     => 'techub_top_header_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kirki' ),
                'off' => esc_html__( 'Disable', 'kirki' ),
            ],
        ]
    );

    // Address text
    new \Kirki\Field\Text(
        [
            'settings' => 'techub_top_header_address',
            'label'    => esc_html__( 'Address Text', 'kirki' ),
            'default'  => esc_html__( 'Manchester 21, Zurich, CH', 'kirki' ),
            'section'  => 'techub_top_header_section',
            'priority' => 10,
        ]
    );

    // Address URL
    new \Kirki\Field\URL(
        [
            'settings' => 'techub_top_header_address_url',
            'label'    => esc_html__( 'Address URL', 'kirki' ),
            'section'  => 'techub_top_header_section',
            'default'  => '#',
            'priority' => 10,
        ]
    );

    // Email ID
    new \Kirki\Field\Text(
        [
            'settings' => 'techub_top_header_emailID',
            'label'    => esc_html__( 'Email ID', 'kirki' ),
            'default'  => esc_html__( 'techubinfo@mail.com' ),
            'section'  => 'techub_top_header_section',
            'priority' => 10,
        ]
    );

}

techub_top_header_info_section();