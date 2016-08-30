<?php

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cphfishing');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '$K=+/GBR`w#!Zz`}IAFP%wqD{.mPI[}]YKY2I#qM3jNr{Wbj*.xH7%r[4OxD7VzW');
define('SECURE_AUTH_KEY',  '$x|P!pmj_apelnU:(^L>Y}|C9]$-oKTv:`{c`jQa.PziKb+@k&;tE=wUz7yvM#fA');
define('LOGGED_IN_KEY',    '}l+M9:IC#&pENb/$NC+7Kg8#YVHm JsP6kOd!J_h~~s x_o= svGyd%X>OQkwD|#');
define('NONCE_KEY',        'W%hwknE s$6)E+|2(0`-|54<V[iO(M^vuf3q0k.NnBQxK|S?5wG_JA9QJLQq+>Df');
define('AUTH_SALT',        'D+/oVD~/tjz7qeKo0UntYr(|/vyhrQQ-WGD6tt?WpW>-7v>$qQ/dc}y+fx8ySTa~');
define('SECURE_AUTH_SALT', ';LtKL-Z=@l9?Mh+A_boZOWlzM.YZDQ|F)lz`n0~hx{4n&h8]ai|YV+ZcWBu(:tNa');
define('LOGGED_IN_SALT',   'Pt6 }=_m|BOBdv^7qgPGmrmrfOYfp=Mm-G3^JZt)/chSVSoQ|48HO39Bho)ru,bj');
define('NONCE_SALT',       'l{f}N|sJDRc,jDwF&5`;k5w]p,=]t8e0f|C.ko:|9&x.V<av~cPGHS)mF]?_*Uhf');


$table_prefix = 'wp_';


	define( 'WP_DEBUG', true );
	define( 'DB_PORT, 8889');
	define( 'DISALLOW_FILE_EDIT', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
