<?php
/**
 * Registra los tipos de contenido personalizados del tema.
 *
 * @package VGS_WordPress_Test
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registra el tipo de contenido Productos.
 */
function vgs_register_productos_cpt() {

	$labels = array(
		'name'               => 'Productos',
		'singular_name'      => 'Producto',
		'menu_name'          => 'Productos',
		'add_new'            => 'Añadir Producto',
		'add_new_item'       => 'Añadir Nuevo Producto',
		'edit_item'          => 'Editar Producto',
		'new_item'           => 'Nuevo Producto',
		'view_item'          => 'Ver Producto',
		'all_items'          => 'Todos los Productos',
		'search_items'       => 'Buscar Productos',
		'not_found'          => 'No se encontraron productos',
		'not_found_in_trash' => 'No hay productos en la papelera',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_in_rest'       => true,
		'menu_icon'          => 'dashicons-cart',
		'has_archive'        => true,
		'rewrite'            => array(
			'slug' => 'productos',
		),
		'supports'           => array(
			'title',
			'editor',
			'thumbnail',
		),
	);

	register_post_type( 'producto', $args );
}

add_action( 'init', 'vgs_register_productos_cpt' );
