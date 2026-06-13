<?php

/**
 * Contenido del pie de página.
 *
 * @package VGS_WordPress_Test
 */

if (! defined('ABSPATH')) {
	exit;
}
?>

<footer id="colophon" class="bg-blue-900 text-white">
	<div class="container mx-auto px-4 py-16">
		<div class="grid gap-10 md:grid-cols-4">
			<div>
				<h3 class="mb-5 text-sm font-bold uppercase text-lime-400">
					Contacto
				</h3>

				<ul class="space-y-3 text-sm text-blue-100">
					<li>✉️ dominio@dominio.es</li>
					<li>📞 123 456 789</li>
					<li>📍 Zaragoza, España</li>
				</ul>
			</div>

			<div>
				<h3 class="mb-5 text-sm font-bold uppercase text-lime-400">
					Productos
				</h3>

				<ul class="space-y-2 text-sm text-blue-100">
					<li>Panel Sándwich Cubierta</li>
					<li>Panel Sándwich Fachada</li>
					<li>Panel Sándwich Lana de Roca</li>
					<li>Panel Sándwich Teja</li>
					<li>Panel Sándwich Segunda</li>
					<li>Chapa Metálica</li>
				</ul>
			</div>

			<div>
				<h3 class="mb-5 text-sm font-bold uppercase text-lime-400">
					Información general
				</h3>

				<ul class="space-y-2 text-sm text-blue-100">
					<li>Proyectos</li>
					<li>Construcción Modular</li>
					<li>Blog</li>
					<li>Contacto</li>
				</ul>

				<div class="mt-6 flex gap-3">
					<a href="#" class="flex h-9 w-9 items-center justify-center rounded-full bg-lime-400 text-sm font-bold text-blue-900">
						f
					</a>
					<a href="#" class="flex h-9 w-9 items-center justify-center rounded-full bg-lime-400 text-sm font-bold text-blue-900">
						x
					</a>
					<a href="#" class="flex h-9 w-9 items-center justify-center rounded-full bg-lime-400 text-sm font-bold text-blue-900">
						in
					</a>
				</div>
			</div>

			<div>
				<h3 class="mb-5 text-sm font-bold uppercase text-lime-400">
					Información legal
				</h3>

				<ul class="space-y-2 text-sm text-blue-100">
					<li>Aviso legal</li>
					<li>Política de privacidad</li>
					<li>Política de cookies</li>
					<li>Condiciones de venta</li>
					<li>Política de gestión</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="bg-blue-950 py-5 text-center text-xs text-blue-100">
		<p>
			&copy; <?php echo esc_html(date('Y')); ?> VGS WordPress Test. Todos los derechos reservados.
		</p>
	</div>
</footer>