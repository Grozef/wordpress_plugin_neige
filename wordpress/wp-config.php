<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_theme' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iAS+VF-1z2.,0d?CwZ2J?xOlv:F9FmJ?`8gzXG+1]6{$05g`z0JQpLlA8=QZR5j^' );
define( 'SECURE_AUTH_KEY',  '{Z:!sv)5zzigB]D.OLbLeGA^YqVv&^}f^rB7QCX/<2!+$XrXJ :0x<}?RX &mJN ' );
define( 'LOGGED_IN_KEY',    'pneZVMwN57KfFy.AWRFCI1Y-Y3JxqJ3211M(y})ob,so/h5K&#`vj)I.#9)X!zE/' );
define( 'NONCE_KEY',        'O,w!RgRTb5bpQ{$Oy((Pk>b*P+my>;Q=tL0zv #boY49r:A-f|fbQk6)`ZeY2__L' );
define( 'AUTH_SALT',        '=.5Ingr|GG%z>sWE>,+P{8@v<3;_F,lKGl|a5<NtxqO d(J,`1}[Q=`3QXCO$0Pa' );
define( 'SECURE_AUTH_SALT', 'L:}uTg,kJzw8+vtZ&ujW{ H5c%;Y,)~C+YY{DXIz3ie}kyX,!=fF+fmx|-rb A%x' );
define( 'LOGGED_IN_SALT',   'HaRmTaXn9Fu!Jtb$!_?;^8`T!2sp;p$SDC:u,5*;(<sZ9_|}sFoLoK$puf_,>93g' );
define( 'NONCE_SALT',       '|efgs2ry^rsrj$+hR2`-QUk-`{+grkg/j/`9,E),1xBeUAit1|qjl;5~<.L:@B/1' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_theme_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
