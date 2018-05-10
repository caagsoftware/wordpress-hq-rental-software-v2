<?php
    global $post;
    $error = false;
    $api_call = hq_rental_wpv2_api_get_locations_step_1();
    if(is_array($api_call) and $api_call['errors']){
        $error = true;
        $message =  $api_call['message'];
    }else if(isset($_GET['error'])){
        if($_GET['error']){
           $error = true;
        }
    }else{
        $locations = $api_call->fleets_locations;
    }
    get_header();
    hq_rental_wpv2_assets();
    ?>
        <div id="main">
            <div class="container stm-reservation-archive hq-rental-reservation-wrapper">
                <?php hq_rental_wpv2_get_partial('banner'); ?>
            </div>
            <div class=" container stm-reservation-archive hq-rental-reservation-wrapper">
                <?php if ($error): ?>
                    <p class="row">
                        <?php echo $message; ?>
                    </p>
                <?php endif; ?>
                <?php hq_rental_wpv2_get_partial('step-1-form', $locations); ?>
            </div>
        </div>
    <?php
    get_footer();
