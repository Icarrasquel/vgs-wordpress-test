<?php

/**
 * Sección informativa sobre la empresa.
 *
 * @package VGS_WordPress_Test
 */

if (! defined('ABSPATH')) {
	exit;
}
?>

<section class="bg-white py-24">
	<div class="container mx-auto px-4">
		<div class="grid items-center gap-12 lg:grid-cols-2">
			<div>
				<img
					src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?q=80&w=1200&auto=format&fit=crop"
					alt="Paneles y materiales de construcción"
					class="h-[420px] w-full object-cover shadow-sm">
			</div>

			<div class="relative">
				<h2 class="text-3xl font-bold text-blue-900 md:text-4xl">
					Profesionales y <span class="text-lime-500">CERCANOS</span>
				</h2>

				<div class="mt-6 h-1 w-40 rounded-full bg-lime-500"></div>

				<div class="mt-8 space-y-6 text-base leading-relaxed text-slate-600">
					<p>
						Por eso, en VGS estamos en constante desarrollo para ofrecer soluciones confiables, funcionales y adaptadas a cada proyecto.
					</p>

					<p>
						Contamos con un equipo preparado para asesorarte con claridad, cercanía y profesionalidad durante todo el proceso.
					</p>

					<p>
						Nos encanta acompañar a cada cliente, resolver dudas y ayudar a encontrar la mejor opción para sus necesidades.
					</p>
				</div>

				<a href="#presupuesto" class="mt-8 inline-block rounded-full border-2 border-lime-500 px-9 py-3 text-sm font-bold uppercase text-blue-900 transition hover:bg-lime-500 hover:text-white">
					Contacta con nosotros
				</a>
			</div>
		</div>

		<div class="mt-14 grid overflow-hidden rounded-xl bg-slate-50 md:grid-cols-4">
			<div class="flex items-center gap-4 border-b border-slate-200 p-6 md:border-b-0 md:border-r">
				<div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-lime-500 text-lg font-bold text-lime-500">
					01
				</div>
				<p class="text-sm font-semibold leading-snug text-blue-900">
					Punto de venta especializado
				</p>
			</div>

			<div class="flex items-center gap-4 border-b border-slate-200 p-6 md:border-b-0 md:border-r">
				<div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-lime-500 text-lg font-bold text-lime-500">
					02
				</div>
				<p class="text-sm font-semibold leading-snug text-blue-900">
					Diseño y fabricación de soluciones
				</p>
			</div>

			<div class="flex items-center gap-4 border-b border-slate-200 p-6 md:border-b-0 md:border-r">
				<div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-lime-500 text-lg font-bold text-lime-500">
					03
				</div>
				<p class="text-sm font-semibold leading-snug text-blue-900">
					Asesoramiento técnico
				</p>
			</div>

			<div class="flex items-center gap-4 p-6">
				<div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-lime-500 text-lg font-bold text-lime-500">
					04
				</div>
				<p class="text-sm font-semibold leading-snug text-blue-900">
					Proyectos confiables
				</p>
			</div>
		</div>
	</div>
</section>