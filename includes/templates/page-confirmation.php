<?php
    global $post;
    $confirmation_result = hq_rental_wpv2_book_confirmation($_POST);
    var_dump($confirmation_result);
    die();
    get_header();
    hq_rental_wpv2_assets();
?>
    <div>
        Confirmation
    </div>

<?php
get_footer();