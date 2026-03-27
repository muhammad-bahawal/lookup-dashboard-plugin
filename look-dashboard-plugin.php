<?php
/**
 * Plugin Name: TS Look Dashboard Plugin
 * Description: A simple dashboard plugin for WordPress.
 * Version: 1.0
 * Author: M.Bahawal
 */

// Enqueue the CSS and JS files
function look_dashboard_plugin_enqueue_scripts() {
    // Enqueue style.css
    wp_enqueue_style('look-dashboard-style', plugin_dir_url(__FILE__) . 'css/style.css');

    // Enqueue script.js
    wp_enqueue_script('look-dashboard-script', plugin_dir_url(__FILE__) . 'js/script.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'look_dashboard_plugin_enqueue_scripts');

// Shortcode to display the dashboard
function look_dashboard_shortcode() {
    ob_start();
    include plugin_dir_path(__FILE__) . 'templates/main-dashboard.php';
    return ob_get_clean();
}
add_shortcode('look_dashboard', 'look_dashboard_shortcode');
