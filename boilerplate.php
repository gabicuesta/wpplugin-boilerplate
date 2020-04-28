<?php
/**
* @package Boilerplate
*/
/*
Plugin Name: Boilerplate
Plugin URI: https://www.github.com/gabicuesta/boilerplate
Description: This plugin is a boilerplate to create new plugins.
Author: Gabriel Cuesta Arza
Author URI: https://www.gabrielcuesta.com
License: GPLv3 or later
Text Domain: boilerplate
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2020 Gabriel Cuesta Arza.
*/

// If this file is called directly it aborts
if ( ! defined( 'ABSPATH' ) ) {
  die;
}

// Requiere once Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
  require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
* Plugin activation
*/
function activate_boilerplate_plugin() {

  Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_boilerplate_plugin' );

/**
* Plugin deactivation
*/
function deactivate_boilerplate_plugin() {
  Inc\Base\Deactivate::deactivate();
}
register_activation_hook( __FILE__, 'deactivate_boilerplate_plugin' );

/**
* Initialize all the core classes of the plugin
*/
if ( class_exists( 'Inc\\Init'  ) ) {
  Inc\Init::register_services();
}
