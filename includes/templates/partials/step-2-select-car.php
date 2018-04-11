<?php
    $cars_availability = $data['cars'];
    $hidden_inputs = $data['hidden_inputs'];
?>
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
                    <form action="/reservation-step-3" method="post">
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
                                                    <h3><?php echo $car->class->label_for_website->en; ?></h3>
                                                    <div class="s_title"><?php echo $car->class->short_description_for_website->en; ?></div>
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
                                                    <div class="total heading-font"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"><?php echo $car->rack_rate_details[0]->base_daily_price->amount_for_display; ?></span>/Total</div>
                                                    <div class="period"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"><?php echo $car->rack_rate_details[0]->base_daily_price->amount_for_display; ?></span>/Day</div>
                                                    <div class="pay"> <button class="heading-font" style="background-color: #f0c540; box-shadow: 0 2px 0 #f0c540;">Pay now</button></div>
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
