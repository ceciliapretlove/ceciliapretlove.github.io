<?php


class CeciliaTheme_Customizer{
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customize_sections' ) );
	}
	public function register_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->about_callout_section( $wp_customize );
		$this->socials_callout_section( $wp_customize );
        $this->intro_callout_section( $wp_customize );
        $this->experience_callout_section( $wp_customize );
        $this->project_callout_section( $wp_customize );
    }
    
    /* Sanitize Inputs */
    public function sanitize_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    public function sanitize_custom_text($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }
    public function sanitize_custom_url($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }
    public function sanitize_custom_email($input) {
        return filter_var($input, FILTER_SANITIZE_EMAIL);
    }
    public function sanitize_hex_color( $color ) {
        if ( '' === $color ) {
            return '';
        }
     
        // 3 or 6 hex digits, or the empty string.
        if ( preg_match( '|^#([A_Fa_f0_9]{3}){1,2}$|', $color ) ) {
            return $color;
        }
    }
  
    /* About Section */
    private function about_callout_section( $wp_customize ) {
		// New panel for "Layout".
        $wp_customize->add_section('basic_about_callout_section', array(
            'title' => 'About',
            'priority' => 2,
            'description' => __('The about section is only displayed on the Homepage.', 'theminimalist'),
        ));
    
        $wp_customize->add_setting('basic_about_callout_display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_custom_option' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_about_callout_display_control', array(
            'label' => 'Display this section?',
            'section' => 'basic_about_callout_section',
            'settings' => 'basic_about_callout_display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));
		
        $wp_customize->add_setting('basic_about_callout_name', array(
            'default' => '',
            'sanitize_callback' =>  array( $this, 'sanitize_custom_text' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_about_name_callout_control', array(
            'label' => 'Name',
            'section' => 'basic_about_callout_section',
            'settings' => 'basic_about_callout_name',
            'type' => 'text'
        )));

        $wp_customize->add_setting('basic_about_callout_jobtitle', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_about_jobtitle_callout_control', array(
            'label' => 'Job Title',
            'section' => 'basic_about_callout_section',
            'settings' => 'basic_about_callout_jobtitle',
            'type' => 'text'
        )));

        $wp_customize->add_setting('basic_about_callout_text', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_about_callout_control', array(
            'label' => 'About Summary',
            'section' => 'basic_about_callout_section',
            'settings' => 'basic_about_callout_text',
            'type' => 'textarea'
        )));
         
       
    }

	  
    /* Socials Section */
    private function socials_callout_section( $wp_customize ) {
		// New panel for "Layout".
        $wp_customize->add_section('socials_section', array(
            'title' => 'Social Icons',
            'priority' => 3,
            'description' => __('The about section is only displayed on the Homepage.', 'theminimalist'),
        ));
    
        $wp_customize->add_setting('socials_section_display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_custom_option' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'socials_section_display_control', array(
            'label' => 'Display this section?',
            'section' => 'socials_section',
            'settings' => 'socials_section_display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));
         
		$wp_customize->add_setting('socials_section_counter', array(
            'default' => '3',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'socials_section_control', array(
            'label' => 'No. of Icons',
            'section' => 'socials_section',
            'settings' => 'socials_section_counter',
            'type' => 'number'
        )));
		
		for ( $j = 1; $j <= 3; $j++ ) {
			$wp_customize->add_setting( 'themeslug_url_setting_id'.$j,array(
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'themeslug_sanitize_url',
			) );
			
				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'themeslug_url_setting_id'.$j,array(
				'type' => 'url',
				'section' => 'socials_section', // Add a default or your own section
				'label' => __( 'Social URL #' ).$j,
				'description' => __( 'This is a custom url input.' ),
				'input_attrs' => array(
				'placeholder' => __( 'http://www.google.com' ),
				)
			)));

			$wp_customize->add_setting( 'socials_section_image'.$j,array(
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text',
			) );
			
			$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'socials_section_image'.$j,array(
				'label' => 'Social Icon #'.$j,
				'section' => 'socials_section',

			)));

			// $wp_customize->add_setting( 'socials_section_image'.$j,array(
			// 	'capability' => 'edit_theme_options',
			// 	'sanitize_callback' => 'themeslug_sanitize_url',
			// ) );
			// $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'socials_section_image_control'.$j,array(
			// 	'label' => 're5',
			// 	'section' => 'socials_section',
			// 	'settings' => 'socials_section_image',
			// 	'width' => 30,
			// 	'height' => 30,
			// )));
	}
	function themeslug_sanitize_url( $url ) {
		return esc_url_raw( $url );
	  }
    }

    /* Introduction Section */
    private function intro_callout_section( $wp_customize ) {
		// New panel for "Layout".
        $wp_customize->add_section('basic_intro_callout_section', array(
            'title' => 'Intro',
            'priority' => 3,
            'description' => __('The about section is only displayed on the Homepage.', 'theminimalist'),
        ));
    
        $wp_customize->add_setting('basic_intro_callout_display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_custom_option' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_intro_callout_display_control', array(
            'label' => 'Display this section?',
            'section' => 'basic_intro_callout_section',
            'settings' => 'basic_intro_callout_display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));
		


        $wp_customize->add_setting('basic_intro_callout_text', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_intro_callout_control', array(
            'label' => 'Intro Summary',
            'section' => 'basic_intro_callout_section',
            'settings' => 'basic_intro_callout_text',
            'type' => 'textarea'
        )));
         
       
    }

 /* Experiences Section */
    private function experience_callout_section( $wp_customize ) {
		// New panel for "Layout".
        $wp_customize->add_section('experience_section', array(
            'title' => 'Job Experience',
            'priority' => 3,
            'description' => __('The about section is only displayed on the Homepage.', 'theminimalist'),
        ));
    
        $wp_customize->add_setting('experience_section_display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_custom_option' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'experience_section_display_control',array(
            'label' => 'Display this section?',
            'section' => 'experience_section',
            'settings' => 'experience_section_display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));

        for ( $count = 1; $count <= 3; $count++ ) {

            $wp_customize->add_setting('experience_section_callout_year'.$count,array(
                'default' => '',
                'sanitize_callback' => array( $this, 'sanitize_custom_text' )
            ));
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'experience_section_callout_control_year'.$count,array(
                'label' => 'Job Experience',
                'description' => 'Year',
                'section' => 'experience_section',
                'settings' => 'experience_section_callout_year',
                'type' => 'text'
            )));
        }
        for ( $j = 1; $j <= 3; $j++ ) {
			$wp_customize->add_setting( 'experience_section_callout_year'.$j,array(
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_custom_text',
			) );
			
				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'experience_section_callout_control_year'.$j,array(
                    'label' => 'Job Experience',
                    'description' => 'Year',
                    'section' => 'experience_section',
                    'settings' => 'experience_section_callout_year',
                    'type' => 'text'
                )));

	}
        // $wp_customize->add_setting('experience_section_callout_text'.$j,array(
        //     'default' => '',
        //     'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        // ));
        // $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'experience_section_callout_control'.$j,array(
        //     'description' => 'Job Name',
        //     'section' => 'experience_section',
        //     'settings' => 'experience_section_callout_text',
        //     'type' => 'text'
        // )));

        // $wp_customize->add_setting('experience_section_callout_description'.$j,array(
        //     'default' => '',
        //     'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        // ));
        // $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'experience_section_callout_control_desc'.$j,array(
        //     'description' => 'Job Description',
        //     'section' => 'experience_section',
        //     'settings' => 'experience_section_callout_description',
        //     'type' => 'textarea',
        // )));


        // // Test of Dropdown Select2 Control (Multi-Select) with Option Groups
        // $wp_customize->add_setting( 'sample_dropdown_select2_control_multi'.$j,
        // array(
        //     'default' => '',
        //     'transport' => 'refresh',
        //     'sanitize_callback' => 'skyrocket_text_sanitization'
        // )
        // );
        // $wp_customize->add_control( new Skyrocket_Dropdown_Select2_Custom_Control( $wp_customize, 'sample_dropdown_select2_control_multi'.$j,
        // array(
        //     'label' => __( 'Select Programing Language', 'skyrocket' ),
        //     'description' => esc_html__( 'Multi-Select', 'skyrocket' ),
        //     'section' => 'experience_section',
        //     'input_attrs' => array(
        //     'multiselect' => true,
        //     ),
        //     'choices' => array(
        //             'Laravel' => __( 'Laravel', 'skyrocket' ),
        //             'PHP' => __( 'PHP', 'skyrocket' ),
        //             'Javascript' => __( 'Javascript', 'skyrocket' ),
        //             'Wordpress' => __( 'Wordpress', 'skyrocket' ),
        //             'API' => __( 'API', 'skyrocket' ),
        //             'Node Js' => __( 'Node Js', 'skyrocket' ),
        //             'Nuxt' => __( 'Nuxt', 'skyrocket' ),
        //             'Tailwind' => __( 'Tailwind', 'skyrocket' ),
        //             'SCSS' => __( 'SCSS', 'skyrocket' ),
        //             'jQuery' => __( 'jQuery', 'skyrocket' ),
                
        //     )
        // )
        // ) );

    }
     /* Project Section */
     private function project_callout_section( $wp_customize ) {
		// New panel for "Layout".
        $wp_customize->add_section('project_section', array(
            'title' => 'Projects',
            'priority' => 3,
            'description' => __('The about section is only displayed on the Homepage.', 'theminimalist'),
        ));
    
        $wp_customize->add_setting('project_section_display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_custom_option' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'project_section_display_control', array(
            'label' => 'Display this section?',
            'section' => 'project_section',
            'settings' => 'project_section_display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));
         	
		for ( $j = 1; $j <= 4; $j++ ) {
            $wp_customize->add_setting('job_callout_name', array(
            'default' => '',
            'sanitize_callback' =>  array( $this, 'sanitize_custom_text' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'job_name_callout_control', array(
            'label' => 'Name',
            'section' => 'job_callout_section',
            'settings' => 'job_callout_name',
            'type' => 'text'
        )));

        $wp_customize->add_setting('job_callout_jobtitle', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'job_jobtitle_callout_control', array(
            'label' => 'Job Title',
            'section' => 'job_callout_section',
            'settings' => 'job_callout_jobtitle',
            'type' => 'text'
        )));
	}
    }
}
?>