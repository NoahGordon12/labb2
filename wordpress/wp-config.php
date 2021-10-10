<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'labb2' );

/** MySQL-databasens användarnamn */
define( 'DB_USER', 'root' );

/** MySQL-databasens lösenord */
define( 'DB_PASSWORD', '' );

/** MySQL-server */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F-a faq;i0Sv#96DJKiJ]i:_hpi1,1ZneW6sG#$JY8M8(7W]wYnhd],v8WVo[32M' );
define( 'SECURE_AUTH_KEY',  '|G;LOs<mvHfBY*a%#&oIDY<-I$+( 75M33I!um@oC@=i]~FZ&U%6Z36pXQ(q3bzQ' );
define( 'LOGGED_IN_KEY',    'xs}_~Scqj2yx?sB9{QX< MX,2m}P{fXo6FmP<6{H1J_KM|uNM87+`Lz5jXqtb]w[' );
define( 'NONCE_KEY',        '(lagYG*+w_$p*oUBkvE6]%Z}b=77U>[]f,I IHIOdYuL+iuHUuWuzYb5(q4Lv+Y9' );
define( 'AUTH_SALT',        '[>*rZ8I2~Z5J*VdNl1Et4MV>%YAs6A08*X+#M^n+(UO_VrzX42.4KJ)}JhXk9hIW' );
define( 'SECURE_AUTH_SALT', 'CLlv+nN6.yy8Z]$DRq)i=E=6X=3%[5<WplD^KM+kDZq?jG5S*w8=AK4m-QV~c,rp' );
define( 'LOGGED_IN_SALT',   'RBNwd:O/B*mt_y0`dE9r2d#Z2L6Dt7 !{[3cYi)Iwq>inoRQhT-U5X7rR|PWc4TJ' );
define( 'NONCE_SALT',       'T(mX~&rpY)r&d+N<1cb$LYW#7AItZ>C~5`O2WI:DzUfygh/iJE~`jme)8ec[(tMl' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');