<?php
    global $post;
    $error = false;
    $api_call = hq_rental_wpv2_api_get_locations_step_1();
    $_SESSION['current_step'] = 1;
    if(is_array($api_call) and $api_call['errors']){
        $error = true;
    }else if(isset($_GET['errors'])){
        if($_GET['errors']){
           $error = true;
           $errors = $_GET;
           $locations = $api_call->fleets_locations;
        }
    }else{
        $locations = $api_call->fleets_locations;
    }
    get_header();
    hq_rental_wpv2_assets();
    ?>
    <script>
        var hqDateTimeFormatPickers = '<?php echo get_option(HQ_RENTAL_WPV2_DATE_FORMAT); ?>';
    </script>
        <div id="main">
            <div class="container stm-reservation-archive hq-rental-reservation-wrapper">
                <?php hq_rental_wpv2_get_partial('banner'); ?>
            </div>
            <div class=" container stm-reservation-archive hq-rental-reservation-wrapper">
                <?php if ($error): ?>
                    <div class="woocommerce-NoticeGroup woocommerce-NoticeGroup-checkout">
                        <ul class="woocommerce-error">
                            <?php foreach($errors as $key => $value): ?>
                                <?php if($key != 'errors'): ?>
                                    <li><i class="fa fa-times"></i><span>Error</span> <strong><?php echo $value; ?></strong></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php hq_rental_wpv2_get_partial('step-1-form', $locations); ?>
            </div>
        </div>
    <?php
    get_footer();
