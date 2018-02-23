<?php

function hq_rental_wpv2_is_coming_from_step_1()
{
    return isset($_POST['hq_rental_pick_up_location'], $_POST['hq_rental_pick_up_date_time'], $_POST['hq_rental_return_location'], $_POST['hq_rental_return_date_time']);
}