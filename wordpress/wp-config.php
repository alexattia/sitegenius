<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'geniusgluwhello');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'geniusgluwhello');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Genius1106');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'geniusgluwhello.mysql.db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'op*vOtW]N:KWOlqtA&_o7@uNcr?mw1uR9ITcpayU- _?68FKf-P>+8s6Tmp|[lg$');
define('SECURE_AUTH_KEY',  'yC-EL+17&*D$W$px++NDn9:3RRQG_3/B:yH%f}]^vDsfW+.h}T%!/XZ@(yHq/,pX');
define('LOGGED_IN_KEY',    'Nu9r|ffEq@x|[p}[Y<+FA!RmziFP-|uNJa0(D!&(qvWuD`N_RQ!1:q!|X0/}0^wp');
define('NONCE_KEY',        'R-FmefEF6?!1uv@|=&R3BQ?FtPPmx>5poR-fYKk2Lyb2+@pIZDeT)4-j(&9ji7mN');
define('AUTH_SALT',        '!CSMpxn[}0&~faT+MT0v<^Z*=`=3HJwv|iu1CW=rNtc[8-^|.i?P;fZlV2>|m$LF');
define('SECURE_AUTH_SALT', '}/z U 7SJP1o8H?{%/0RjtM/FR8T/Ptxo<(@}xhibg9%Q  _n5%}tV~)A#^.ufZo');
define('LOGGED_IN_SALT',   'nl9]^QX#d-!1ItN~scp84h$:ZN|C=X.F|:/-UAaCYF}:|rxu%p. |fiVMvu_$2c>');
define('NONCE_SALT',       'Jfe0;_N`{J:=zq=$Xy^|Z[9/DZ]e$Xd?qI7dH4}ix|;J>U9A?ZfW1 0DGC!2OgN3');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');