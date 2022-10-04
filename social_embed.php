<?php

/**
 * Plugin Name: Social Video Embed
 * Plugin URI:https://github.com/felipesantos2/social_embed
 * Description: Social video embed.
 * Version: 1.0.0
 * Author: Felipe Pinheiro
 * Author URI: https://github.com/felipesantos2
 */
/* Arquivo de plug-in principal */

/* Main Plugin File */





function social_plugin_activate() {

  add_option( 'Activated_Plugin', 'social-embed' );
  /* activation code here */
}

register_activation_hook( __FILE__, 'social_plugin_activate' );

function load_plugin() {

    if ( is_admin() && get_option( 'Activated_Plugin' ) == 'social-embed' ) {

        delete_option( 'Activated_Plugin' );
    }
}

add_action( 'admin_init', 'load_plugin' );


require 'class-info.php';

$remove = new Remove_Wigets();
$remove->set_values_actions('wp_dashboard_setup');
add_action($this->hook_action, $this->name_function_remove_all_dashboard);








?>