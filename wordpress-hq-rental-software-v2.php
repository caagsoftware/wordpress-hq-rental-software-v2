<?php
/*
Plugin Name:  HQ Rental Wordpress Integration
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
define('HQ_RENTAL_WPV2_USER_TOKEN', 'hq_rental_wpv2_user_token');
define('HQ_RENTAL_WPV2_TENANT_TOKEN', 'hq_rental_wpv2_tenant_token');
define('HQ_RENTAL_WPV2_DATE_FORMAT', 'hq_rental_wpv2_date_format');

/*
 *  Require Files 
 */

require_once ('setup/init.php');
require_once ('assets/assets.php');
require_once ('utils/admin.php');
require_once ('admin/settings.php');

function hq_rental_wpv2_activation()
{
	//hq_rental_wpv2_init();
	update_option( HQ_RENTAL_WPV2_USER_TOKEN, '' );
	//update_option( HQ_RENTAL_WPV2_TENANT_TOKEN, '' );
	//update_option( HQ_RENTAL_WPV2_DATE_FORMAT, 'YYYY/MM/DD');
}
register_activation_hook( __FILE__ , 'hq_rental_wp_v2_activation' );


function hq_rental_wpv2_deactivation()
{
	// Do nothing
}
register_deactivation_hook(__FILE__,'caag_hq_rental_deactivation');
