<?php

    //if this file is called directly, abort
    if (!defined('WPINC')) {
        die;
    }

    /**
     * Plugin Name:       Boates
     * Plugin URI:        boatinfo.com
     * Description:       Handle the basics with this plugin.
     * Version:           1.0.0
     * Requires at least: 5.2
     * Requires PHP:      7.2
     * Author:            boatinfo
     * Author URI:        https://github.com/
     * License:           GPL
     * Text-domain:       boatesSearch
     */

    if (!defined(('BOAT_PLUGIN_VERSION'))) {
        define('BOAT_PLUGIN_VERSION', '1.0.0');
    }

    if (!defined(('PROP_PLUGIN_DIR'))) {
        define('BOAT_PLUGIN_URL', plugin_dir_url(__FILE__)); // Plugin file path        
        define('BOAT_PLUGIN_DIR', plugin_dir_path( __FILE__ )); // url  
    }

    //Register/Unregister a custom boates
    require BOAT_PLUGIN_DIR . 'inc/boat_details.php';



    //Adding CSS and JS files ~~~~~~~~~~~~~~~~
    /*if (!function_exists('boat_plugin_scripts')) {
        function boat_plugin_scripts(){

            //plugin Frontend CSS
            wp_enqueue_style('googleapis', 'https://fonts.googleapis.com');
            wp_enqueue_style('fonts-gstatic', 'https://fonts.gstatic.com');
            wp_enqueue_style('work-sans', 'https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap');
            wp_enqueue_style('prop-css', BOAT_PLUGIN_URL . 'assets/css/property-style.css');

            //Plugin Frontend JS
            wp_enqueue_script('prop-js', BOAT_PLUGIN_URL . 'assets/js/property-main.js', "jquery", '1.0.0', true); // true -- add in footer section
        }
        add_action('wp_enqueue_scripts', 'boat_plugin_scripts');
    }*/



    //Activation and Deactivation Hooks~~~~~~
    register_activation_hook(__FILE__, 'register_boat_details');
    register_deactivation_hook(__FILE__, 'unregister_boat_details');
   