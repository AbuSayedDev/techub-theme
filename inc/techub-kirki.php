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

    // Adding Sections in Kirki
    new \Kirki\Section(
        'techub_site_logo',
        [
            'title'       => esc_html__( 'Site Logo', 'kirki' ),
            'panel'       => 'techub_options',
            'priority'    => 160,
        ]
    );

    /**
     * Site Logo (saves data as URL)
     */
    new \Kirki\Field\Image(
        [
            'settings'    => 'site_logo',
            'label'       => esc_html__( 'Site Logo', 'kirki' ),
            'description' => esc_html__( 'Suggested image dimensions: 350 × 100 pixels.', 'kirki' ),
            'section'     => 'techub_site_logo',
            'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
        ]
    );
}
techub_logo_section();