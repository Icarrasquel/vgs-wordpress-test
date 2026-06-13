<?php

/**
 * Contenido de la cabecera del sitio.
 *
 * @package VGS_WordPress_Test
 */

if (! defined('ABSPATH')) {
	exit;
}
?>

<header id="masthead" class="relative z-30">
	<?php get_template_part('template-parts/layout/top-bar'); ?>

	<?php get_template_part('template-parts/layout/navigation'); ?>
</header>