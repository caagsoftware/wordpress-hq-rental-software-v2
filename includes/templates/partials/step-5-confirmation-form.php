<?php
    /*
     * Hook Page Template Data With Partial Data
     */
    $date_format = get_option( HQ_RENTAL_WPV2_DATE_FORMAT );
    $hidden_inputs = $data['hidden_inputs'];
    $hidden_inputs_array = $data['hidden_inputs_array'];
    $client = $data['client'];
    $pick_up_location = $data['pick_up_location_workflow'];
    $return_location = $data['return_location_workflow'];
    $pick_up_date = $data['pick_up_date'];
    $return_date = $data['return_date'];
    $reservation = $data['reservation'];
    $charges = $data['charges'];
    $prices = $data['prices'];
    $selected_car = $data['selected_car'];
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row stm_rental_archive_top">
                <div class="col-md-7 col-sm-7">
                    <h2 class="title">Reservation Summary</h2>
                </div>
                <div class="col-md-5 col-sm-5">
                </div>
            </div>
            <div class="row">
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
                                    <td><span class="woocommerce-Price-amount amount"><?php echo $prices->base_price->amount_for_display; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="divider"></td>
                                </tr>
                                </tbody>
                                <tfoot class="heading-font">
                                <tr>
                                    <td colspan="2">Rental Charges Rate</td>
                                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"><?php echo $prices->base_price->amount_for_display; ?></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="stm_rent_table stm_rent_tax_table">
                            <div class="heading heading-font">
                                <h4>Additional Charges</h4>
                            </div>
                            <table>
                                <tbody>
                                <tr>
                                    <td colspan="3" class="divider"></td>
                                </tr>
                                <?php foreach ($charges as $charge): ?>
                                    <tr class="cart-tax tax-car-rental-sales-tax-1-1">
                                        <td class="hq-additional-charge-name-step-4"><?php echo $charge->name; ?></td>
                                        <?php if($charge->charge_type == 'daily'): ?>
                                            <td><?php echo $charge->quantity; ?> x <?php echo $prices->total_days; ?> days </td>
                                        <?php elseif($charge->charge_type == 'amount'): ?>
                                            <td><?php echo $charge->quantity; ?> </td>
                                        <?php endif; ?>
                                        <td><?php echo $charge->price->amount_for_display; ?></td>
                                    </tr>
                                <?php endforeach; ?>
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
                                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"><?php echo $prices->outstanding_balance->amount_for_display; ?></td>
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
                                    <input type="hidden" name='customer_id' value="<?php echo $client->id; ?>" />
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
                                            <div class="content"><?php echo !empty($pick_up_date) ? $pick_up_date->format($date_format) : '--'; ?></div>
                                        </div>
                                        <div class="single_order_info">
                                            <h4 class="title">Return Location</h4>
                                            <div class="content"><?php echo !empty($return_location) ? $return_location : '--'; ?></div>
                                        </div>
                                        <div class="single_order_info">
                                            <h4 class="title">Return Date</h4>
                                            <div class="content"><?php echo !empty($pick_up_date) ? $pick_up_date->format($date_format) : '--'; ?></div>
                                        </div>
                                        <div class="single_order_info">
                                            <h4 class="title">Client Name</h4>
                                            <div class="content"><?php echo $client->label; ?></div>
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