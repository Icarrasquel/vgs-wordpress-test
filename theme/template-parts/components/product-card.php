<?php

/**
 * Componente reutilizable para mostrar una tarjeta de producto.
 *
 * @package VGS_WordPress_Test
 */

if (! defined('ABSPATH')) {
	exit;
}
?>

<article class="bg-white shadow-sm">
	<?php if (has_post_thumbnail()) : ?>
		<a href="<?php the_permalink(); ?>" class="block bg-slate-200">
			<?php the_post_thumbnail('large', array('class' => 'h-64 w-full object-cover')); ?>
		</a>
	<?php endif; ?>

	<div class="px-8 py-9 text-center">
		<h3 class="text-xl font-bold text-blue-900">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>

		<div class="mx-auto mt-5 max-w-sm text-sm leading-relaxed text-slate-600">
			<?php echo esc_html(wp_trim_words(get_the_content(), 22, '...')); ?>
		</div>

		<a href="<?php the_permalink(); ?>" class="mt-8 inline-block rounded-full bg-lime-500 px-7 py-3 text-sm font-bold uppercase text-white transition hover:bg-lime-600">
			Leer más
		</a>
	</div>
</article>