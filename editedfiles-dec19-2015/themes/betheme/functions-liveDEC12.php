<?php
/**
 * Theme Functions
 *
 * @package Betheme
 * @author Muffin group
 * @link http://muffingroup.com
 */


define( 'THEME_DIR', get_template_directory() );
define( 'THEME_URI', get_template_directory_uri() );

define( 'THEME_NAME', 'betheme' );
define( 'THEME_VERSION', '10.3.1' );

define( 'LIBS_DIR', THEME_DIR. '/functions' );
define( 'LIBS_URI', THEME_URI. '/functions' );
define( 'LANG_DIR', THEME_DIR. '/languages' );

add_filter( 'widget_text', 'do_shortcode' );


/* ---------------------------------------------------------------------------
 * White Label
 * IMPORTANT: We recommend the use of Child Theme to change this
 * --------------------------------------------------------------------------- */
defined( 'WHITE_LABEL' ) or define( 'WHITE_LABEL', false );


/* ---------------------------------------------------------------------------
 * Loads Theme Textdomain
 * --------------------------------------------------------------------------- */
load_theme_textdomain( 'betheme',  LANG_DIR );
load_theme_textdomain( 'mfn-opts', LANG_DIR );


/* ---------------------------------------------------------------------------
 * Loads the Options Panel
 * --------------------------------------------------------------------------- */
if( ! function_exists( 'mfn_admin_scripts' ) )
{
	function mfn_admin_scripts() {
		wp_enqueue_script( 'jquery-ui-sortable' );
	}
}   
add_action( 'wp_enqueue_scripts', 'mfn_admin_scripts' );
add_action( 'admin_enqueue_scripts', 'mfn_admin_scripts' );
	
require( THEME_DIR .'/muffin-options/theme-options.php' );

$theme_disable = mfn_opts_get( 'theme-disable' );


/* ---------------------------------------------------------------------------
 * Loads Theme Functions
 * --------------------------------------------------------------------------- */

// Functions --------------------------------------------------------------------
require_once( LIBS_DIR .'/theme-functions.php' );

// Header -----------------------------------------------------------------------
require_once( LIBS_DIR .'/theme-head.php' );

// Menu -------------------------------------------------------------------------
require_once( LIBS_DIR .'/theme-menu.php' );
if( ! isset( $theme_disable['mega-menu'] ) ){
	require_once( LIBS_DIR .'/theme-mega-menu.php' );
}

// Meta box ---------------------------------------------------------------------

require_once( LIBS_DIR .'/builder/back.php' );
require_once( LIBS_DIR .'/builder/front.php' );

// Custom post types ------------------------------------------------------------
$post_types_disable = mfn_opts_get( 'post-type-disable' );

if( ! isset( $post_types_disable['client'] ) ){
	require_once( LIBS_DIR .'/meta-client.php' );
}
if( ! isset( $post_types_disable['offer'] ) ){
	require_once( LIBS_DIR .'/meta-offer.php' );
}
if( ! isset( $post_types_disable['portfolio'] ) ){
	require_once( LIBS_DIR .'/meta-portfolio.php' );
}
if( ! isset( $post_types_disable['slide'] ) ){
	require_once( LIBS_DIR .'/meta-slide.php' );
}
if( ! isset( $post_types_disable['testimonial'] ) ){
	require_once( LIBS_DIR .'/meta-testimonial.php' );
}

if( ! isset( $post_types_disable['layout'] ) ){
	require_once( LIBS_DIR .'/meta-layout.php' );
}
if( ! isset( $post_types_disable['template'] ) ){
	require_once( LIBS_DIR .'/meta-template.php' );
}

require_once( LIBS_DIR .'/meta-page.php' );
require_once( LIBS_DIR .'/meta-post.php' );

// Content ----------------------------------------------------------------------
require_once( THEME_DIR .'/includes/content-post.php' );
require_once( THEME_DIR .'/includes/content-portfolio.php' );

// Shortcodes -------------------------------------------------------------------
require_once( LIBS_DIR .'/theme-shortcodes.php' );

// Hooks ------------------------------------------------------------------------
require_once( LIBS_DIR .'/theme-hooks.php' );

// Widgets ----------------------------------------------------------------------
require_once( LIBS_DIR .'/widget-functions.php' );

require_once( LIBS_DIR .'/widget-flickr.php' );
require_once( LIBS_DIR .'/widget-login.php' );
require_once( LIBS_DIR .'/widget-menu.php' );
require_once( LIBS_DIR .'/widget-recent-comments.php' );
require_once( LIBS_DIR .'/widget-recent-posts.php' );
require_once( LIBS_DIR .'/widget-tag-cloud.php' );

// TinyMCE ----------------------------------------------------------------------
require_once( LIBS_DIR .'/tinymce/tinymce.php' );

