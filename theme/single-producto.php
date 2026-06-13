<?php

/**
 * Plantilla individual para productos.
 *
 * @package VGS_WordPress_Test
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="bg-slate-100 py-20">
    <?php
    while (have_posts()) :
        the_post();
    ?>

        <article class="container mx-auto px-4">
            <div class="grid items-center gap-12 rounded-2xl bg-white p-8 shadow-sm lg:grid-cols-2">
                <div>
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', array('class' => 'w-full rounded-xl object-cover')); ?>
                    <?php endif; ?>
                </div>

                <div>
                    <h1 class="text-3xl font-bold text-blue-900 md:text-5xl">
                        <?php the_title(); ?>
                    </h1>

                    <div class="mt-6 text-base leading-relaxed text-slate-600">
                        <?php the_content(); ?>
                    </div>

                    <a href="<?php echo esc_url(home_url('/#presupuesto')); ?>" class="mt-8 inline-block rounded-full bg-lime-500 px-8 py-4 text-sm font-bold uppercase text-white transition hover:bg-lime-600">
                        Solicitar presupuesto
                    </a>

                    <a href="<?php echo esc_url(home_url('/#productos')); ?>" class="ml-4 mt-8 inline-block text-sm font-bold text-blue-900 underline">
                        Volver a productos
                    </a>
                </div>
            </div>
        </article>

    <?php endwhile; ?>
</main>

<?php
get_footer();
