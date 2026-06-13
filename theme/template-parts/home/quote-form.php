<?php

/**
 * Sección de solicitud de presupuesto.
 *
 * @package VGS_WordPress_Test
 */

if (! defined('ABSPATH')) {
    exit;
}
?>

<section id="presupuesto" class="bg-slate-200 py-20">
    <div class="container mx-auto px-4">
        <div class="mb-14 text-center">
            <h2 class="text-3xl font-bold text-blue-900 md:text-4xl">
                Pide <span class="text-lime-500">PRESUPUESTO</span>
            </h2>

            <div class="mx-auto mt-3 h-1 w-56 rounded-full bg-blue-900"></div>
        </div>

        <form class="mx-auto max-w-7xl">
            <div class="grid gap-x-8 gap-y-8 md:grid-cols-3">
                <div>
                    <label class="mb-3 block text-base font-bold text-slate-600" for="nombre">
                        Nombre*
                    </label>
                    <input id="nombre" type="text" placeholder="Nombre" class="h-14 w-full rounded-lg border-0 bg-white px-5 text-base text-slate-700 shadow-sm">
                </div>

                <div>
                    <label class="mb-3 block text-base font-bold text-slate-600" for="telefono">
                        Teléfono
                    </label>
                    <input id="telefono" type="tel" placeholder="+34" class="h-14 w-full rounded-lg border-0 bg-white px-5 text-base text-slate-700 shadow-sm">
                </div>

                <div>
                    <label class="mb-3 block text-base font-bold text-slate-600" for="email">
                        Correo electrónico*
                    </label>
                    <input id="email" type="email" placeholder="mail@mail.com" class="h-14 w-full rounded-lg border-0 bg-white px-5 text-base text-slate-700 shadow-sm">
                </div>

                <div>
                    <label class="mb-3 block text-base font-bold text-slate-600" for="material">
                        Material*
                    </label>
                    <select id="material" class="h-14 w-full rounded-lg border-0 bg-white px-5 text-base text-slate-500 shadow-sm">
                        <option>Material</option>
                        <option>Panel Cubierta</option>
                        <option>Panel Fachada</option>
                        <option>Panel Lana de Roca</option>
                    </select>
                </div>

                <div>
                    <label class="mb-3 block text-base font-bold text-slate-600" for="metros">
                        Metros cuadrados*
                    </label>
                    <input id="metros" type="text" placeholder="m2" class="h-14 w-full rounded-lg border-0 bg-white px-5 text-base text-slate-700 shadow-sm">
                </div>

                <div>
                    <label class="mb-3 block text-base font-bold text-slate-600" for="provincia">
                        Provincia de entrega*
                    </label>
                    <select id="provincia" class="h-14 w-full rounded-lg border-0 bg-white px-5 text-base text-slate-500 shadow-sm">
                        <option>Seleccione provincia</option>
                        <option>Buenos Aires</option>
                        <option>Córdoba</option>
                        <option>Santa Fe</option>
                    </select>
                </div>
            </div>

            <div class="mt-10 space-y-4 text-base text-slate-600">
                <label class="flex items-start gap-4">
                    <input type="checkbox" class="mt-1 h-5 w-5">
                    <span>Acepto recibir información comercial, así como descuentos, promociones y actualizaciones de producto pertinentes.</span>
                </label>

                <label class="flex items-start gap-4">
                    <input type="checkbox" checked class="mt-1 h-5 w-5 accent-lime-500">
                    <span>Confirmo que he leído y aceptado la <a href="#" class="text-blue-900 underline">política de privacidad y venta.</a>*</span>
                </label>
            </div>

            <div class="mt-16 text-center">
                <button type="button" class="rounded-full bg-blue-700 px-20 py-5 text-base font-bold uppercase text-white transition hover:bg-blue-800">
                    Pide presupuesto
                </button>
            </div>
        </form>
    </div>
</section>