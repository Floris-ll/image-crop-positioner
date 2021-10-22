<?php

use Mentosmenno2\ImageCropPositioner\Admin\Settings\Menu;

if ( ! current_user_can( 'manage_options' ) ) {
	wp_safe_redirect( admin_url( 'admin.php' ) );
	exit;
}

settings_errors( Menu::NAME );
?>

<div class="wrap">
	<h1>
		<?php echo esc_html( get_admin_page_title() ); ?> <?php esc_html_e( 'settings', 'image-crop-positioner' ); ?>
	</h1>
	<form action="options.php" method="post">
		<?php
			settings_fields( Menu::NAME );
			do_settings_sections( Menu::NAME );
			submit_button();
		?>
	</form>
</div>


