<?php
    $cars_availability = $data['cars'];
    $hidden_inputs = $data['hidden_inputs'];
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row stm_rental_archive_top">
                <div class="col-md-7 col-sm-7">
                    <h2 class="title">Select Vehicle</h2>
                </div>
                <div class="col-md-5 col-sm-5">
                </div>
            </div>
            <?php foreach ($cars_availability as $car): ?>
                <div>
                    <form action="/reservation-step-3" method="post">
                        <?php echo $hidden_inputs; ?>
                        <input type="hidden" name="vehicle_class_id" value="<?php echo $car->rack_rate_details[0]->applicable_rate->vehicle_class_id; ?>">
                        <div class="stm_single_class_car  " id="product-<?php echo $car->class->id; ?>">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 first">
                                    <div class="image"> <img class="img-responsive" width="300" height="181" src="<?php echo $car->class->public_image_link; ?>" alt=""></div>
                                </div>
                                <div class="col-md-8 col-sm-12 second">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="top">
                                                <div class="heading-font">
                                                    <h3><?php echo $car->class->label_for_website->en; ?></h3>
                                                    <div class="s_title"><?php echo $car->class->short_description_for_website->en; ?></div>
                                                    <div class="infos hq-rental-features">
                                                        <?php foreach ($car->class->features as $feature): ?>
                                                            <div class="single_info stm_single_info_font_stm-rental-seats"><i class="<?php echo $feature->icon; ?>"></i> <span><?php echo $feature->label; ?></span></div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                                <?php if ( !empty($car->class->description_for_website->en) ): ?>
                                                    <div class="stm-more"><a href="#"><span>More information</span> <i class="fa fa-angle-down"></i> </a></div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="stm_rent_prices">
                                                <div class="stm_rent_price">
                                                    <div class="total heading-font"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"><?php echo $car->rack_rate_details[0]->base_daily_price->amount_for_display; ?></span>/Total</div>
                                                    <div class="period"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"><?php echo $car->rack_rate_details[0]->base_daily_price->amount_for_display; ?></span>/Day</div>
                                                    <div class="pay"> <button class="heading-font" style="background-color: #f0c540; box-shadow: 0 2px 0 #f0c540;">Reserve now</button></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <div class="more" style="display: block;">
                                                <div class="lists-inline">
                                                    <?php if ( !empty($car->class->description_for_website->en) ): ?>
                                                    <p class="hq-vehicle-class-description">
                                                        <?php echo $car->class->description_for_website->en; ?>
                                                    </p>
                                                    <!--
                                                    <ul>
                                                        <li>Auxiliary heating</li>
                                                    </ul>
                                                    <ul>
                                                        <li>Head-up display</li>
                                                    </ul>
                                                    <ul>
                                                        <li>Alloy wheels</li>
                                                    </ul>
                                                    <ul>
                                                        <li>MP3 interface</li>
                                                    </ul>-->
                                                    <?php endif;    ?>
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
        <style>
            .hq-rental-features span{
                font-size: 10px;
            }
            .hq-rental-features .single_info{
                margin: 0px !important;
                display: table !important;
            }
        </style>
        <div class="stm-shop-sidebar-area"></div>
    </div>
</div>
