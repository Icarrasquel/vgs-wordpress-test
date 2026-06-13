<?php
/**
 * Contenido del pie de página.
 *
 * @package VGS_WordPress_Test
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<footer id="colophon" class="bg-gray-900 py-8 text-white">
	<div class="container mx-auto px-4 text-center text-sm">
		<p>
			&copy; <?php echo esc_html( date( 'Y' ) ); ?> VGS WordPress Test. Todos los derechos reservados.
		</p>
	</div>
</footer>
