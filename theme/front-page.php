<?php
/**
 * Plantilla de la página de inicio.
 *
 * @package VGS_WordPress_Test
 */

get_header();
?>

<main id="primary" class="site-main">
	
	<?php get_template_part( 'template-parts/home/hero' ); ?>

	<?php get_template_part( 'template-parts/home/benefits' ); ?>

	<?php get_template_part( 'template-parts/home/products' ); ?>

	<?php get_template_part( 'template-parts/home/quote-form' ); ?>

	<?php get_template_part( 'template-parts/home/about' ); ?>

	<?php get_template_part( 'template-parts/home/testimonials' ); ?>

	<?php get_template_part( 'template-parts/home/cta' ); ?>

</main>

<?php
get_footer();
