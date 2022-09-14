<?php

/*
 * Plugin Name: Disable update notification emails
 * Plugin URI: https://github.com/riccardodicurti/disable-update-notification-emails
 * GitHub Plugin URI: riccardodicurti/disable-update-notification-emails
 * Description: Disable all update notification emails ( core, plugin, themes ).
 * Author: Riccardo Di Curti
 * Version: 0.0.3
 * Author URI: https://riccardodicurti.it/
 **/

// Disable core update emails
add_filter( 'auto_core_update_send_email', '__return_false' );

// Disable plugin update emails
add_filter( 'auto_plugin_update_send_email', '__return_false' );

// Disable theme update emails
add_filter( 'auto_theme_update_send_email', '__return_false' );