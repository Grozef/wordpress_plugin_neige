<?php

function load_style_and_script() {
    wp_enqueue_style('style.css', './wordpress/wp-content/themes/newTheme/style.css', '', 1.0, '' );
}; 
add_action('wp_enqueue_scripts', 'load_style_and_script');