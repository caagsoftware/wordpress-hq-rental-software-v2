<?php
    global $post;
    $confirmation_result = hq_rental_wpv2_book_confirmation($_POST);
    var_dump($confirmation_result);
    /*
    if(!empty( $confirmation_result->sucess )){
        $reservation = $confirmation_result->reservation;
        $partials_data = array(
            'pick_up_date'  =>  $reservation->pick_up_date,
            'return_date'   =>  $reservation->return_date,

        );
    }else{

    }*/


    get_header();
    hq_rental_wpv2_assets();
?>
    <div id="main">
        <div class="container stm-reservation-archive hq-rental-reservation-wrapper">
            <?php hq_rental_wpv2_get_partial('banner-confirmation', $partials_data); ?>
        </div>
        <div class="stm-reservation-archive hq-rental-reservation-wrapper">
            <?php hq_rental_wpv2_get_partial('confirmation-resume', $partials_data); ?>
        </div>
    </div>

<?php

get_footer();