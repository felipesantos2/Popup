<?php

/**
 * Plugin Name: Your Plugin Name
 * Plugin URI: https://yourdomain.com
 * Description: Insert a brief description of what your plugin does here.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://yourdomain.com
 * License: GPL2
 */


  
function pluginprefix_setup_post_type() {
    register_post_type( 'book', ['public' => true ] ); 
} 
add_action( 'init', 'pluginprefix_setup_post_type' );
 
 
/**
 * Activate the plugin.
 */

function pluginprefix_activate() { 
   
    pluginprefix_setup_post_type(); 
    
    flush_rewrite_rules(); 
}
register_activation_hook( __FILE__, 'pluginprefix_activate' );



?>