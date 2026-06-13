<?php

/**
 * Sección de productos destacados de la página de inicio.
 *
 * @package VGS_WordPress_Test
 */

if (! defined('ABSPATH')) {
	exit;
}
?>

<section id="productos" class="bg-slate-100 py-20">
	<div class="container mx-auto px-4">
		<div class="mb-12 text-center">
			<h2 class="text-3xl font-bold text-blue-900 md:text-4xl">
				<span class="text-lime-500">PANEL SÁNDWICH</span> para tu proyecto
			</h2>
		</div>

		<?php
		$productos_query = new WP_Query(
			array(
				'post_type'      => 'producto',
				'posts_per_page' => 6,
				'post_status'    => 'publish',
			)
		);
		?>

		<?php if ($productos_query->have_posts()) : ?>
			<div class="mx-auto grid max-w-6xl gap-8 md:grid-cols-2 lg:grid-cols-3">
				<?php
				while ($productos_query->have_posts()) :
					$productos_query->the_post();

					get_template_part('template-parts/components/product-card');
				endwhile;
				?>
			</div>

			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p class="text-center text-gray-600">
				No hay productos disponibles.
			</p>
		<?php endif; ?>
	</div>
</section>