<?php
/*
 *	Define url Request for Caag Api
 *
 */
define('HQ_RENTAL_WPV2_CHECK_AVAILABILITY_URL','https://api.caagcrm.com/api/car-rental/availability?');
define('HQ_RENTAL_WPV2_FLEETS_LOCATIONS_STEP_1_URL','https://api.caagcrm.com/api/fleets/locations');
define('HQ_RENTAL_WPV2_CHECK_AVAILABILITY_STEP_2_URL','https://api.caagcrm.com/api/car-rental/reservations/dates?');
/*
 * Components from Api Module
 */
require_once('availability.php');
require_once('api-utils.php');
require_once('steps.php');



