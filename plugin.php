<?php
/*
Plugin Name: Authoring Sample WordPress Plugin
Plugin URI: https://github.com/GannettDigital/authoring-story-editor-sample-wp-plugin
Description: Authoring Story Editor Sample WordPress Plugin
Version: 1.0
Author: Binita M
*/


function save_post($post_id){
    $msg = 'Saved post with id ' . $post_id;
    wp_die($msg); // This is just an example - but wp_die causes execution to stop, so the post is not really saved

}

add_action( 'save_post', 'save_post' );

