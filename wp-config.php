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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'younes');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'diouriyouri');

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
define('AUTH_KEY',         '!?={9J7[(F8`OuJOuG[w*Ty$VJ&o#/`ENQ )TLA.^1UbrQcHddS1!T^kL/BozUK[');
define('SECURE_AUTH_KEY',  '|#uU!A(r>wodHsU[ZU<deO>^H?^E|J@2RQ@fAM0-pbuEW q7UYbLO#L3jUgN~*N_');
define('LOGGED_IN_KEY',    '@xRg()J~9g?arLHgVR6zgDSwp6x8WNq0{SO9Up$,4,!B{(syw^m:UC _V#6BSSk9');
define('NONCE_KEY',        'GMN5z&wG>-Zwu3zgF*eF7ebKIPxlm/9hGtViT#6!S>*(78p)gM69DRlDZqP&]-sA');
define('AUTH_SALT',        'd3#VPLg3?9ia3KW^RRiq)<*Uy=3PZb{h@KX2(SuL/L)8a>p|(|.|8s]7%uH@|5fb');
define('SECURE_AUTH_SALT', 'HOK+.jFqW@3_*MDpG/Cl%VbQtI9QNY(Q5%52*d%ocRf%XaK;@-~:S6ze]IBHlVrf');
define('LOGGED_IN_SALT',   '%`ZcM<y$LMHnPAQ.WjuuW,] C}XKmdTP+$rQUZLPEN^V@i:kgBAR|S,g5r:%hv6_');
define('NONCE_SALT',       'ji9LN0eYy6x5G|C= 3R <K^Fl[QDfzYim^a=5|ww ;Y?$CzQH}0t>5J_sxYlk]e~');
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