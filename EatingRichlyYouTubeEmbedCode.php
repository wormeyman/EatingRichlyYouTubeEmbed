<?php
/*
Plugin Name: EatingRichly YouTube Embed
Plugin URI: https://github.com/wormeyman/EatingRichlyYouTubeEmbed/
Description: Responsive YouTube Embed
Version: 1.0.1
Author: Eric Johnson
Author URI: 
License: MIT
License URI: 
*/

//Add CSS
function wptuts_styles_with_the_lot()
{
    // Register the style like this for a plugin:
    wp_register_style( 'custom-style', plugins_url( '/EatingRichlyYouTubeEmbedStyle.css', __FILE__ ), array(), '20160104', 'all' );
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'custom-style' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_styles_with_the_lot' );

//Add the tag around the video
add_filter( 'embed_oembed_html', 'custom_oembed_filter', 10, 4 ) ;

function custom_oembed_filter($html, $url, $attr, $post_ID) {
    $return = '<div class="video-container">'.$html.'</div>';
    return $return;
}
