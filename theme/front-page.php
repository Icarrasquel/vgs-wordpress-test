<?php
/**
 * Plantilla de la página de inicio.
 *
 * @package VGS_WordPress_Test
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="py-16 bg-gray-50">
		<div class="container mx-auto px-4">
			<div class="text-center mb-10">
				<h1 class="text-3xl md:text-4xl font-bold text-gray-900">
					Productos destacados
				</h1>
				<p class="mt-4 text-gray-600">
					Conoce nuestra selección de productos más recientes.
				</p>
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

			<?php if ( $productos_query->have_posts() ) : ?>
				<div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
					<?php
					while ( $productos_query->have_posts() ) :
						$productos_query->the_post();

						get_template_part( 'template-parts/components/product-card' );
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
</main>

<?php
get_footer();
