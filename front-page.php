<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$context = Timber::context();


$args = array(
    'post_type' => 'post',
);
$context['blogs'] = new Timber\PostQuery($args);

$timber_post = new Timber\Post();
$context['post'] = $timber_post;

$args = array(
    'post_type' => 'frameworks'
);
$context['frameworks'] = new Timber\PostQuery( $args );

$args = array(
    'post_type' => 'clients'
);
$context['clients'] = new Timber\PostQuery( $args );

$context['offer_background'] = new Timber\Image(110);
$context['karen_background'] = new Timber\Image(111);

$templates = array( 'frontpage.twig' );

Timber::render( $templates, $context );
