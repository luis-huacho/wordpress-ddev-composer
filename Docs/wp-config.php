<?php
// Cargar variables de entorno
// Determinar el entorno actual
$environment = getenv('WP_ENVIRONMENT_TYPE') ?: 'local';

// Definir la ruta del archivo .env según el entorno
$envFile = __DIR__ . '/../../.env.' . $environment;

// Verificar si el archivo existe
if (!file_exists($envFile)) {
    die("El archivo de entorno no existe: " . $envFile);
}

// Cargar variables de entorno
$env = parse_ini_file($envFile);

// Configuración de la base de datos
define('DB_NAME', $env['DB_NAME']);
define('DB_USER', $env['DB_USER']);
define('DB_PASSWORD', $env['DB_PASSWORD']);
define('DB_HOST', $env['DB_HOST']); // "db" es el nombre del servicio de base de datos en DDEV

// Configuración de WordPress
define('WP_ENVIRONMENT_TYPE', $env['WP_ENV']);
define('WP_HOME', $env['WP_HOME']);
define('WP_SITEURL', $env['WP_SITEURL']);

// Configuraciones de seguridad
//define('DISALLOW_FILE_EDIT', true);
//define('DISALLOW_FILE_MODS', true);
/**
 * #ddev-generated: Automatically generated WordPress settings file.
 * ddev manages this file and may delete or overwrite the file unless this comment is removed.
 * It is recommended that you leave this file alone.
 *
 * @package ddevapp
 */

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Authentication Unique Keys and Salts. */
define( 'AUTH_KEY', 'UTmyWJBMPQDCUHQfPccrKujOcoJCQFHKqrZWbcnoPyxjzFGyomxPOMiDKwTfGdsE' );
define( 'SECURE_AUTH_KEY', 'XcYHCXsVGehwLfUyoGiSfFmBGCquLTgltCmmmgFKRtbApWvLPbzqhjWBddoAwDEG' );
define( 'LOGGED_IN_KEY', 'DcBsbFvFwaNGwwqzyxmYdWYKccXmeZVMSjjcdFRtKUYGuvgQCpZherxqhemPiIYi' );
define( 'NONCE_KEY', 'QvAAFAsfzxTNAVLRSeGuextmwiBKlydUtXgodmNqqGXwqvHGQjgAcHAtWWDxqUuv' );
define( 'AUTH_SALT', 'ByCENuSoHmLxBLEizbkbceuZCvrbjYzKYpCRQABwopfEjeCBlwcKsGDZGkfgGiqD' );
define( 'SECURE_AUTH_SALT', 'vOiRobzjGBqGCGeIgNRLnzhxZGIwHZhegKakwddMDLSDKafWPRNWZXlkaRYvcDwB' );
define( 'LOGGED_IN_SALT', 'TgddJwCKDoZojwfdPdNxHryjcxZhbZqGhkklDraIBpexRWIJbBkCzShqCUXoFOfm' );
define( 'NONCE_SALT', 'CUJOiNBTBrJPKufGfNryjCkwRixnxureyQziQKWsozzNDYGMeEQZMMRQFCwqUkvb' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
defined( 'ABSPATH' ) || define( 'ABSPATH', dirname( __FILE__ ) . '/' );

// Include for settings managed by ddev.
$ddev_settings = __DIR__ . '/wp-config-ddev.php';
if ( ! defined( 'DB_USER' ) && getenv( 'IS_DDEV_PROJECT' ) == 'true' && is_readable( $ddev_settings ) ) {
	require_once( $ddev_settings );
}

/** Include wp-settings.php */
if ( file_exists( ABSPATH . '/wp-settings.php' ) ) {
	require_once ABSPATH . '/wp-settings.php';
}
