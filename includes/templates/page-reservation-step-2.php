<?php
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
            <style></style>
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
                                        <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-orderby-fm-container"><span class="select2-selection__rendered" id="select2-orderby-fm-container" title="Default sorting">Default sorting</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> <input type="hidden" name="pickup_location" value="485"><input type="hidden" name="return_same" value="on"><input type="hidden" name="pickup_date" value="2018/02/24 21:51"><input type="hidden" name="drop_location" value=""><input type="hidden" name="return_date" value="2018/02/28 21:51"><input type="hidden" name="order_old_days" value="1">
                                    </form>
                                </div>
                            </div>
                            <div class="stm_notices"></div>
                            <div class="stm_single_class_car  " id="product-141">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 first">
                                        <div class="image"> <img width="300" height="181" src="http://motors.stylemixthemes.com/rent-a-car/wp-content/uploads/sites/7/2017/01/economy-300x181.png" class="img-responsive wp-post-image" alt=""></div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 second">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="top">
                                                    <div class="heading-font">
                                                        <h3>Economy</h3>
                                                        <div class="s_title">Mini Cooper 3 or Similar</div>
                                                        <div class="infos">
                                                            <div class="single_info stm_single_info_font_stm-rental-seats"> <i class="stm-rental-seats"></i> <span>4 Seats</span></div>
                                                            <div class="single_info stm_single_info_font_stm-rental-door"> <i class="stm-rental-door"></i> <span>2 Doors</span></div>
                                                            <div class="single_info stm_single_info_font_stm-rental-ac"> <i class="stm-rental-ac"></i> <span>A/C</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="stm-more"> <a href="#"> <span>More information</span> <i class="fa fa-angle-down"></i> </a></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="stm_rent_prices">
                                                    <div class="stm_rent_price">
                                                        <div class="total heading-font"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>440</span>/Total</div>
                                                        <div class="period"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>110</span>/Day</div>
                                                        <div class="pay"> <a class="heading-font" href="http://motors.stylemixthemes.com/rent-a-car/product/economy/?add-to-cart=141&amp;product_id=141&amp;variation_id=185&amp;attribute_payment-method=Pay%20later">Pay later</a></div>
                                                    </div>
                                                    <div class="stm_rent_price">
                                                        <div class="total heading-font"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>400</span>/Total</div>
                                                        <div class="period"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>100</span>/Day</div>
                                                        <div class="pay"> <a class="heading-font" href="http://motors.stylemixthemes.com/rent-a-car/product/economy/?add-to-cart=141&amp;product_id=141&amp;variation_id=186&amp;attribute_payment-method=Pay%20now">Pay now</a></div>
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
                            <div class="stm_single_class_car  stm-disable-car" id="product-133">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 first">
                                        <div class="image"> <img width="300" height="181" src="http://motors.stylemixthemes.com/rent-a-car/wp-content/uploads/sites/7/2017/01/minivan_van-300x181.png" class="img-responsive wp-post-image" alt=""></div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 second">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="top">
                                                    <div class="heading-font">
                                                        <h3>Minivan</h3>
                                                        <div class="s_title">Volkswagen California or Similar</div>
                                                        <div class="infos">
                                                            <div class="single_info stm_single_info_font_stm-rental-seats"> <i class="stm-rental-seats"></i> <span>6 Seats</span></div>
                                                            <div class="single_info stm_single_info_font_stm-rental-bag"> <i class="stm-rental-bag"></i> <span>2 Bags</span></div>
                                                            <div class="single_info stm_single_info_font_stm-rental-door"> <i class="stm-rental-door"></i> <span>5 Doors</span></div>
                                                            <div class="single_info stm_single_info_font_stm-rental-ac"> <i class="stm-rental-ac"></i> <span>A/C</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="stm-more"> <a href="#"> <span>More information</span> <i class="fa fa-angle-down"></i> </a></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="stm_rent_prices">
                                                    <div class="stm_rent_price">
                                                        <div class="total heading-font"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4,800</span>/Total</div>
                                                        <div class="period"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>1,200</span>/Day</div>
                                                        <div class="pay"> <a class="heading-font" href="http://motors.stylemixthemes.com/rent-a-car/product/suvtrucks/?add-to-cart=133&amp;product_id=133&amp;variation_id=134&amp;attribute_payment-method=Pay%20later">Pay later</a></div>
                                                    </div>
                                                    <div class="stm_rent_price">
                                                        <div class="total heading-font"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4,720</span>/Total</div>
                                                        <div class="period"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>1,180</span>/Day</div>
                                                        <div class="pay"> <a class="heading-font" href="http://motors.stylemixthemes.com/rent-a-car/product/suvtrucks/?add-to-cart=133&amp;product_id=133&amp;variation_id=394&amp;attribute_payment-method=Pay%20now">Pay now</a></div>
                                                        <div class="stm_discount">Saves you <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>80</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="more">
                                                    <div class="lists-inline">
                                                        <ul>
                                                            <li>Auxiliary heating</li>
                                                            <li>Bluetooth</li>
                                                            <li>CD player</li>
                                                            <li>Central locking</li>
                                                        </ul>
                                                        <ul>
                                                            <li>Head-up display</li>
                                                            <li>MP3 interface</li>
                                                            <li>Navigation system</li>
                                                            <li>Panoramic roof</li>
                                                        </ul>
                                                        <ul>
                                                            <li>Alloy wheels</li>
                                                            <li>Electric side mirror</li>
                                                            <li>Sports package</li>
                                                            <li>Sports suspension</li>
                                                        </ul>
                                                        <ul>
                                                            <li>MP3 interface</li>
                                                            <li>Navigation system</li>
                                                            <li>Panoramic roof</li>
                                                            <li>Parking sensors</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="stm-enable-car-date">
                                    <h3>This Class is already booked in: <span class="yellow">24 Feb<span>,</span> 25 Feb<span>,</span> 26 Feb<span>,</span> 27 Feb<span>,</span> 28 Feb</span>.</h3>
                                </div>
                            </div>
                            <div class="stm_single_class_car  " id="product-135">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 first">
                                        <div class="image"> <img width="300" height="181" src="http://motors.stylemixthemes.com/rent-a-car/wp-content/uploads/sites/7/2017/01/speciality-300x181.png" class="img-responsive wp-post-image" alt=""></div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 second">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="top">
                                                    <div class="heading-font">
                                                        <h3>Speciality</h3>
                                                        <div class="s_title">Ferrari F12 Berlinetta or Similar</div>
                                                        <div class="infos">
                                                            <div class="single_info stm_single_info_font_stm-rental-seats"> <i class="stm-rental-seats"></i> <span>2 Seats</span></div>
                                                            <div class="single_info stm_single_info_font_stm-rental-door"> <i class="stm-rental-door"></i> <span>2 Doors</span></div>
                                                            <div class="single_info stm_single_info_font_stm-rental-ac"> <i class="stm-rental-ac"></i> <span>A/C</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="stm-more"> <a href="#"> <span>More information</span> <i class="fa fa-angle-down"></i> </a></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="stm_rent_prices">
                                                    <div class="stm_rent_price">
                                                        <div class="total heading-font"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>2,400</span>/Total</div>
                                                        <div class="period"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>600</span>/Day</div>
                                                        <div class="pay"> <a class="heading-font" href="http://motors.stylemixthemes.com/rent-a-car/product/speciality/?add-to-cart=135&amp;product_id=135&amp;variation_id=392&amp;attribute_payment-method=Pay%20later">Pay later</a></div>
                                                    </div>
                                                    <div class="stm_rent_price">
                                                        <div class="total heading-font"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>2,356</span>/Total</div>
                                                        <div class="period"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>589</span>/Day</div>
                                                        <div class="pay"> <a class="heading-font" href="http://motors.stylemixthemes.com/rent-a-car/product/speciality/?add-to-cart=135&amp;product_id=135&amp;variation_id=393&amp;attribute_payment-method=Pay%20now">Pay now</a></div>
                                                        <div class="stm_discount">Saves you <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>44</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="more">
                                                    <div class="lists-inline">
                                                        <ul>
                                                            <li>Auxiliary heating</li>
                                                            <li>Bluetooth</li>
                                                            <li>CD player</li>
                                                            <li>Central locking</li>
                                                        </ul>
                                                        <ul>
                                                            <li>Head-up display</li>
                                                            <li>MP3 interface</li>
                                                            <li>Navigation system</li>
                                                            <li>Panoramic roof</li>
                                                        </ul>
                                                        <ul>
                                                            <li>Alloy wheels</li>
                                                            <li>Electric side mirror</li>
                                                            <li>Sports package</li>
                                                            <li>Sports suspension</li>
                                                        </ul>
                                                        <ul>
                                                            <li>MP3 interface</li>
                                                            <li>Navigation system</li>
                                                            <li>Panoramic roof</li>
                                                            <li>Parking sensors</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script></script>
                        </div>
                        <div class="stm-shop-sidebar-area"></div>
                    </div>
                </div>
            </div>
</div>
<?php
    get_footer();
