<?php
/**
 * Capture Lite Theme Customizer
 *
 * @package Capture Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function capture_lite_customize_register( $wp_customize ) {
	
function capture_lite_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
	
	$wp_customize->get_setting( 'blogname' )->capture_lite         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->capture_lite  = 'postMessage';
		
	$wp_customize->add_setting('color_scheme', array(
		'default' => '#d83f87',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => __('Color Scheme','capture-lite'),
			'description'	=> __('Select color from here.','capture-lite'),
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);
	
	$wp_customize->add_setting('topbar-color', array(
		'default' => '#d83f87',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'topbar-color',array(
			'description'	=> __('Select background color for topbar.','capture-lite'),
			'section' => 'colors',
			'settings' => 'topbar-color'
		))
	);
	
	$wp_customize->add_setting('headerbg-color', array(
		'default' => '#2a1b3d',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'headerbg-color',array(
			'description'	=> __('Select background color for header.','capture-lite'),
			'section' => 'colors',
			'settings' => 'headerbg-color'
		))
	);
	
	$wp_customize->add_setting('nav-color', array(
		'default' => '#ffffff',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'nav-color',array(
			'description'	=> __('Select color for navigation.','capture-lite'),
			'section' => 'colors',
			'settings' => 'nav-color'
		))
	);
	
	$wp_customize->add_setting('footer-color', array(
		'default' => '#241437',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'footer-color',array(
			'description'	=> __('Select background color for footer.','capture-lite'),
			'section' => 'colors',
			'settings' => 'footer-color'
		))
	);
	
	// Slider Section Start		
	$wp_customize->add_section(
        'slider_section',
        array(
            'title' => __('Slider Settings', 'capture-lite'),
            'priority' => null,
			'description'	=> __('Recommended image size (1420x567). Slider will work only when you select the static front page.','capture-lite'),	
        )
    );
	
	$wp_customize->add_setting('page-setting7',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting7',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide one:','capture-lite'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting8',array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting8',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide two:','capture-lite'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting9',array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting9',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide three:','capture-lite'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('slide_text',array(
		'default'	=> __('Read More','capture-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('slide_text',array(
		'label'	=> __('Add slider link button text.','capture-lite'),
		'section'	=> 'slider_section',
		'setting'	=> 'slide_text',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('hide_slider',array(
			'default' => true,
			'sanitize_callback' => 'capture_lite_sanitize_checkbox',
			'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'hide_slider', array(
		   'settings' => 'hide_slider',
    	   'section'   => 'slider_section',
    	   'label'     => __('Check this to hide slider.','capture-lite'),
    	   'type'      => 'checkbox'
     ));	
	
	// Slider Section End
	
	// Homepage Section Start		
	$wp_customize->add_section(
        'homepage_section',
        array(
            'title' => __('Homepage Services', 'capture-lite'),
            'priority' => null,
			'description'	=> __('Select pages for homepage services. This section will be displayed only when you select the static front page.','capture-lite'),	
        )
    );	
	
	$wp_customize->add_setting('page-setting1',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting1',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for first Homepage box','capture-lite'),
			'section'	=> 'homepage_section'
	));
	
	$wp_customize->add_setting('page-setting2',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting2',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for second Homepage box','capture-lite'),
			'section'	=> 'homepage_section'
	));
	
	$wp_customize->add_setting('page-setting3',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting3',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for third Homepage box','capture-lite'),
			'section'	=> 'homepage_section'
	));
	
	$wp_customize->add_setting('page-setting4',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting4',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for fourth Homepage box','capture-lite'),
			'section'	=> 'homepage_section'
	));

	
	$wp_customize->add_setting('hide_section',array(
			'default' => true,
			'sanitize_callback' => 'capture_lite_sanitize_checkbox',
			'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'hide_section', array(
		   'settings' => 'hide_section',
    	   'section'   => 'homepage_section',
    	   'label'     => __('Check this to hide section.','capture-lite'),
    	   'type'      => 'checkbox'
     ));
	 
// Contact Section

	$wp_customize->add_section(
        'contact_section',
        array(
            'title' => __('Top Header', 'capture-lite'),
            'priority' => null,
			'description'	=> __('Add your top header info here.','capture-lite'),	
        )
    );
	
	$wp_customize->add_setting('address',array(
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('address',array(
			'type'	=> 'text',
			'label'	=> __('Add location here.','capture-lite'),
			'section'	=> 'contact_section'
	));
	
	$wp_customize->add_setting('email-txt',array(
			'sanitize_callback'	=> 'sanitize_email'
	));
	
	$wp_customize->add_control('email-txt',array(
			'type'	=> 'text',
			'label'	=> __('Add email here.','capture-lite'),
			'section'	=> 'contact_section'
	));
	
	$wp_customize->add_setting('phone-txt',array(
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('phone-txt',array(
			'type'	=> 'text',
			'label'	=> __('Add phone here.','capture-lite'),
			'section'	=> 'contact_section'
	));
	
}
add_action( 'customize_register', 'capture_lite_customize_register' );	

function capture_lite_css(){
		?>
        <style> 
				.tm_client strong,
				.postmeta a:hover,
				#sidebar ul li a:hover,
				.blog-post h3.entry-title,
				a.blog-more:hover,
				#commentform input#submit,
				input.search-submit,
				.nivo-controlNav a.active,
				.blog-date .date,
				a.read-more,
				.section-box .sec-left a,
				.sitenav ul li a:hover{
					color:<?php echo esc_attr(get_theme_mod('color_scheme','#d83f87')); ?>;
				}
				h3.widget-title,
				.nav-links .current,
				.nav-links a:hover,
				p.form-submit input[type="submit"],
				.home-content a,
				#slider .top-bar a.slide-button{
					background-color:<?php echo esc_attr(get_theme_mod('color_scheme','#d83f87')); ?>;
				}
				.top-header{
					background-color:<?php echo esc_attr(get_theme_mod('topbar-color','#d83f87;')); ?>;
				}
				#header,
				.sitenav ul li.menu-item-has-children:hover > ul,
				.sitenav ul li.menu-item-has-children:focus > ul,
				.sitenav ul li.menu-item-has-children.focus > ul{
					background-color:<?php echo esc_attr(get_theme_mod('headerbg-color','#2a1b3d')); ?>;
				}
				.sitenav ul li a{
					color:<?php echo esc_attr(get_theme_mod('nav-color','#ffffff')); ?>;
				}
				.copyright-wrapper{
					background-color:<?php echo esc_attr(get_theme_mod('footer-color','#241437')); ?>;
				}
				
		</style>
	<?php }
add_action('wp_head','capture_lite_css');

function capture_lite_customize_preview_js() {
	wp_enqueue_script( 'capture-lite-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'capture_lite_customize_preview_js' );