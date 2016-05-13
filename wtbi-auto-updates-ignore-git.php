<?php
/**
 * Plugin Name: WTBI Auto Updates Ignore Git
 * Description: This plugin will fix the issue where WordPress prevents automatic updates when it detects git or svn in the root WordPress directory.
 * Version: 1.0
 * Autor: Wots the Big Idea
 */
add_filter( 'automatic_updates_is_vcs_checkout', '__return_false' );
