<?php
/*
 *	Define url Request for Caag Api
 *
 */
define('HQ_RENTAL_WPV2_CHECK_AVAILABILITY_URL','https://api.caagcrm.com/api/car-rental/availability?');
define('HQ_RENTAL_WPV2_FLEETS_LOCATIONS_STEP_1_URL','https://api.caagcrm.com/api/fleets/locations');
define('HQ_RENTAL_WPV2_CHECK_AVAILABILITY_STEP_2_URL','https://api.caagcrm.com/api/car-rental/reservations/dates?');
    define('HQ_RENTAL_WPV2_ADDITIONAL_CHARGES_STEP_3_URL','https://api.caagcrm.com/api/car-rental/reservations/additional-charges');
define('HQ_RENTAL_WPV2_ADDITIONAL_CHARGES_STEP_4_URL','https://api.caagcrm.com/api/car-rental/reservations/additional-charges');
define('HQ_RENTAL_WPV2_CLIENTS_STEP_4_URL','https://api.caagcrm.com/api/car-rental/reservations/fields/customer');
define('HQ_RENTAL_WPV2_NEW_CLIENT_STEP_4','https://api.caagcrm.com/api/contacts/categories/{category_id}/contacts');
define('HQ_RENTAL_WPV2_COUNTRIES_URL','https://api.caagcrm.com/api/countries');
define('HQ_RENTAL_WPV2_CONFIRMATION_URL','https://api.caagcrm.com/api/car-rental/reservations/confirm');
/*
 * Components from Api Module
 */
require_once('availability.php');
require_once('api-utils.php');
require_once('steps.php');



