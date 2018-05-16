<?php
    use Carbon\Carbon;
    global $post;
    $date_format = get_option( HQ_RENTAL_WPV2_DATE_FORMAT );
    $confirmation_result = hq_rental_wpv2_book_confirmation($_POST);
    if(hq_rental_wpv2_is_coming_from_step_4($_POST) and $_POST['hq_comes_from_step_4'] == '1'){
        $pick_up_location_workflow = $_POST['pick_up_location_hidden'];
        $return_location_workflow = $_POST['return_location_hidden'];
        $pickup_date = Carbon::createFromFormat($date_format, $_POST['pick_up_date_time'],0);
        $return_date = Carbon::createFromFormat($date_format, $_POST['return_date_time'],0);
        $partials_data = array(
            'client'                        =>  $_SESSION['client'],
            'pick_up_location_workflow'     =>  $pick_up_location_workflow,
            'return_location_workflow'      =>  $return_location_workflow,
            'pick_up_date'                  =>  $pickup_date,
            'return_date'                   =>  $return_date,
            'charges'                       =>  $_SESSION['step_3_data'],
            'prices'                        =>  $_SESSION['prices'],
            'selected_car'                  =>  $_SESSION['selected_car'],
            'reservation'                   =>  $confirmation_result->reservation
        );
    }else{
        wp_redirect('/reservation-step-1');
        exit;
    }
    get_header();
    wp_enqueue_style('hq_rental_wpv2_styles_steps_styles');
    wp_enqueue_script('hq_rental_wpv2_app_init');
    wp_enqueue_script('hq_rental_wpv2_select2_js');
    wp_enqueue_style('hq_rental_wpv2_select2_css');
?>
    <script>
        var hqDateTimeFormatPickers = '<?php echo get_option(HQ_RENTAL_WPV2_DATE_FORMAT); ?>';
    </script>
    <div id="main">
        <div class="container stm-reservation-archive hq-rental-reservation-wrapper">
            <?php hq_rental_wpv2_get_partial('banner', $partials_data); ?>
        </div>
        <div class="stm-reservation-archive hq-rental-reservation-wrapper">
            <?php hq_rental_wpv2_get_partial('confirmation-resume', $partials_data); ?>
        </div>
    </div>
<?php
    session_destroy();
    get_footer();