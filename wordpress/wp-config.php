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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'dweb' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'mRSMA' );

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
define( 'AUTH_KEY',         'gi~fdbbrZf6e!zb?<bkJ7G3VZB.3`h,.HO$!-m*v?Xq>7.Y w.q72r&K2PXE2{u3' );
define( 'SECURE_AUTH_KEY',  '5O$r`;aR~^?JNazYq@eL=[V]pvogQIAa=[U&qtMk_U>0:GMH=>9tNyLJl&9/kP@;' );
define( 'LOGGED_IN_KEY',    '/ko&dk`yQOp|uaKZQJ0N$~8SN)Sd$z[b/H!zEB.~isX4;,@A|4s{dRA5xc v]zm?' );
define( 'NONCE_KEY',        'Q!$NW!LK=u{Nq*ESE@QxhPA(f/+9UU(i^bp<B?vbVZHl=+htRYD_f(A*REO7z^+j' );
define( 'AUTH_SALT',        'hZ9^+]x%]?3)^:B:SrG/C36v{OIc!,y8*N>%_Gxwi8bs+Ou +W|Mx6kZ*!}pPF4-' );
define( 'SECURE_AUTH_SALT', 'EC-x=wsIK7]INn=U+>qSn~^v6EXJDj(~!:AG&]bY|EExj|X^n 0Ju,>oQwj^mvu;' );
define( 'LOGGED_IN_SALT',   'A3ubflK//i{W+dt)Z) F]`Zv#CWu|3@6Q6[6+w?rv/X@x0X<PS]#YR {dsP]s&~W' );
define( 'NONCE_SALT',       'LZ]w{(;g5_n<<*B`8}Q`.g!H#/`PT{,S3gsdkK=wrh>5q[$Fw<OG3I Si<bS%=_x' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

