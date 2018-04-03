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
               var_dump($_GET);
               die();
        }
    }else{
        $locations = $api_call->fleets_locations;
    }
    get_header();
    hq_rental_wpv2_assets();
    ?>
    <?php if (!$error): ?>
        <div id="main">
            <div class="container stm-reservation-archive hq-rental-reservation-wrapper">
                <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding" style="position: relative; left: -221.5px; box-sizing: border-box; width: 1583px;">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class=" vc_custom_1485249035889">
                                    <div class="stm-fullwidth-with-parallax-bg" style=" background-image: url(<?php echo get_the_post_thumbnail_url($post->ID); ?>); ">
                                        <div class="container">
                                            <div class="stm_wizard_title heading-font">Reservation</div>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="stm_nav_wizard_step stm_nav_wizard_step_1">
                                                        <div class="inner  current">
                                                            <a class="top heading-font">
                                                                <div class="number"> <span>1</span></div>
                                                                <label>Your Itinerary</label>
                                                            </a>
                                                            <div class="hq-rental-non-active-step">
                                                                <div class="first">
                                                                    <h5>Pick up</h5>
                                                                    <div class="stm_filled_pickup_location">--</div>
                                                                    <div class="stm_filled_pickup_date">--</div>
                                                                </div>
                                                                <div class="second">
                                                                    <h5 class="second">Drop off</h5>
                                                                    <div class="stm_filled_return_location">--</div>
                                                                    <div class="stm_filled_return_date">--</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="stm_nav_wizard_step stm_nav_wizard_step_2">
                                                        <div class="inner ">
                                                            <a class="top heading-font">
                                                                <div class="number"> <span>2</span></div>
                                                                <label>Select Vehicle/Add-ons</label>
                                                            </a>
                                                            <div class="content">
                                                                <div class="first">
                                                                    <h5>Type</h5>
                                                                    <div>--</div>
                                                                </div>
                                                                <div class="second">
                                                                    <h5>Addons</h5>
                                                                    <div>--</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="stm_nav_wizard_step stm_nav_wizard_step_3">
                                                        <div class="inner ">
                                                            <a class="top heading-font">
                                                                <div class="number"> <span>3</span></div>
                                                                <label>Reserve Your Vehicle</label>
                                                            </a>
                                                            <div class="content">
                                                                <div class="first">
                                                                    <h5>Your information</h5>
                                                                    <div>--</div>
                                                                </div>
                                                                <div class="second">
                                                                    <h5>Payment information</h5>
                                                                    <div>--</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width"></div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <h2 style="font-size: 26px;color: #2a4045;line-height: 31px;text-align: left; margin-bottom:35px;" class="vc_custom_heading vc_custom_1485249076121">RESERVE YOUR VEHICLE</h2>
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
                                        <form action="/reservation-step-2" method="post">
                                            <input type="hidden" name="brand_id" value="<?php echo $locations[0]->brand_id; ?>">
                                            <h4>Pick Up</h4>
                                            <div class="stm_rent_form_fields">
                                                <h4 class="stm_form_title">Place to pick up the Car*</h4>
                                                <div class="stm_pickup_location">
                                                    <i class="stm-service-icon-pin"></i>
                                                    <select id="pick_up_location" name="pick_up_location" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true" required placeholder="Choose Location">
                                                        <?php foreach ($locations as $location): ?>
                                                            <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <label>
                                                    <div class=""><span class="checked"><input type="checkbox" id="return_same_location" name="return_same" checked="">Return to the same location</span></div>

                                                </label>
                                                <div class="stm_date_time_input">
                                                    <h4 class="stm_form_title">Pick-up Date/Time*</h4>
                                                    <div class="stm_date_input"> <input type="text" id="hq-rental-pick-up-date-time" value="" class="stm-date-timepicker-start" name="pick_up_date_time" placeholder="Pickup Date" required readonly=""> <i class="stm-icon-date"></i></div>
                                                </div>
                                            </div>
                                            <h4>Return</h4>
                                            <div class="stm_rent_form_fields stm_rent_form_fields-drop">
                                                <div class="stm_same_return ">
                                                    <h4 class="stm_form_title">Place to drop the Car*</h4>
                                                    <div class="stm_pickup_location stm_drop_location">
                                                        <i class="stm-service-icon-pin"></i>
                                                        <select id="return_location" name="return_location" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                            <?php foreach ($locations as $location): ?>
                                                                <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="stm_date_time_input">
                                                    <h4 class="stm_form_title">Drop Date/Time*</h4>
                                                    <div class="stm_date_input"> <input type="text" class="stm-date-timepicker-end" id="hq-rental-return-date-time" name="return_date_time" value="" placeholder="Return Date" required="" readonly=""> <i class="stm-icon-date"></i></div>
                                                </div>
                                            </div>
                                            <button type="submit">Continue Reservation</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    <?php else: ?>
    <div id="main">
        <div class="container stm-reservation-archive hq-rental-reservation-wrapper">
            <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding" style="position: relative; left: -221.5px; box-sizing: border-box; width: 1583px;">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class=" vc_custom_1485249035889">
                                <div class="stm-fullwidth-with-parallax-bg" style=" background-image: url(<?php echo get_the_post_thumbnail_url($post->ID); ?>); ">
                                    <div class="container">
                                        <div class="stm_wizard_title heading-font">Reservation</div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="stm_nav_wizard_step stm_nav_wizard_step_1">
                                                    <div class="inner  current">
                                                        <a href="http://motors.stylemixthemes.com/rent-a-car/date-reservation/" class="top heading-font">
                                                            <div class="number"> <span>1</span></div>
                                                            <label>Your Itinerary</label>
                                                        </a>
                                                        <div class="hq-rental-non-active-step">
                                                            <div class="first">
                                                                <h5>Pick up</h5>
                                                                <div class="stm_filled_pickup_location">--</div>
                                                                <div class="stm_filled_pickup_date">--</div>
                                                            </div>
                                                            <div class="second">
                                                                <h5 class="second">Drop off</h5>
                                                                <div class="stm_filled_return_location">--</div>
                                                                <div class="stm_filled_return_date">--</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="stm_nav_wizard_step stm_nav_wizard_step_2">
                                                    <div class="inner ">
                                                        <a href="http://motors.stylemixthemes.com/rent-a-car/reservation/" class="top heading-font">
                                                            <div class="number"> <span>2</span></div>
                                                            <label>Select Vehicle/Add-ons</label>
                                                        </a>
                                                        <div class="content">
                                                            <div class="first">
                                                                <h5>Type</h5>
                                                                <div>--</div>
                                                            </div>
                                                            <div class="second">
                                                                <h5>Addons</h5>
                                                                <div>--</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="stm_nav_wizard_step stm_nav_wizard_step_3">
                                                    <div class="inner ">
                                                        <a href="http://motors.stylemixthemes.com/rent-a-car/checkout/" class="top heading-font">
                                                            <div class="number"> <span>3</span></div>
                                                            <label>Reserve Your Vehicle</label>
                                                        </a>
                                                        <div class="content">
                                                            <div class="first">
                                                                <h5>Your information</h5>
                                                                <div>--</div>
                                                            </div>
                                                            <div class="second">
                                                                <h5>Payment information</h5>
                                                                <div> Estimated Total - $0</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width"></div>
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <h2 style="font-size: 26px;color: #2a4045;line-height: 31px;text-align: left; margin-bottom:35px;" class="vc_custom_heading vc_custom_1485249076121">IT WAS A PROBLEM LOADING THE PAGE CONTENT. PLEASE TRY AGAIN....</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php
    get_footer();