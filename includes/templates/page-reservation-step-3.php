<?php
    use Carbon\Carbon;
    $api_call_errors = false;
    if(hq_rental_wpv2_is_coming_from_step_2($_POST)){
        $api_call = hq_rental_wpv2_get_available_charges_step_3($_POST);
        if($api_call->success){
            $additional_charges = $api_call->additional_charges;
            $prices = $api_call->price;
            $selected_car = $api_call->price->rack_rate_details[0]->vehicleClass;
            $pick_up_location_worflow = $_POST['pick_up_location_hidden'];
            $return_location_worflow = $_POST['return_location_hidden'];
            $pickup_date = Carbon::createFromFormat('Y-m-d H:i', $_POST['pick_up_date_time'],0);
            $return_date = Carbon::createFromFormat('Y-m-d H:i', $_POST['return_date_time'],0);
            $hidden_inputs = hq_rental_wpv2_inputs_from_last_step($_POST);
            $partials_data = array(
                    'charges'                       =>  $additional_charges,
                    'hidden_inputs'                 =>  $hidden_inputs,
                    'selected_car'                  =>  $selected_car,
                    'pick_up_location_worflow'      =>  $pick_up_location_worflow,
                    'return_location_worflow'       =>  $return_location_worflow,
                    'pick_up_date'                  =>  $pickup_date,
                    'return_date'                   =>  $return_date,
                    'selected_car'                  =>  $selected_car,
                    'prices'                        =>  $prices
            );
        }else{
            wp_redirect('/reservation-step-2?errors=');
            exit();
        }
    }else{
        wp_redirect('/reservation-step-1');
    }
    get_header();
    wp_enqueue_style('hq_rental_wpv2_styles_steps_styles');
    wp_enqueue_script('hq_rental_wpv2_app_init');
    global $post;
    ?>
        <div id="main">
            <div class="container stm-reservation-archive hq-rental-reservation-wrapper">
                <?php hq_rental_wpv2_get_partial('banner', $partials_data)?>
            </div>
            <div class="stm-reservation-archive hq-rental-reservation-wrapper">
                <?php hq_rental_wpv2_get_partial('step-3-additional-charges', $partials_data)?>
            </div>
        </div>
    <?php
    get_footer();