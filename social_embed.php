<?php

/**
 * Plugin Name: Social Video Embed
 * Plugin URI:https://github.com/felipesantos2/social_embed
 * Description: Social video embed.
 * Version: 1.0.0
 * Author: Felipe Pinheiro
 * Author URI: https://github.com/felipesantos2
 */



// Hook to the 'init' action, which is called after WordPress is finished loading the core code
add_action('init', 'add_Cookie');

// Set a cookie with the current time of day
function add_Cookie() {
    setcookie("last_visit_time", date("r"), time() + 60 * 60 * 24 * 30, "/");
    echo 'last_visit_time';

}



?>