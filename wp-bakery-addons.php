<?php
/*
Plugin Name: WP Bakery Addons
Description: Custom WPBakery Addon Example
Version: 1.0.0
Author: Your Name
Text Domain: wpba
Domain Path:/languages
*/

// Add custom WPBakery element
if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly.
}
// Define constants for later use
define('WPBA_VERSION', '1.0.0');
define('WPBA_FILE', __FILE__);
define('WPBA_DIR', plugin_dir_path(WPBA_FILE));
define('WPBA_URL', plugin_dir_url(WPBA_FILE));
class WPBA_Bakery_addons {


  public function __construct() {
    add_action( 'vc_before_init', [$this,'wpbakery_addon'] );
  }

function wpbakery_addon() {
    if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
        require_once WPBA_DIR .( 'widgets/class-info-box.php' ); 
        //require_once WPBA_DIR .( 'widgets/class-my-element.php' );  // Include the PHP file for the custom element
    }
}


}
new WPBA_Bakery_addons();
