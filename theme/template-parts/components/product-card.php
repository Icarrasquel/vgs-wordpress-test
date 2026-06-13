<?php
/**
 * Componente reutilizable para mostrar una tarjeta de producto.
 *
 * @package VGS_WordPress_Test
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<article class="bg-white rounded-xl shadow-sm overflow-hidden">
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" class="block">
			<?php the_post_thumbnail( 'medium', array( 'class' => 'w-full h-48 object-cover' ) ); ?>
		</a>
	<?php endif; ?>

	<div class="p-5">
		<h3 class="text-lg font-semibold text-gray-900">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>

		<div class="mt-3 text-sm text-gray-600">
			<?php echo wp_trim_words( get_the_content(), 18, '...' ); ?>
		</div>

		<a href="<?php the_permalink(); ?>" class="inline-block mt-4 text-sm font-semibold">
			Ver producto
		</a>
	</div>
</article>
