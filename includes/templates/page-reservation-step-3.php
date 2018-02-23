<?php
    if(hq_rental_wpv2_is_coming_from_step_2($_POST)){
        $additional_charges = hq_rental_wpv2_get_available_charges_step_3($_POST)->additional_charges;
        $selected_car = hq_rental_wpv2_get_available_charges_step_3($_POST)->price->rack_rate_details[0]->vehicleClass;
    }else{
        wp_redirect('/reservation-step-1');
    }
    get_header();
    wp_enqueue_style('hq_rental_wpv2_styles_steps_styles');
    wp_enqueue_script('hq_rental_wpv2_app_init');
    global $post;
    ?>
        <div id="main">
            <div class="stm-fullwidth-with-parallax-bg" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post->ID ); ?>)">
                <div class="container">
                    <div class="stm_wizard_title heading-font"> Reservation</div>
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
                                            <h5>Economy Type</h5>
                                            <div>Mini Cooper 3 or Similar</div>
                                        </div>
                                        <div class="second">
                                            <a class="h5" href="http://motors.stylemixthemes.com/rent-a-car/product/economy/">Addons</a>
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
                                            <div> Estimated Total - $400</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="stm-reservation-archive">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="rent_notice"></div>
                            <div class="row stm_rental_archive_top">
                                <div class="col-md-7 col-sm-7">
                                    <h2 class="title"> Vehicle Add-ons</h2>
                                </div>
                                <div class="col-md-5 col-sm-5">
                                    <div class="stm_rental_coupon">
                                        <form class="stm_checkout_coupon" method="post">
                                            <p class="form-row form-row-first"> <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value=""></p>
                                            <p class="form-row form-row-last"> <input type="submit" class="button" name="apply_coupon" value="Apply coupon"></p>
                                            <div class="clear"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <form action="/reservation-step-4" method="post">
                                        <?php foreach ($additional_charges as $charge): ?>
                                            <div class="stm_rental_options_archive">
                                                <div class="stm_rental_option">
                                                    <div class="image">
                                                        <img width="1" height="1" src="http://motors.stylemixthemes.com/rent-a-car/wp-content/uploads/sites/7/2017/01/waiver.svg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">
                                                    </div>
                                                    <div class="stm_rental_option_content">
                                                        <div class="content">
                                                            <div class="title">
                                                                <h4><?php echo $charge->name; ?></h4>
                                                            </div>
                                                            <!--<div class="stm-more"> <a href="#"> <span>More information</span> <i class="fa fa-angle-down"></i> </a></div>-->
                                                        </div>
                                                        <div class="meta">
                                                            <div class="price">
                                                                <div class="empty_sale_price"></div>
                                                                <div class="current_price heading-font"></div>
                                                            </div>
                                                            <div class="stm-add-to-cart heading-font stm-manage-stock-no"> <a href="/rent-a-car/product/economy/?add-to-cart=208"> Add </a></div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="more"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales tortor est, dictum pharetra lectus facilisis vitae. Proin sodales nec neque sed posuere. Nulla facilisi. Suspendisse tincidunt quisut sagittis.Sed ullamcorper aliquet magna at accumsan. Curabitur fringilla, risus a malesuada mattis, diam quam finibus sapien, sit amet ullamcorper arcu neque a metus. Etiam rutrum orci non ex vehicula, sed egestas metus tristique.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </form>
                                </div>
                                <div class="col-md-5">
                                    <div class="stm_rent_order_info">
                                        <div class="title">
                                            <h4><?php echo $selected_car->name; ?></h4>
                                            <div class="subtitle heading-font"><?php echo $selected_car->label_for_website->en; ?></div>
                                        </div>

                                        <div class="image"> <img class="img-responsive" src="<?php echo $selected_car->public_image_link; ?>"></div>
                                        <div class="stm_rent_table">
                                            <div class="heading heading-font">
                                                <h4>Rate</h4>
                                            </div>
                                            <table>
                                                <thead class="heading-font">
                                                <tr>
                                                    <td>QTY</td>
                                                    <td>Rate</td>
                                                    <td>Subtotal</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td colspan="3" class="divider"></td>
                                                </tr>
                                                <tr>
                                                    <td>4 Days</td>
                                                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>100</span></td>
                                                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>400</span></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="divider"></td>
                                                </tr>
                                                </tbody>
                                                <tfoot class="heading-font">
                                                <tr>
                                                    <td colspan="2">Rental Charges Rate</td>
                                                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>400</span></td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="stm_rent_table stm_rent_tax_table">
                                            <div class="heading heading-font">
                                                <h4>Taxes &amp; Fees</h4>
                                            </div>
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td colspan="3" class="divider"></td>
                                                </tr>
                                                <tr class="cart-tax tax-car-rental-sales-tax-1-1">
                                                    <td>Car Rental Sales Tax (1%)</td>
                                                    <td>&nbsp;</td>
                                                    <td>$4</td>
                                                </tr>
                                                <tr class="cart-tax tax-sales-tax-2-2">
                                                    <td>Sales Tax (2%)</td>
                                                    <td>&nbsp;</td>
                                                    <td>$8</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="divider"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="stm-rent-total heading-font">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td>Estimated total</td>
                                                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>400</span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="stm_rent_accept_wrapper">
                                            <button href="http://motors.stylemixthemes.com/rent-a-car/checkout/" class="hq-rental-reservation-submit-button">Continue</button>
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