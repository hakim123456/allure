<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'Allurepeiturevf');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SY-}3}&fY<]D!t4->ty)Gen_4H8-{m9@$I;/>WmMlx;MDjMjCPyn$u#QXB!!~:y~');
define('SECURE_AUTH_KEY',  'xdE@fTl`cEs(CR]zAc@m<bjE?Wgwul|Y^MVPqldkS&dy=kVh8S^,lo. x9s4w{Hi');
define('LOGGED_IN_KEY',    '^meKZaU)d5A#9H,UZ{Z`#)ia9<*Mg:,s %?S:)hEF^0$=61}v41H8hgfs[GME@F|');
define('NONCE_KEY',        'x0mi:W-kmSTq5p[blTx/5/Y4b)8]d~%qv/9;LUoLFVq!PG{iH`D`6hN~3*NHsPqq');
define('AUTH_SALT',        'i5pjc jw(#OUeYxabf$Xl4w;1V<CCScB~UjEJj6@L4{<# :F:36fb(LIv6B4,qq-');
define('SECURE_AUTH_SALT', '5[<)g[CL D^>^K, tU=>!3g*)6U, :=^e.P>kVp`b&AC5,j?6pt~R60Kr{@6VQZ0');
define('LOGGED_IN_SALT',   'H33SG KK0~Y?Na)6$;/a]WRV|#m|Zb6$a110.)G> }]<>;63R/NFP](#>In&^Fo2');
define('NONCE_SALT',       'VPQT),0Dm36|F9F^0sKKA`nkTaq8dL=m.XnB&tQ/^biwxO>@S%:#1vL!,K0NKOTL');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');