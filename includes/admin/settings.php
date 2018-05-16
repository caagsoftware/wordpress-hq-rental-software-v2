<?php



add_action('admin_menu','hq_rental_wpv2_setting_menu');
function hq_rental_wpv2_setting_menu()
{
	add_options_page(
		HQ_RENTAL_WPV2_SETTING_TITLE,
		HQ_RENTAL_WPV2_SETTING_MENU,
		'manage_options',
		HQ_RENTAL_WPV2_SETTING_SLUG,
		'hq_rental_wpv2_setting_template'
	);
}

function hq_rental_wpv2_setting_template() {
	wp_enqueue_style( 'hq_rental_wpv2_styles_settings_page' );
	$settings = hq_rental_wpv2_get_settings();
	?>
	<?php if ( isset( $success ) ): ?>
		<div class="message updated"><p><?php echo $success; ?></p></div>
	<?php endif; ?>
	<div class="wrap">
		<div id="wrap">
			<h1>Caag Software Authentication Access</h1>
			<div class="caag-notice-wp notice caag-notice">
				<p>Don't have an account yet? Create a new account by clicking on this link</p>
				<a href="https://caagsoftware.com/" class="caag-button caag-button-primary caag-button-external-link"
				   target="_blank">Register Now</a>
			</div>
			<form action="" method="post">
				<table class="form-table">
					<tbody>
					<tr>
						<th><label class="wp-heading-inline" id="title" for="title">Tenant Token</label></th>
						<td><input type="text" name="<?php echo HQ_RENTAL_WPV2_TENANT_TOKEN; ?>" size="70"
						           value="<?php echo $settings[ HQ_RENTAL_WPV2_TENANT_TOKEN ]; ?>" id="title"
						           spellcheck="true" autocomplete="off"></td>
					</tr>
					<tr>
						<th><label class="wp-heading-inline" id="title-prompt-text" for="title">User Token</label></th>
						<td><input type="text" name="<?php echo HQ_RENTAL_WPV2_USER_TOKEN; ?>" size="70"
						           value="<?php echo $settings[ HQ_RENTAL_WPV2_USER_TOKEN ]; ?>" id="title"
						           spellcheck="true" autocomplete="off"></td>
					</tr>
					<th><label class="wp-heading-inline" id="title-prompt-text" for="title">Select Date Format</label>
					</th>
					<td>
                        <select name="<?php echo HQ_RENTAL_WPV2_DATE_FORMAT; ?>">
                            <option value="Y-m-d H:i" <?php echo ($settings[ HQ_RENTAL_WPV2_DATE_FORMAT ] == 'Y-m-d H:i') ? 'selected="selected"' : ''?>>DD-MM-YYYY</option>
                            <option value="m-d-Y H:i" <?php echo ($settings[ HQ_RENTAL_WPV2_DATE_FORMAT ] == 'm-d-Y H:i') ? 'selected="selected"' : ''?>>MM-DD-YYYY</option>
                            <option value="d-m-Y H:i" <?php echo ($settings[ HQ_RENTAL_WPV2_DATE_FORMAT ] == 'd-m-Y H:i') ? 'selected="selected"' : ''?>>DD-MM-YYYY</option>
                            <option value="d/m/Y H:i" <?php echo ($settings[ HQ_RENTAL_WPV2_DATE_FORMAT ] == 'd/m/Y H:i') ? 'selected="selected"' : ''?>>DD/MM/YYYY</option>
                            <option value="m/d/Y H:i" <?php echo ($settings[ HQ_RENTAL_WPV2_DATE_FORMAT ] == 'm/d/Y H:i') ? 'selected="selected"' : ''?>>MM/DD/YYYY</option>
                            <option value="d/m/Y H:i" <?php echo ($settings[ HQ_RENTAL_WPV2_DATE_FORMAT ] == 'd/m/Y H:i') ? 'selected="selected"' : ''?>>DD/MM/YYYY</option>
                        </select>
					</td>
					</tbody>
				</table>
				<?php wp_nonce_field( HQ_RENTAL_WPV2_NONCE, 'caag_nonce' ); ?>
				<input type="submit" name="publish" id="publish" class="button button-primary button-large"
				       value="Save">
			</form>
		</div>
	</div>
	<?php
	if ( ! empty( $_POST ) and wp_verify_nonce( $_POST['caag_nonce'], HQ_RENTAL_WPV2_NONCE ) ) {
        hq_rental_wpv2_save_settings( $_POST );
		if ( hq_rental_wpv2_check_settings_save( $_POST ) ) {
			$success = __( 'Settings were successfully saved!' );
		} else {
			$error = __( 'It was an Error Proccessing the Information. Please Try Again!!!' );
		};
	}
	?>
	<?php if ( isset( $success ) ): ?>
		<div class="message updated"><p><?php echo $success; ?></p></div>
		<script>
			document.getElementById("wrap").remove();
		</script>
	<?php endif; ?>
	<?php if ( isset( $error ) ): ?>
		<div class="message updated"><p><?php echo $error; ?></p></div>
	<?php endif; ?>

	<?php
}