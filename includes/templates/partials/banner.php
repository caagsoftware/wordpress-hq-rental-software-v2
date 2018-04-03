<?php
    //this ccs class - > add yellow background on current step boxes
    $hq_rental_active_step = 'hq-rental-active-step';
?>
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