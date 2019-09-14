<?php
/**
 * The loader file.
 *
 * @package Opal_Packages
 */

/**
 * First, we need autoload via Composer to make everything works.
 */
require_once trailingslashit( __DIR__ ) . 'vendor/autoload.php';

/**
 * Then, require the main class.
 */
require_once trailingslashit( __DIR__ ) . 'inc/functions.php';
require_once trailingslashit( __DIR__ ) . 'inc/Plugin.php';

/**
 * Alias the class "Opal_Packages\Plugin" to "Opal_Packages".
 */
class_alias( \Opal_Packages\Plugin::class, 'Opal_Packages', false );