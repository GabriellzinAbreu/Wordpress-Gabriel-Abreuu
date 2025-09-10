<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';

$mysqli = new mysqli("mysql", "lampuser", "lamppass", "lampdb");
if ($mysqli->connect_errno) {
 echo "Falha na conexao: " . $mysqli->connect_error;
 exit();
}
echo "Conexao bem-sucedida!\n";
phpinfo();

