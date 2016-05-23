<?php
/**
 * Plugin Name: WTBI Background Updates Ignore Git
 * Plugin URI:  https://wordpress.org/plugins/wtbi-background-updates-ignore-git/
 * Description: This plugin will fix WordPress automatic background updates not working when it detects version control (.git or .svn) in the root  directory.
 * Version:     1.0.1
 * Author:      Wots the Big Idea
 * Author URI:  http://wotsthebigidea.com
 * License:     GPL3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /languages
 * Text Domain: wtbi-background-updates-ignore-git
 */

if ( ! defined('WPINC') ) {
	die();
}

add_filter( 'automatic_updates_is_vcs_checkout', '__return_false' );
