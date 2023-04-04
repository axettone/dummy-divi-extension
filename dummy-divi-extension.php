<?php
/*
Plugin Name: Dummy Divi Extension
Plugin URI:  https://www.itestense.it
Description: A scaffolding for creating Divi extensions
Version:     1.0.0
Author:      Paolo Niccolò Giubelli <paoloniccolo.giubelli@itestense.it>
Author URI:  https://www.itestense.it
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: dude-dummy-divi-extension
Domain Path: /languages

Dummy Divi Extension is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Dummy Divi Extension is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Dummy Divi Extension. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'dude_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function dude_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/DummyDiviExtension.php';
}
add_action( 'divi_extensions_init', 'dude_initialize_extension' );
endif;
