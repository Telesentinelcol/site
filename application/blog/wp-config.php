<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'tele_blog');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'dbremote');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', "2jVX7M4mBM3DZmSD"); 

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '127.0.0.1');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'pZK,|W=K5_Z`Wy[O# =!,Bb-zh)o&_g-PfCsY3ZD)]e%hiNz DU=59;!-~e|lo+v'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'Ilyy6z%xp[w[Y_p:Q!;DskqER~q/Rf{1|4v<:`GNiozu-@CIL#tL>EV/}0>L,3K$'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 't3:kQQu+B?j(]^kLJQ(}|D582|hBPc2guYz9@(?|?`D,Mcv6ax2cj XeV`itr8n%'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'ivt6ay&kbT1erD1QyO0bsQ%aaW@Kz`=R`9jLhg{hwg-0!w%jcz$WZ+ TP=CDW%(+'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '9-t+xTeAJOtEz+7j=EK-WML2atl0tvGnW!lsw}03i~`/J1&lkR`-+b<Ug@bs-)Cx'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'w[FF!9$w0Rw,()Jw+#t|Qxi>g$clS<|Z]izmzdi!?ilPbfoHVEvAQt,9XB&I-~fh'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'mTC8gb+`:^~yK?:N5hh,1p.~pom6<$yI#Gyb;]Zlk=g:)}}iVV48vTW2-F-g_O-w'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '1ie^{-3V5FKO[$|P98,m}2``,nz+BDTzDVs!l?]x(P:[R]i)@-,Uo;hd.C^^kc7B'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

define('FS_METHOD', 'direct');

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

