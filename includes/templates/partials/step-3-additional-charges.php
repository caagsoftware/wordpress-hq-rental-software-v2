<?php
    $additional_charges = $data['charges'];
    $hidden_inputs = $data['hidden_inputs'];
    $selected_car = $data['selected_car'];
    $prices = $data['prices'];
?>
<style>
    .hq-charges-icons-wrapper{

    }
    .hq-charges-icon{
        font-size: 40px;
        color: #f0c540;
        margin-top: 10px;
    }
    .hq-mandatory-tag{
        color: #6c98e1;
        padding-top: 10px;
        padding-bottom: 10px;
        text-transform: uppercase;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="rent_notice"></div>
            <div class="row stm_rental_archive_top">
                <div class="col-md-7 col-sm-7">
                    <h2 class="title">Vehicle Add-ons</h2>
                </div>
                <div class="col-md-5 col-sm-5">
                    <div class="stm_rental_coupon">
                        <!--
                        <form class="stm_checkout_coupon" method="post">
                            <p class="form-row form-row-first"> <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value=""></p>
                            <p class="form-row form-row-last"> <input type="submit" class="button" name="apply_coupon" value="Apply coupon"></p>
                            <div class="clear"></di v>
                        </form>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <form action="/reservation-step-4" method="post">
                        <?php echo $hidden_inputs; ?>
                        <?php foreach ($additional_charges as $charge): ?>
                            <?php if($charge->selection_type == 'multiple'): ?>
                                <div class="stm_rental_options_archive">
                                    <div class="stm_rental_option">
                                        <div class="image">
                                            <div class="single_info stm_single_info_font_stm-rental-seats hq-charges-icons-wrapper">
                                                <i class="<?php echo hq_rental_wpv2_get_icon($charge->icon); ?> hq-charges-icon"></i>
                                            </div>
                                        </div>
                                        <div class="stm_rental_option_content">
                                            <div class="content">
                                                <div class="title">
                                                    <h4><?php echo $charge->name; ?></h4>
                                                </div>
                                                <div class="stm-more"><a href="#"> <span>More information</span> <i class="fa fa-angle-down"></i></a></div>
                                            </div>
                                            <div class="meta">
                                                <div class="price">
                                                    <div class="empty_sale_price"></div>
                                                    <div class="current_price heading-font"></div>
                                                </div>
                                                <select name="charges[<?php echo $charge->id; ?>]" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                    <?php if(! is_null($charge->selection_range)): ?>
                                                        <?php $range_values = hq_rental_wpv2_get_range_on_multiple_charges($charge->selection_range); ?>
                                                            <option value="">Choose Option</option>
                                                                <?php foreach ($range_values as $value): ?>
                                                            <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                                            <?php endforeach; ?>
                                                    <?php else: ?>
                                                            <option value="">Choose Option</option>
                                                            <?php foreach (range(1,4) as $value): ?>
                                                            <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="more">
                                                <div class="price-value">
                                                    <h4>PRICE: <?php echo $charge->applicable_price->amount_for_display; ?></h4>
                                                </div>
                                                <?php echo ($charge->short_description_for_website->en != '' ? $charge->short_description_for_website->en : ''); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php elseif ($charge->selection_type == 'only_one'): ?>
                                <div class="stm_rental_options_archive">
                                    <div class="stm_rental_option">
                                        <div class="image">
                                            <div class="single_info stm_single_info_font_stm-rental-seats hq-charges-icons-wrapper">
                                                <i class="<?php echo hq_rental_wpv2_get_icon($charge->icon); ?> hq-charges-icon"></i>
                                            </div>
                                        </div>
                                        <div class="stm_rental_option_content">
                                            <div class="content">
                                                <div class="title">
                                                    <h4><?php echo $charge->name; ?></h4><?php if($charge->mandatory): ?><h6><span class="colored hq-mandatory-tag">Mandatory</span></h6><?php endif; ?>
                                                    <?php if($charge->recommended): ?><h6><span class="colored hq-recommended-tag">RECOMMENDED</span></h6><?php endif; ?>
                                                </div>
                                                <div class="stm-more"><a href="#"> <span>More information</span> <i class="fa fa-angle-down"></i></a></div>

                                            </div>
                                            <div class="meta">
                                                <div class="price">
                                                    <div class="empty_sale_price"></div>
                                                    <div class="current_price heading-font"></div>
                                                </div>
                                                <?php if($charge->mandatory): ?>
                                                    <input name="charges[<?php echo $charge->id; ?>]" type="checkbox" checked disabled /><span><?php echo $charge->applicable_price->amount_for_display; ?></span>
                                                <?php else: ?>
                                                    <input type="checkbox" name="charges[<?php echo $charge->id; ?>]" /><span><?php echo $charge->applicable_price->amount_for_display; ?></span>
                                                <?php endif; ?>

                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="more">
                                                <div class="price-value">
                                                    <h4>PRICE: <?php echo $charge->applicable_price->amount_for_display; ?></h4>
                                                </div>
                                                <?php echo ($charge->short_description_for_website->en != '' ? $charge->short_description_for_website->en : ''); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="stm_rental_options_archive">
                                    <div class="stm_rental_option">
                                        <div class="image">
                                            <img width="1" height="1" src="http://motors.stylemixthemes.com/rent-a-car/wp-content/uploads/sites/7/2017/01/waiver.svg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">
                                        </div>
                                        <div class="stm_rental_option_content">
                                            <div class="content">
                                                <div class="title">
                                                    <h4><?php echo $charge->name; ?></h4><?php if($charge->mandatory): ?><span> Mandatory</span><?php endif; ?>
                                                    <?php if($charge->recommended): ?><h6><span class="colored hq-recommended-tag">RECOMMENDED</span></h6><?php endif; ?>
                                                </div>
                                                <!--<div class="stm-more"> <a href="#"> <span>More information</span> <i class="fa fa-angle-down"></i> </a></div>-->
                                            </div>
                                            <div class="meta">
                                                <div class="price">
                                                    <div class="empty_sale_price"></div>
                                                    <div class="current_price heading-font"></div>
                                                </div>
                                                <select name="charges[<?php echo $charge->id; ?>]" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                    <?php if(is_null($charge->selection_range)): ?>
                                                        <option value="">Choose Option</option>
                                                        <?php foreach (range(1, 4,1) as $key    =>  $value): ?>
                                                            <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                                        <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <option value="">Choose Option</option>
                                                        <?php foreach (range(1, (int)$charge->selection_range,1) as $key    =>  $value): ?>
                                                            <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="more"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales tortor est, dictum pharetra lectus facilisis vitae. Proin sodales nec neque sed posuere. Nulla facilisi. Suspendisse tincidunt quisut sagittis.Sed ullamcorper aliquet magna at accumsan. Curabitur fringilla, risus a malesuada mattis, diam quam finibus sapien, sit amet ullamcorper arcu neque a metus. Etiam rutrum orci non ex vehicula, sed egestas metus tristique.</div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                </div>
                <div class="col-md-5">
                    <div class="stm_rent_order_info">
                        <div class="title">
                            <h4><?php echo $selected_car->name; ?></h4>
                            <div class="subtitle heading-font"><?php echo $selected_car->label_for_website->en; ?></div>
                        </div>

                        <div class="image"><img class="img-responsive" src="<?php echo $selected_car->public_image_link; ?>"></div>
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
                                    <td><?php echo $prices->total_days; ?> Days</td>
                                    <td><span class="woocommerce-Price-amount amount"><?php echo $prices->rack_rate_details[0]->base_daily_price->amount_for_display; ?></td>
                                    <td><span class="woocommerce-Price-amount amount"><?php echo $prices->base_price->amount_for_display?></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="divider"></td>
                                </tr>
                                </tbody>
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
                                    <td><span><?php echo $prices->brand->tax_label ?></span><span> % <?php echo $prices->brand->abb_tax; ?></span></td>
                                    <td><?php echo $prices->base_price_with_taxes->amount_for_display; ?></td>
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
                                    <td><span class="woocommerce-Price-amount amount"><?php echo $prices->total_price->amount_for_display; ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="stm_rent_accept_wrapper">
                            <button type="submit" class="hq-rental-reservation-submit-button">Continue</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
