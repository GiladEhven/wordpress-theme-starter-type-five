<?php

	// ORIGIN: starter\index.php



$context = Timber::get_context();
$context['posts'] = new Timber\PostQuery();
$context['foo'] = 'bar';
$templates = array( 'index.twig' );
if ( is_home() ) {
	array_unshift( $templates, 'home.twig' );
}
Timber::render( $templates, $context );
