<?php

/**
 * Plugin Name: Winx Plugin
 * Description: A custom plugin for WordPress.
 * Version: 1.0.0
 * Author: Fleur
 */

add_action('wp_body_open', 'winx_plugin_test');

function winx_plugin_test() {
    echo '<p>This is a test message.</p>';
}