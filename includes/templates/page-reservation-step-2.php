<?php
    use Carbon\Carbon;
    $api_call_errors = false;
    $date_format = get_option( HQ_RENTAL_WPV2_DATE_FORMAT );
    $_SESSION['current_step'] = 2;
    if(hq_rental_wpv2_is_coming_from_step_1($_POST)){
        $api_call = hq_rental_wpv2_get_availability_step_2($_POST);
        $pick_up_location_workflow = $_POST['pick_up_location_hidden'];
        $return_location_workflow = $_POST['return_location_hidden'];
        if($api_call->success){
            $cars_availability = hq_rental_wpv2_get_availability_step_2($_POST)->applicable_classes;
            $hidden_inputs = hq_rental_wpv2_inputs_from_last_step($_POST);
            $pickup_date = Carbon::createFromFormat($date_format, $_POST['pick_up_date_time'], 0);
            $return_date = Carbon::createFromFormat($date_format, $_POST['return_date_time'], 0);
            $last_step_data = $_POST;
            $partials_data = array(
                    'cars'                              =>  $cars_availability,
                    'hidden_inputs'                     =>  $hidden_inputs,
                    'last_step_data'                    =>  $last_step_data,
                    'pick_up_location_workflow'         =>  $pick_up_location_workflow,
                    'return_location_workflow'          =>  $return_location_workflow,
                    'pick_up_date'                      =>  $pickup_date,
                    'return_date'                       =>  $return_date
            );

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
        <script>
            var hqDateTimeFormatPickers = '<?php echo get_option(HQ_RENTAL_WPV2_DATE_FORMAT); ?>';
        </script>
        <?php if(!$api_call_errors): ?>
            <div id="main">
                <div class="container stm-reservation-archive hq-rental-reservation-wrapper">
                    <?php hq_rental_wpv2_get_partial('banner', $partials_data); ?>
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
