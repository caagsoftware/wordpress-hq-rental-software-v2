<?php

function hq_rental_wpv2_assets_registration()
{
    wp_register_style('hq_rental_wpv2_styles_steps_styles', plugins_url( 'wordpress-hq-rental-software-v2/assets/css/hq-rental-steps.css?version=0.0.6' ), array(), '0.0.6' );
	wp_register_style('hq_rental_wpv2_styles_settings_page', plugins_url( 'wordpress-hq-rental-software-v2/assets/css/hq-rental-wpv2.css' ) );
    wp_register_style('hq_rental_wpv2_styles_availability_page', plugins_url( 'wordpress-hq-rental-software-v2/assets/css/hq-wp-v2-availability.css' ) );
    wp_register_style('hq_rental_wpv2_select2_css', plugins_url( 'wordpress-hq-rental-software-v2/assets/css/select2.min..css' ) );
    wp_register_script('hq_rental_wpv2_app_init', plugins_url('wordpress-hq-rental-software-v2/assets/js/hq-rental-app.js'), array('jquery'), '0.1.0', true);
    wp_register_script('hq_rental_wpv2_select2_js', plugins_url('wordpress-hq-rental-software-v2/assets/js/select2.full.min.js'), array('jquery'));
}
add_action('wp_enqueue_scripts', 'hq_rental_wpv2_assets_registration');


function hq_rental_wpv2_assets()
{
    wp_register_style('hq_rental_wpv2_styles_steps_styles', plugins_url( 'wordpress-hq-rental-software-v2/assets/css/hq-rental-steps.css?version=0.0.6' ), array(), '0.0.6' );
    wp_register_style('hq_rental_wpv2_styles_settings_page', plugins_url( 'wordpress-hq-rental-software-v2/assets/css/hq-rental-wpv2.css' ) );
    wp_register_style('hq_rental_wpv2_styles_availability_page', plugins_url( 'wordpress-hq-rental-software-v2/assets/css/hq-wp-v2-availability.css' ) );
    wp_register_script('hq_rental_wpv2_app_init', plugins_url('wordpress-hq-rental-software-v2/assets/js/hq-rental-app.js?version=0.0.2'), array('jquery'), '0.0.2', true);
    wp_register_script('hq_rental_wpv2_moment', plugins_url('wordpress-hq-rental-software-v2/assets/js/moment.js?version=0.0.2'), array('jquery'), '0.0.2', true);
    wp_enqueue_script('hq_rental_wpv2_moment');
    wp_enqueue_style('hq_rental_wpv2_styles_steps_styles');
    wp_enqueue_script('hq_rental_wpv2_app_init');
}