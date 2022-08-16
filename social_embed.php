<?php

/**
 * Plugin Name: Social Video Embed
 * Plugin URI:https://github.com/felipesantos2/social_embed
 * Description: Social video embed.
 * Version: 1.0.0
 * Author: Felipe Pinheiro
 * Author URI: https://github.com/felipesantos2
 */




    function fps_videos_post($fps_post) {
        $url_video = $fps_post;

        return $url_video;

    }
    
   add_filter('the_content', fps_videos_post() );




?>