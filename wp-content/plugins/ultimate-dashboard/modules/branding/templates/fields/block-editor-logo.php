<?php
/**
 * Block editor logo field.
 *
 * @package Ultimate_Dashboard
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

return function () {
	?>

	<div class="setting-fields">

		<div class="setting-field">
			<input class="all-options" type="text" disabled />
			<button type="button" class="button-secondary button-disabled disabled">
				<?php _e( 'Add or Upload File', 'ultimate-dashboard' ); ?>
			</button>
		</div>

		<p class="description is-disabled">
			<?php _e( 'Replace the logo on the top-left inside the WordPress block editor.', 'ultimate-dashboard' ); ?><br>
			<?php _e( '<strong>Recommended image size:</strong> 512px x 512px.', 'ultimate-dashboard' ); ?>
		</p>

	</div>

	<br>

	<div class="udb-pro-settings-page-notice">

		<p><?php _e( 'This feature is available in Ultimate Dashboard PRO.' ); ?></p>

		<a href="https://ultimatedashboard.io/pro/?utm_source=plugin&utm_medium=white_label_link&utm_campaign=udb" class="button button-primary" target="_blank">
			<?php _e( 'Get Ultimate Dashboard PRO', 'ultimate-dashboard' ); ?>
		</a>

	</div>

	<?php
};
