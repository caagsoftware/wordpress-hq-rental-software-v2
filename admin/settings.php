<?php

define(HQ_RENTAL_WPV2_SETTING_TITLE, 'HQWP Rental Setup');
define(HQ_RENTAL_WPV2_SETTING_MENU, 'HQWP Rental Setup');
define(HQ_RENTAL_WPV2_SETTING_SLUG, 'hq-rental-wpv2');

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
	var_dump($settings);
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
						<td><input type="text" name="<?php echo CAAG_HQ_RENTAL_TENANT_TOKEN; ?>" size="70"
						           value="<?php echo $settings[ CAAG_HQ_RENTAL_TENANT_TOKEN ]; ?>" id="title"
						           spellcheck="true" autocomplete="off"></td>
					</tr>
					<tr>
						<th><label class="wp-heading-inline" id="title-prompt-text" for="title">User Token</label></th>
						<td><input type="text" name="<?php echo CAAG_HQ_RENTAL_USER_TOKEN; ?>" size="70"
						           value="<?php echo $settings[ CAAG_HQ_RENTAL_USER_TOKEN ]; ?>" id="title"
						           spellcheck="true" autocomplete="off"></td>
					</tr>
					<th><label class="wp-heading-inline" id="title-prompt-text" for="title">Select Date Format</label>
					</th>
					<td>
						<?php if ( get_option( CAAG_HQ_RENTAL_DATE_FORMAT ) == "YYYY-MM-DD" ): ?>
							<select name="<?php echo CAAG_HQ_RENTAL_DATE_FORMAT; ?>">
								<option value="YYYY-MM-DD" selected="selected">YYYY-MM-DD</option>
								<option value="DD-MM-YYYY">DD-MM-YYYY</option>
							</select>
						<?php elseif ( get_option( CAAG_HQ_RENTAL_DATE_FORMAT ) == "DD-MM-YYYY" ): ?>
							<select name="<?php echo CAAG_HQ_RENTAL_DATE_FORMAT; ?>">
								<option value="YYYY-MM-DD" selected="selected">YYYY-MM-DD</option>
								<option value="DD-MM-YYYY" selected="selected">DD-MM-YYYY</option>
							</select>
						<?php endif; ?>
					</td>
					</tbody>
				</table>
				<?php wp_nonce_field( CAAG_HQ_RENTAL_NONCE, 'caag_nonce' ); ?>
				<input type="submit" name="publish" id="publish" class="button button-primary button-large"
				       value="Save">
			</form>
		</div>
	</div>
	<?php
	if ( ! empty( $_POST ) and wp_verify_nonce( $_POST['caag_nonce'], CAAG_HQ_RENTAL_NONCE ) ) {
		caag_hq_rental_save_settings( $_POST );
		if ( caag_hq_rental_check_settings_save( $_POST ) ) {
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