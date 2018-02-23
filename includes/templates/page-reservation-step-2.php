<?php

    if(hq_rental_wpv2_is_coming_from_step_1()){
        $cars_availability = hq_rental_wpv2_get_availability_step_2($_POST)->applicable_classes;
        $hidden_inputs = hq_rental_wpv2_inputs_from_last_step($_POST);
    }else{
        wp_redirect('/reservation-step-1');
        exit;
    }
    get_header();
    wp_enqueue_style('hq_rental_wpv2_styles_steps_styles');
    wp_enqueue_script('hq_rental_wpv2_app_init');
    global $post;
    ?>
        <div id="main">
            <div class="stm-fullwidth-with-parallax-bg" style=" background-image: url(<?php echo get_the_post_thumbnail_url($post->ID); ?>); ">
                <div class="container">
                    <div class="stm_wizard_title heading-font">Reservation</div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="stm_nav_wizard_step stm_nav_wizard_step_1">
                                <div class="inner passed">
                                    <a href="http://motors.stylemixthemes.com/rent-a-car/date-reservation/" class="top heading-font">
                                        <div class="number"> <span>1</span></div>
                                        <label>Your Itinerary</label>
                                    </a>
                                    <div class="content">
                                        <div class="first">
                                            <h5>Pick up</h5>
                                            <div class="stm_filled_pickup_location">208 Manhattan St. Downtown, FL 33823</div>
                                            <div class="stm_filled_pickup_date">2018/02/24 21:51</div>
                                        </div>
                                        <div class="second">
                                            <h5 class="second">Drop off</h5>
                                            <div class="stm_filled_return_location">208 Manhattan St. Downtown, FL 33823</div>
                                            <div class="stm_filled_return_date">2018/02/28 21:51</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="stm_nav_wizard_step stm_nav_wizard_step_2">
                                <div class="inner current">
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
            <div class="stm-reservation-archive hq-rental-reservation-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row stm_rental_archive_top">
                                <div class="col-md-7 col-sm-7">
                                    <h2 class="title">Select vehicle/add-ons</h2>
                                </div>
                                <div class="col-md-5 col-sm-5">
                                    <p class="woocommerce-result-count"> Showing all 3 results</p>
                                    <form class="woocommerce-ordering" method="get">
                                        <select name="orderby" class="orderby select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                            <option value="menu_order" selected="selected">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <?php foreach ($cars_availability as $car): ?>
                                <div>
                                    <form action="/reservation-step-3">
                                        <?php echo $hidden_inputs; ?>
                                        <input type="hidden" name="vehicle_class_id" value="<?php echo $car->rack_rate_details[0]->applicable_rate->vehicle_class_id; ?>">
                                        <div class="stm_single_class_car  " id="product-<?php echo $car->class->id; ?>">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 first">
                                                    <div class="image"> <img class="img-responsive" width="300" height="181" src="<?php echo $car->class->public_image_link; ?>" alt=""></div>
                                                </div>
                                                <div class="col-md-8 col-sm-8 second">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="top">
                                                                <div class="heading-font">
                                                                    <h3><?php echo $car->class->name; ?></h3>
                                                                    <div class="s_title"><?php echo $car->class->label_for_website->en; ?></div>
                                                                    <div class="infos">
                                                                        <!--<div class="single_info stm_single_info_font_stm-rental-seats"> <i class="stm-rental-seats"></i> <span>4 Seats</span></div>
                                                                        <div class="single_info stm_single_info_font_stm-rental-door"> <i class="stm-rental-door"></i> <span>2 Doors</span></div>
                                                                        <div class="single_info stm_single_info_font_stm-rental-ac"> <i class="stm-rental-ac"></i> <span>A/C</span></div>-->
                                                                    </div>
                                                                </div>
                                                                <!--<div class="stm-more"> <a href="#"> <span>More information</span> <i class="fa fa-angle-down"></i> </a></div>-->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="stm_rent_prices">
                                                                <div class="stm_rent_price">
                                                                    <div class="total heading-font"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?php echo $car->rack_rate_details[0]->applicable_rate->daily_rate; ?></span>/Total</div>
                                                                    <div class="period"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?php echo $car->rack_rate_details[0]->applicable_rate->daily_rate; ?></span>/Day</div>
                                                                    <div class="pay"> <button class="heading-font" style="background-color: #f0c540; box-shadow: 0 2px 0 #f0c540;" href="http://motors.stylemixthemes.com/rent-a-car/product/economy/?add-to-cart=141&amp;product_id=141&amp;variation_id=186&amp;attribute_payment-method=Pay%20now">Pay now</button></div>
                                                                    <div class="stm_discount">Saves you <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>40</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="more">
                                                                <div class="lists-inline">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae mollis velit. Nullam interdum auctor turpis, at eleifend tortor pellentesque nec. Fusce pretium nulla ut risus egestas, quis dapibus eros condimentum. Integer volutpat posuere quam vitae mollis. Proin diam sapien, luctus ut faucibus sit amet, dignissim a arcu.</p>
                                                                    <ul>
                                                                        <li>Auxiliary heating</li>
                                                                        <li>Bluetooth</li>
                                                                        <li>CD player</li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li>Head-up display</li>
                                                                        <li>MP3 interface</li>
                                                                        <li>Navigation system</li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li>Alloy wheels</li>
                                                                        <li>Electric side mirror</li>
                                                                        <li>Sports package</li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li>MP3 interface</li>
                                                                        <li>Navigation system</li>
                                                                        <li>Panoramic roof</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="stm-shop-sidebar-area"></div>
                    </div>
                </div>
            </div>
</div>
<?php
    get_footer();
