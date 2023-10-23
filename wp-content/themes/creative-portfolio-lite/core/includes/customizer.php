<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'creative_portfolio_lite_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'creative-portfolio-lite' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'creative-portfolio-lite' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable', 'creative-portfolio-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'creative-portfolio-lite' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable', 'creative-portfolio-lite' ),
		],
	] );

	//FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'creative_portfolio_lite_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'creative-portfolio-lite' ),
	) );

	Kirki::add_section( 'creative_portfolio_lite_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'creative-portfolio-lite' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_all_headings_typography',
		'section'     => 'creative_portfolio_lite_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'creative_portfolio_lite_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'creative-portfolio-lite' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'creative-portfolio-lite' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_body_content_typography',
		'section'     => 'creative_portfolio_lite_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'creative_portfolio_lite_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'creative-portfolio-lite' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'creative-portfolio-lite' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'creative_portfolio_lite_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'creative-portfolio-lite' ),
	) );

	// Additional Settings

	Kirki::add_section( 'creative_portfolio_lite_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'creative-portfolio-lite' ),
	    'description'    => esc_html__( 'Scroll To Top', 'creative-portfolio-lite' ),
	    'panel'          => 'creative_portfolio_lite_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'creative_portfolio_lite_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset(
		[
			'settings'    => 'creative_portfolio_lite_scroll_top_position',
			'label'       => esc_html__( 'Alignment for Scroll To Top', 'creative-portfolio-lite' ),
			'section'     => 'creative_portfolio_lite_additional_settings',
			'default'     => 'Right',
			'priority'    => 10,
			'choices'     => [
				'Left'   => esc_html__( 'Left', 'creative-portfolio-lite' ),
				'Center' => esc_html__( 'Center', 'creative-portfolio-lite' ),
				'Right'  => esc_html__( 'Right', 'creative-portfolio-lite' ),
			],
		]
		);

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_creative_portfolio_lite',
		'label'       => esc_html__( 'Menus Text Transform', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'creative-portfolio-lite' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'creative-portfolio-lite' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'creative-portfolio-lite' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'creative-portfolio-lite' ),
		],
	]);

		Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'creative_portfolio_lite_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'creative_portfolio_lite_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );


	if ( class_exists("woocommerce")){

	// Woocommerce Settings

	Kirki::add_section( 'creative_portfolio_lite_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'creative-portfolio-lite' ),
			'description'    => esc_html__( 'Shop Page', 'creative-portfolio-lite' ),
			'panel'          => 'creative_portfolio_lite_panel_id',
			'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'creative_portfolio_lite_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'creative_portfolio_lite_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'creative_portfolio_lite_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
	[
		'settings' => 'creative_portfolio_lite_per_columns',
		'label'    => esc_html__( 'Product Per Row', 'creative-portfolio-lite' ),
		'section'  => 'creative_portfolio_lite_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'creative_portfolio_lite_product_per_page',
		'label'    => esc_html__( 'Product Per Page', 'creative-portfolio-lite' ),
		'section'  => 'creative_portfolio_lite_woocommerce_settings',
		'default'  => 9,
		'choices'  => [
			'min'  => 1,
			'max'  => 15,
			'step' => 1,
		],
	]
	);

}	

	// POST SECTION

	Kirki::add_section( 'creative_portfolio_lite_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'creative-portfolio-lite' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'creative-portfolio-lite' ),
	    'panel'          => 'creative_portfolio_lite_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_enable_post_heading',
		'section'     => 'creative_portfolio_lite_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable', 'creative-portfolio-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable', 'creative-portfolio-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'creative_portfolio_lite_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'creative_portfolio_lite_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

	// HEADER SECTION

	Kirki::add_section( 'creative_portfolio_lite_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'creative-portfolio-lite' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'creative-portfolio-lite' ),
	    'panel'          => 'creative_portfolio_lite_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_phone_number_heading',
		'section'     => 'creative_portfolio_lite_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'creative_portfolio_lite_header_phone_number',
		'section'  => 'creative_portfolio_lite_section_header',
		'default'  => '',
		'priority' => 10,
		'sanitize_callback' => 'creative_portfolio_lite_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_email_address_heading',
		'section'     => 'creative_portfolio_lite_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'creative_portfolio_lite_header_email_address',
		'section'  => 'creative_portfolio_lite_section_header',
		'default'  => '',
		'priority' => 10,
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_enable_hire_us',
		'section'     => 'creative_portfolio_lite_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Hire Us Button', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Button Text', 'creative-portfolio-lite' ),
		'settings' => 'creative_portfolio_lite_header_hire_us_txt',
		'section'  => 'creative_portfolio_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'label'       => esc_html__( 'Button Link', 'creative-portfolio-lite' ),
		'settings' => 'creative_portfolio_lite_header_hire_us_lnk',
		'section'  => 'creative_portfolio_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_enable_socail_link',
		'section'     => 'creative_portfolio_lite_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'creative_portfolio_lite_section_header',
		'priority'    => 11,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'creative-portfolio-lite' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'creative-portfolio-lite' ),
		'settings'     => 'creative_portfolio_lite_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'creative-portfolio-lite' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'creative-portfolio-lite' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'creative-portfolio-lite' ),
				'description' => esc_html__( 'Add the social icon url here.', 'creative-portfolio-lite' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'creative_portfolio_lite_blog_slide_section', array(
        'title'          => esc_html__( 'Slider Settings', 'creative-portfolio-lite' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'creative-portfolio-lite' ),
        'panel'          => 'creative_portfolio_lite_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_enable_heading',
		'section'     => 'creative_portfolio_lite_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable', 'creative-portfolio-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable', 'creative-portfolio-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable', 'creative-portfolio-lite' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_slider_heading',
		'section'     => 'creative_portfolio_lite_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'creative_portfolio_lite_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'creative_portfolio_lite_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'creative-portfolio-lite' ),
		'priority'    => 10,
		'choices'     => creative_portfolio_lite_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Extra Text', 'creative-portfolio-lite' ),
		'settings' => 'creative_portfolio_lite_slider_extra_text',
		'section'  => 'creative_portfolio_lite_blog_slide_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'creative_portfolio_lite_footer_enable_heading_22',
	'section'     => 'creative_portfolio_lite_blog_slide_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content Alignment', 'creative-portfolio-lite' ) . '</h3>',
	'priority'    => 10,
] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'creative_portfolio_lite_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_blog_slide_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'creative-portfolio-lite' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'creative-portfolio-lite' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'creative-portfolio-lite' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'creative-portfolio-lite' ),

		],
	] );

	//PROJECTS SECTION

	Kirki::add_section( 'creative_portfolio_lite_project_section', array(
	    'title'          => esc_html__( 'Our Project Settings', 'creative-portfolio-lite' ),
	    'description'    => esc_html__( 'Here you can add different type of project.', 'creative-portfolio-lite' ),
	    'panel'          => 'creative_portfolio_lite_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_enable_heading',
		'section'     => 'creative_portfolio_lite_project_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Project',  'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_projects_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_project_section',
		'default'     => false,
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable',  'creative-portfolio-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_projects_text_enable',
		'label'       => esc_html__( 'Project Text Enable / Disable ',  'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_project_section',
		'default'     => '1',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable',  'creative-portfolio-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_projects_heading_enable',
		'label'       => esc_html__( 'Project Heading Enable / Disable',  'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_project_section',
		'default'     => '1',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable',  'creative-portfolio-lite' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_projects_text_heading',
		'section'     => 'creative_portfolio_lite_project_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Project', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Text', 'creative-portfolio-lite' ),
		'settings' => 'creative_portfolio_lite_projects_heading_text',
		'section'  => 'creative_portfolio_lite_project_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Heading', 'creative-portfolio-lite' ),
		'settings' => 'creative_portfolio_lite_projects_heading',
		'section'  => 'creative_portfolio_lite_project_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'creative_portfolio_lite_projects_number',
		'label'       => esc_html__( 'Number of Tabs to show', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_project_section',
		'default'     => '',
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	$featured_post = get_theme_mod('creative_portfolio_lite_projects_number','');
    	for ( $j = 1; $j <= $featured_post; $j++ ) :

    	Kirki::add_field( 'theme_config_id', [
	        'type'        => 'text',
	        'settings'    => 'creative_portfolio_lite_projects_text' .$j,
	        'label'       => esc_html__( 'Tab Text ', 'creative-portfolio-lite' ).$j,
	        'section'     => 'creative_portfolio_lite_project_section',
	        'default'     => '',
	    ] );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'select',
			'settings'    => 'creative_portfolio_lite_projects_category'.$j,
			'label'       => esc_html__( 'Select the category to show project ', 'creative-portfolio-lite' ).$j,
			'section'     => 'creative_portfolio_lite_project_section',
			'default'     => '',
			'placeholder' => esc_html__( 'Select an category...', 'creative-portfolio-lite' ),
			'priority'    => 10,
			'choices'     => creative_portfolio_lite_get_categories_select(),
		] );

	endfor;

	// FOOTER SECTION

	Kirki::add_section( 'creative_portfolio_lite_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'creative-portfolio-lite' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'creative-portfolio-lite' ),
        'panel'          => 'creative_portfolio_lite_panel_id',
        'priority'       => 160,
    ) );

		Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_footer_enable_heading',
		'section'     => 'creative_portfolio_lite_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable', 'creative-portfolio-lite' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_footer_text_heading',
		'section'     => 'creative_portfolio_lite_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'creative_portfolio_lite_footer_text',
		'section'  => 'creative_portfolio_lite_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'creative_portfolio_lite_footer_text_heading_2',
	'section'     => 'creative_portfolio_lite_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'creative-portfolio-lite' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'creative_portfolio_lite_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'creative-portfolio-lite' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'creative-portfolio-lite' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'creative-portfolio-lite' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'creative-portfolio-lite' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'creative_portfolio_lite_footer_text_heading_1',
	'section'     => 'creative_portfolio_lite_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'creative-portfolio-lite' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'creative_portfolio_lite_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_footer_section',
		'default'     => '',
	] );
}
