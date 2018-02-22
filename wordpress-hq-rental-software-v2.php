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
 *
 */


/*
 *
 *
 */
define('HQ_RENTAL_WPV2_BASE_FILE', __FILE__);
define('HQ_RENTAL_WPV2_BASE_DIR', dirname(HQ_RENTAL_WPV2_BASE_FILE));

/*
 *  Require Files 
 */
require_once ('assets/init.php');
require_once ('includes/admin/init.php');
require_once ('includes/api/init.php');
require_once ('includes/shortcodes/init.php');
require_once('includes/templates/init.php');
require_once ('includes/activation.php');

//Check why doesn't create options on activation
add_option(HQ_RENTAL_WPV2_USER_TOKEN, '');
add_option(HQ_RENTAL_WPV2_TENANT_TOKEN, '');

function hq_rental_wpv2_activation()
{
	hq_rental_wpv2_create_system_pages();
}
register_activation_hook( __FILE__ , 'hq_rental_wp_v2_activation' );


function hq_rental_wpv2_deactivation()
{
	// Do nothing
}
register_deactivation_hook(__FILE__,'caag_hq_rental_deactivation');