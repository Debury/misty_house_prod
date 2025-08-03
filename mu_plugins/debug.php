<?php
/**
 * Must-Use Debug Plugin
 */
if ( ! defined( 'WP_DEBUG' ) ) {
  define( 'WP_DEBUG',         true );
  define( 'WP_DEBUG_LOG',     true );
  define( 'WP_DEBUG_DISPLAY', false );
  define( 'SCRIPT_DEBUG',     true );
}

// Also display errors on screen (development only!)
@ini_set( 'display_errors', 1 );
@ini_set( 'display_startup_errors', 1 );
