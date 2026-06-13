<?php

/**
 * Sección de testimonios de clientes.
 *
 * @package VGS_WordPress_Test
 */

if (! defined('ABSPATH')) {
	exit;
}
?>

<section class="bg-slate-100 py-24">
	<div class="container mx-auto px-4">
		<div class="mb-12 flex items-center justify-between gap-6">
			<h2 class="text-3xl font-bold text-blue-900 md:text-4xl">
				Reseñas de <span class="text-lime-500">CLIENTES</span>
			</h2>

			<div class="hidden gap-3 md:flex">
				<button type="button" class="flex h-12 w-12 items-center justify-center rounded-full border-2 border-blue-900 text-xl font-bold text-blue-900">
					←
				</button>
				<button type="button" class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-900 text-xl font-bold text-white">
					→
				</button>
			</div>
		</div>

		<div class="grid gap-6 md:grid-cols-3">
			<article class="bg-white p-8 shadow-sm">
				<div class="mb-8 flex items-start justify-between gap-4">
					<div class="flex items-center gap-4">
						<img
							src="https://randomuser.me/api/portraits/men/32.jpg"
							alt="Carlos Javier"
							class="h-14 w-14 rounded-full object-cover">
						<div class="border-l-2 border-lime-500 pl-4">
							<h3 class="font-bold text-blue-900">Carlos Javier</h3>
						</div>
					</div>

					<div class="text-right">
						<p class="text-yellow-400">★★★★★</p>
						<p class="text-sm text-slate-400">30/01/2024</p>
					</div>
				</div>

				<p class="leading-relaxed text-slate-600">
					Me considero un cliente satisfecho. Me asesoraron con claridad y cumplieron con los tiempos acordados.
				</p>
			</article>

			<article class="bg-white p-8 shadow-sm">
				<div class="mb-8 flex items-start justify-between gap-4">
					<div class="flex items-center gap-4">
						<img
							src="https://randomuser.me/api/portraits/men/45.jpg"
							alt="Carlos Javier"
							class="h-14 w-14 rounded-full object-cover">
						<div class="border-l-2 border-lime-500 pl-4">
							<h3 class="font-bold text-blue-900">Carlos Javier</h3>
						</div>
					</div>

					<div class="text-right">
						<p class="text-yellow-400">★★★★★</p>
						<p class="text-sm text-slate-400">30/01/2024</p>
					</div>
				</div>

				<p class="leading-relaxed text-slate-600">
					Atención muy buena por parte del equipo comercial. La entrega fue rápida y el producto cumplió lo esperado.
				</p>
			</article>

			<article class="bg-white p-8 shadow-sm">
				<div class="mb-8 flex items-start justify-between gap-4">
					<div class="flex items-center gap-4">
						<img
							src="https://randomuser.me/api/portraits/men/67.jpg"
							alt="Carlos Javier"
							class="h-14 w-14 rounded-full object-cover">
						<div class="border-l-2 border-lime-500 pl-4">
							<h3 class="font-bold text-blue-900">Carlos Javier</h3>
						</div>
					</div>

					<div class="text-right">
						<p class="text-yellow-400">★★★★★</p>
						<p class="text-sm text-slate-400">30/01/2024</p>
					</div>
				</div>

				<p class="leading-relaxed text-slate-600">
					Necesitaba una solución concreta para mi proyecto y recibí asesoramiento claro desde el primer contacto.
				</p>
			</article>
		</div>
	</div>
</section>