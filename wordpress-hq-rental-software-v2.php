<?php
/*
Plugin Name:  HQ Rental
Plugin URI:   https://hqrentalsoftware.com
Description:  HQ Rental Software Wordpress Integration
Version:      0.0.1
Author:       Miguel Faggioni
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  hq-rental-wp-plugin-v2
*/

/*
 * Plugin Settings Variables
 */
define('HQ_RENTAL_WPV2_USER_TOKEN','hq_rental_wpv2_user_token');
define('HQ_RENTAL_WPV2_TENANT_TOKEN','hq_rental_wpv2_tenant_token');
define('CAAG_HQ_RENTAL_DATE_FORMAT','hq_rental_wpv2_date_format');
define('HQ_RENTA_WPV2_CUSTOM_POST_TYPE','hq_rental_wpv2_forms');
define('HQ_RENTA_WPV2_API_GET_CALLS','https://api.caagcrm.com/api/fleets/brands');

function hq_rental_wpv2_activation()
{
	// In case of V1 plugin is setup load credentials
	if(){

	}
}
register_activation_hook( __FILE__ , 'hq_rental_wp_v2_activation' );


function hq_rental_wpv2_deactivation()
{
	// Do nothing
}
register_deactivation_hook(__FILE__,'caag_hq_rental_deactivation');