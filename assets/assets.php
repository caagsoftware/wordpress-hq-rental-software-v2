<?php

function hq_rental_wpv2_assets_registration()
{
	wp_register_style('hq_rental_wpv2_styles_settings_page', plugins_url( 'wordpress-hq-rental-software-v2/assets/css/hq-rental-wpv2.css' ) );
}
add_action('wp_enqueue_scripts', 'hq_rental_wpv2_assets_registration', 10);