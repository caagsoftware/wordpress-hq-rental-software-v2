<?php
    use Carbon\Carbon;
    $api_call_errors = false;
    if(hq_rental_wpv2_is_coming_from_step_1($_POST)){
        $api_call = hq_rental_wpv2_get_availability_step_2($_POST);
        if($api_call->success){
            $cars_availability = hq_rental_wpv2_get_availability_step_2($_POST)->applicable_classes;
            $hidden_inputs = hq_rental_wpv2_inputs_from_last_step($_POST);
            $last_step_data = $_POST;
            $partials_data = array(
                    'cars'              =>  $cars_availability,
                    'hidden_inputs'     =>  $hidden_inputs,
                    'last_step_data'    =>  $last_step_data
            );
            $pickup_date = Carbon::createFromFormat('Y-m-d H:i', substr($cars_availability[0]->pick_up->date,0,  -10));
            $return_date = Carbon::createFromFormat('Y-m-d H:i', substr($cars_availability[0]->return->date, 0, -10));

        }else{
            wp_redirect('/reservation-step-1'.hq_rental_wpv2_get_query_string_from_errors((array)$api_call->errors));
            exit;
        }
    }else{
        wp_redirect('/reservation-step-1');
        exit;
    }
    get_header();
    hq_rental_wpv2_assets();
    global $post;
    ?>
        <?php if(!$api_call_errors): ?>
            <div id="main">
                <div class="container stm-reservation-archive hq-rental-reservation-wrapper">
                    <?php hq_rental_wpv2_get_partial('banner', $partials_data['last_step_data']); ?>
                </div>
                <div class="stm-reservation-archive hq-rental-reservation-wrapper">
                    <?php hq_rental_wpv2_get_partial('step-2-select-car',$partials_data) ?>
                </div>
            </div>
        <?php else: ?>
            errors
        <?php endif; ?>
    <?php
    get_footer();