// Plugins ---------------------------------------------------------------------- 
if( ! isset( $theme_disable['demo-data'] ) ){
	require_once( LIBS_DIR .'/importer/import.php' );
}

require_once( LIBS_DIR .'/class-love.php' );
require_once( LIBS_DIR .'/class-tgm-plugin-activation.php' );

require_once( LIBS_DIR .'/plugins/visual-composer.php' );

// WooCommerce specified functions
if( function_exists( 'is_woocommerce' ) ){
	require_once( LIBS_DIR .'/theme-woocommerce.php' );
}

// Hide activation and update specific parts ------------------------------------

// Slider Revolution
if( ! mfn_opts_get( 'plugin-rev' ) ){
	if( function_exists( 'set_revslider_as_theme' ) ){
		set_revslider_as_theme();
	}
}

// LayerSlider
if( ! mfn_opts_get( 'plugin-layer' ) ){
	add_action('layerslider_ready', 'mfn_layerslider_overrides');
	function mfn_layerslider_overrides() {
		// Disable auto-updates
		$GLOBALS['lsAutoUpdateBox'] = false;
	}
}

// Visual Composer 
if( ! mfn_opts_get( 'plugin-visual' ) ){
	add_action( 'vc_before_init', 'mfn_vcSetAsTheme' );
	function mfn_vcSetAsTheme() {
		vc_set_as_theme();
	}
}



// Define your keys here
define( 'RECAPTCHA_SITE_KEY', '6LfakhITAAAAAFezfzI9WJnJg9VI8oH_Gph90fqC' );
define( 'RECAPTCHA_SECRET_KEY', '6LfakhITAAAAALrAoXnzOK2pykQVlsEBh40BCSJy' );
// Enqueue Google reCAPTCHA scripts
add_action( 'wp_enqueue_scripts', 'recaptcha_scripts' );
function recaptcha_scripts() {
	wp_enqueue_script( 'recaptcha', 'https://www.google.com/recaptcha/api.js' );
}
// Add reCAPTCHA to the job submission form
add_action( 'submit_job_form_company_fields_end', 'recaptcha_field' );

add_action( 'submit_resume_form_resume_fields_end', 'recaptcha_field' );
add_filter( 'submit_resume_form_validate_fields', 'validate_recaptcha_field' );

add_action( 'job_application_form_fields_end', 'recaptcha_field' );
add_filter( 'application_form_validate_fields', 'validate_recaptcha_field' );
function recaptcha_field() {
	?>
	<fieldset>
		<label>Are you human?</label>
		<div class="field">
			<div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITE_KEY; ?>"></div>
		</div>
	</fieldset>
	<?php  
}
// Validate
add_filter( 'submit_job_form_validate_fields', 'validate_recaptcha_field' );
function validate_recaptcha_field( $success ) {
	$response = wp_remote_get( add_query_arg( array(
		'secret'   => RECAPTCHA_SECRET_KEY,
		'response' => isset( $_POST['g-recaptcha-response'] ) ? $_POST['g-recaptcha-response'] : '',
		'remoteip' => isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']
	), 'https://www.google.com/recaptcha/api/siteverify' ) );
	if ( is_wp_error( $response ) || empty( $response['body'] ) || ! ( $json = json_decode( $response['body'] ) ) || ! $json->success ) {
		return new WP_Error( 'validation-error', '"Are you human" check failed. Please try again.' );
	}
	return $success;
}
function custom_submit_job_steps( $steps ) {  
	unset( $steps['preview'] );
	return $steps;
}
//add_filter( 'submit_resume_steps', 'custom_submit_job_steps' );
/**
 * Change button text (won't work until v1.16.2)
 */
function change_preview_text() {
	return 'Submit CV' ;
}
add_filter( 'submit_resume_form_submit_button_text', 'change_preview_text' );
/**
 * Since we removed the preview step and it's handler, we need to manually publish jobs
 * @param  int $resume_id
 */
function done_publish_resume( $resume_id) {
	$job = get_post( $resume_id);
	if ( in_array( $resume->post_status, array( 'preview', 'expired' ) ) ) {
		// Reset expirey
		delete_post_meta( $resume->ID, '_resume_expires' );
		// Update job listing
		$update_resume                  = array();
		$update_resume['ID']            = $resume->ID;
		$update_resume['post_status']   = get_option( 'job_manager_submission_requires_approval' ) ? 'pending' : 'publish';
		$update_resume['post_date']     = current_time( 'mysql' );
		$update_resume['post_date_gmt'] = current_time( 'mysql', 1 );
		wp_update_post( $update_resume );
	}
}
add_action( 'submit_resume_form_fields_get_resume_data', 'done_publish_resume' );