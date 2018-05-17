<?php

define('HQ_RENTAL_WPV2_LOGO_URL',plugin_dir_url( __FILE__) . 'img/logo.jpg');
function hq_rental_wpv2_assets_registration()
{
    wp_register_style('hq_rental_wpv2_styles_steps_styles', plugin_dir_url( __FILE__) . 'css/hq-rental-steps.css?version=0.1.3', array(), '0.1.3' );
	wp_register_style('hq_rental_wpv2_styles_settings_page', plugin_dir_url( __FILE__) . 'css/hq-rental-wpv2.css' );
    wp_register_style('hq_rental_wpv2_styles_availability_page', plugin_dir_url( __FILE__) . 'css/hq-wp-v2-availability.css'  );
    wp_register_style('hq_rental_wpv2_select2_css', plugin_dir_url( __FILE__) . 'css/select2.min.css' );
    wp_register_style('hq_rental_wpv2_intl_phones_css', plugin_dir_url( __FILE__) . 'css/intlTelInput.css' );
    wp_register_script('hq_rental_wpv2_moment', plugin_dir_url( __FILE__) . 'js/moment.js', array('jquery'));
    wp_register_script('hq_rental_wpv2_app_init', plugin_dir_url( __FILE__) . 'js/hq-rental-app.js', array('jquery'), '0.2.0', true);
    wp_register_script('hq_rental_wpv2_select2_js', plugin_dir_url( __FILE__) . 'js/select2.full.min.js', array('jquery'));
    wp_register_script('hq_rental_wpv2_intl_phone_js', plugin_dir_url( __FILE__) . 'js/intlTelInput.min.js', array('jquery'));
    wp_register_script('hq_rental_wpv2_intl_phone_utils_js', plugin_dir_url( __FILE__) . 'js/utils.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'hq_rental_wpv2_assets_registration');


function hq_rental_wpv2_assets()
{
    wp_enqueue_script('hq_rental_wpv2_moment');
    wp_enqueue_style('hq_rental_wpv2_styles_steps_styles');
    wp_enqueue_script('hq_rental_wpv2_app_init');
}
