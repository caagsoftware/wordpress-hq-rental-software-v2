<?php
    global $post;
    $error = false;
    $api_call = hq_rental_wpv2_api_get_locations_step_1();
    if(is_array($api_call) and $api_call['errors']){
        $error = true;
        $message =  $api_call['message'];
    }elseif(isset($_GET['error'])){
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
                <?php hq_rental_wpv2_get_partial('banner', $locations); ?>
                <?php if (!$error): ?>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <h2 style="font-size: 26px;color: #2a4045;line-height: 31px;text-align: left; margin-bottom:35px;" class="vc_custom_heading">RESERVE YOUR VEHICLE</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-9 col-md-9">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="stm_rent_car_form_wrapper style_2 text-left ">
                                        <div class="stm_rent_car_form">
                                            <?php hq_rental_wpv2_get_partial('step-1-form', $locations); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    SHOW ERRORS
                <?php endif; ?>
            </div>
        </div>
    <?php
    get_footer();