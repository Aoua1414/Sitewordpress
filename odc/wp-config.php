<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'odc' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '!5#n _/R>RRnj0Z}G:5$?hAD+}=L,$>/yjA(D5!1W4moFn(=/i/3ub~(ZHW6rcp4' );
define( 'SECURE_AUTH_KEY',  'm* /MQ0;,1|8a)PHx#_JFch1W6k?mk[+wm}#O@+*}nmx^u_0u)b%/vt)ta5b;]O3' );
define( 'LOGGED_IN_KEY',    '.}Sng(z`FgT`8YXA3/.L$-FMYVkCP_t).)NLKOd89,*lHccumL5`ggEetvPsFXu0' );
define( 'NONCE_KEY',        '7Z}<!<SMDv,DZ9I>F(8 S*8;5x~Ix!Z68yI-/+j[p4,lo@6Mq=s]niNY`v}(a,Ku' );
define( 'AUTH_SALT',        '0=cuQsL`P$Xuy_k&WhA[iPxC< nb7*]86j]cK%3l;g!V*k63wdK[QTy(bbJ2z9.*' );
define( 'SECURE_AUTH_SALT', '=~QRTn1@OX%yk9<O?mbo_;AN$Yi}.%W:Y#h@:vTF5OEgBvpz8+:C8ypOA=q3qa7P' );
define( 'LOGGED_IN_SALT',   'y(yBFPbM$~HaWWM=)e`@FOe^t~[]OCb_s[NY^/<2e3 (3XT`g.tKT%.@rYMN${H[' );
define( 'NONCE_SALT',       '-Xw* %M?D(tQmVo!q[$MF$mOY7JB~U&*kb$,=;/PHok1)!2_=nUh:tg|+1<*e^kO' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
