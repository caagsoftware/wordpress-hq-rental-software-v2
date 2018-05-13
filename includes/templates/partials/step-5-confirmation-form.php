<?php
    /*
     * Hook Page Template Data With Partial Data
     */

    $hidden_inputs = $data['hidden_inputs'];
    $hidden_inputs_array = $data['hidden_inputs_array'];
    $client = $data['client'];
    $pick_up_location = $data['pick_up_location_workflow'];
    $return_location = $data['return_location_workflow'];
    $pick_up_date = $data['pick_up_date'];
    $return_date = $data['return_date'];
    $reservation = $data['reservation'];
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row stm_rental_archive_top">
                <div class="col-md-7 col-sm-7">
                    <h2 class="title">Checkout</h2>
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
                <div class="col-md-5">
                    <div class="stm_rent_order_info">
                        <div class="title">
                            <h4>Economy</h4>
                            <div class="subtitle heading-font">Mini Cooper 3 or Similar</div>
                        </div>
                        <div class="image"> <img src="http://motors.stylemixthemes.com/rent-a-car/wp-content/uploads/sites/7/2017/01/economy-300x181.png"></div>
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
                    </div>
                </div>
                <!--Confirmation Page Resume-->
                <div class="col-md-7">
                    <div class="stm_custom_rental_checkout">
                        <div class="woocommerce">
                            <div class="woocommerce-order">
                                <h4 class="rental_title">Summary</h4>
                                <form name="checkout" method="post" class="checkout woocommerce-checkout" action="/confirmation">
                                    <input type="hidden" name='customer_id' value="<?php echo $client->contact->id; ?>" />
                                    <input type="hidden" name="hq_comes_from_step_5" value="1" />
                                    <?php echo $hidden_inputs; ?>
                                    <?php echo $hidden_inputs_array; ?>
                                    <div class="stm_rental_order_success">
                                        <div class="single_order_info">
                                            <h4 class="title">Pick Up Location</h4>
                                            <div class="content"><?php echo !empty($pick_up_location) ? $pick_up_location : '--'; ?></div>
                                        </div>
                                        <div class="single_order_info">
                                            <h4 class="title">Pick Up Date</h4>
                                            <div class="content"><?php echo !empty($pick_up_date) ? $pick_up_date->format('Y-m-d H:i') : '--'; ?></div>
                                        </div>
                                        <div class="single_order_info">
                                            <h4 class="title">Return Location</h4>
                                            <div class="content"><?php echo !empty($return_location) ? $return_location : '--'; ?></div>
                                        </div>
                                        <div class="single_order_info">
                                            <h4 class="title">Return Date</h4>
                                            <div class="content"><?php echo !empty($pick_up_date) ? $pick_up_date->format('Y-m-d H:i') : '--'; ?></div>
                                        </div>
                                        <div class="single_order_info">
                                            <h4 class="title">Client Name</h4>
                                            <div class="content"><?php echo $client->label; ?></div>
                                        </div>
                                        <div class="single_order_info">
                                            <h4 class="title">Payment information</h4>
                                            <div class="content">Estimated Total - <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>4,720.00</span></div>
                                        </div>
                                    </div>
                                    <button type="submit" class="hq-rental-reservation-submit-button">Confirm Reservation</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Resume Information-->
            </div>
        </div>
    </div>
</div>