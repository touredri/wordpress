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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_demo' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7IGdR$J?eQ|C%1*%+FB:v2Psk{hoBJ`4l[U1tXD;v^fLnyF{k4MD8B&!{[Pu8=|r' );
define( 'SECURE_AUTH_KEY',  'i0Pl^`r~eSR2ydsFY-<sM.G<$:l+{Hu6^eop>sTwi!$UKN 7X+.IzmE8rK0#R~kV' );
define( 'LOGGED_IN_KEY',    'Ou`|nZa[yDIBYf!};>~Mr;#or~~^OR?{L!eYj;q1++Shl*Pz>AW{AVe.|xR_uFga' );
define( 'NONCE_KEY',        'IqCrjW|:Jc<Z~kTDN$x$3FY[&WPR];G-F_4y,cys*_CKJ;}I!c_Y6}Ptlok6Xs `' );
define( 'AUTH_SALT',        'lBzZw{q&Pd=Tgn<DFNL_h<T2f{C5G]@&0b {wcDelZ~E*}mc!8yFT#efT!:^2A1*' );
define( 'SECURE_AUTH_SALT', 'Zo?pjX/KYII!KIN`1 ]VYdS3Q{;}$ThTMmO,U/yH$2aZa:dQMWlZj&9u*BZM7]F%' );
define( 'LOGGED_IN_SALT',   '+&POHJ,Uq,hE<rQ=qY`@0B +N3:qoF 9D(:2mMF`aHIV JSGs@(wS=f>bUwq^(86' );
define( 'NONCE_SALT',       'eUKiZv?(6u%FoH><SqKRAKVdXJfc<Z0g&t~k<:th.,6)Iowd=NCLH[{f^jC@L<8g' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
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
