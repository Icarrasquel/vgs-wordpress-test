<?php

/**
 * Sección principal de la página de inicio.
 *
 * @package VGS_WordPress_Test
 */

if (! defined('ABSPATH')) {
	exit;
}
?>

<section class="relative overflow-hidden bg-slate-900">

	<div class="relative min-h-[620px]">
		<div class="absolute inset-0">
			<img
				src="https://images.unsplash.com/photo-1494526585095-c41746248156?q=80&w=1600&auto=format&fit=crop"
				alt="Cubierta con panel sándwich"
				class="h-full w-full object-cover">
			<div class="absolute inset-0 bg-blue-950/70"></div>
		</div>

		<button type="button" class="absolute left-6 top-1/2 z-20 hidden h-14 w-14 -translate-y-1/2 items-center justify-center rounded-full bg-lime-500 text-3xl font-bold text-white md:flex">
			‹
		</button>

		<button type="button" class="absolute right-6 top-1/2 z-20 hidden h-14 w-14 -translate-y-1/2 items-center justify-center rounded-full bg-lime-500 text-3xl font-bold text-white md:flex">
			›
		</button>

		<div class="container relative z-10 mx-auto flex min-h-[620px] items-center justify-center px-4 pt-20 text-center">
			<div class="max-w-4xl">
				<h1 class="text-4xl font-bold leading-tight text-white md:text-6xl">
					Venta y corte a medida de
					<span class="block text-lime-500">PANEL SÁNDWICH</span>
				</h1>

				<div class="mx-auto mt-4 h-2 w-56 rounded-full bg-white"></div>

				<a href="#presupuesto" class="mt-16 inline-block rounded-full border-2 border-lime-500 bg-white px-10 py-4 text-sm font-bold uppercase text-blue-900 transition hover:bg-lime-500 hover:text-white">
					Contacta con nosotros
				</a>
			</div>
		</div>
	</div>
</section>