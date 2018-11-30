<?php
/**
 * Template for the secondary header.
 *
 * @author     ThemeFusion
 * @copyright  (c) Copyright by ThemeFusion
 * @link       http://theme-fusion.com
 * @package    Avada
 * @subpackage Core
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php

$content_1 = avada_secondary_header_content( 'header_left_content' );
$content_2 = avada_secondary_header_content( 'header_right_content' );
?>

<div class="fusion-secondary-header">
	<div class="fusion-row">
		<div class="fusion-alignright">
			<div class="lang-switcher">
				<i class="fas fa-globe"></i>
				<?php do_action('wpml_add_language_selector'); ?>
			</div>
		</div>
	</div>
</div>
