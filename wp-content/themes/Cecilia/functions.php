<?php 
define('CES_THEME_DIR_URI', get_template_directory_uri());
define('CES_THEME_DIR', get_template_directory());

//Include composer
// require_once CES_THEME_DIR . '/vendor/autoloader.php';

class Cecilia_Theme{

    private static $instance = null;

    private function __construct(){

        include CES_THEME_DIR . '/includes/work_experience.php';
        include CES_THEME_DIR . '/includes/custom-controls.php';
        /* Load Customizer file. */

        add_action('wp_enqueue_scripts',[$this,'enqueue_styles']);
        add_action('wp_enqueue_scripts',[$this,'enqueue_scripts']);
    }
    public function enqueue_styles(){
        wp_enqueue_style('cecilia-theme', get_stylesheet_uri() );
    }
    public function enqueue_scripts(){
        wp_enqueue_style('cecilia-theme', get_script_uri() );
    }
    public static function get_instance(){

        if(null == self::$instance){
            self::$instance = new self;
        }
        return self::$instance;

    }
}
function asset_loader() {
    // Register.
    wp_register_style( 'Fira', THEME_DIST_URI . 'fonts/fonts.css', [],  filemtime( THEME_DIST_PATH . 'fonts/fonts.css' ) );
    // Enqueue global assets.
    wp_enqueue_style( 'Fira' );
 
 }
 

function mytheme_customize_register( $wp_customize ) {
    $wp_customize->add_panel( 'header_naviation_panel',
    array(
       'title' => __( 'Header & Navigation' ),
       'description' => esc_html__( 'Adjust your Header and Navigation sections.' ), // Include html tags such as 
  
       'priority' => 160, // Not typically needed. Default is 160
       'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
       'theme_supports' => '', // Rarely needed
       'active_callback' => '', // Rarely needed
    )
 );
 $wp_customize->add_section( 'sample_custom_controls_section',
   array(
      'title' => __( 'Sample Custom Controls' ),
      'description' => esc_html__( 'These are an example of Customizer Custom Controls.' ),
      'panel' => '', // Only needed if adding your Section to a Panel
      'priority' => 160, // Not typically needed. Default is 160
      'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
      'theme_supports' => '', // Rarely needed
      'active_callback' => '', // Rarely needed
      'description_hidden' => 'false', // Rarely needed. Default is False
   )
);
};
add_action( 'customize_register', 'mytheme_customize_register' );

Cecilia_Theme::get_instance();

require get_template_directory() . '/includes/customizer.php';
new CeciliaTheme_Customizer();

