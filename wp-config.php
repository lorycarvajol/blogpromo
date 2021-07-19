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
define( 'DB_NAME', 'blogpromo' );

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
define( 'AUTH_KEY',         'h>]GCWxn6g&wfB R)#:sl#}F}e-Hq<;]yCZx+G!}tQ_Dvznz&=_oNzz_|k4@~6 U' );
define( 'SECURE_AUTH_KEY',  '_3EwF^XS]6Ue[>C?]B@^,n;b#N0CVuYs`r?EXWFVxpiF)Wxi,y)ok1dZy#}$Jepr' );
define( 'LOGGED_IN_KEY',    'c0@oBgENy.;#4tzh5<96( 2?iBCN|gO*8La,~,auaeC25>J])0JDjp{xESc30s).' );
define( 'NONCE_KEY',        'cUk8IF4X4o f)-3i2v+S&Bz^;I{iGkm +n,p+U#=zF}8z?oqLB|XPQDou9G--W8S' );
define( 'AUTH_SALT',        '!+X3HOCq`)lr;QI#!#9{H=In^1;D.^OQdC6-Iglmk?G..P?-:CBHAxgYvrh$0?%=' );
define( 'SECURE_AUTH_SALT', 'LntvfKB~`D_.S5%F3q3{`EzF>{Z!t|7Rd&nPOs.%>*z[bZ7>(nJI?Ir,aExd]22X' );
define( 'LOGGED_IN_SALT',   'b M$oi9y1D[vIFj}=u;][WT`CNAW!?XE/@+#pBF,{.Hl|8gJiIeKsYYft$gP-p<e' );
define( 'NONCE_SALT',       'wkA,aRIPXqJiTxevyusah}jl-EO6ufv<F=B4)TwK:147/Lex|kI^#=jA]3*TKC9E' );
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
