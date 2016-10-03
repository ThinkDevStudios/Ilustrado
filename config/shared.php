<?php

/*----------------------------------------------------*/
// Database
/*----------------------------------------------------*/
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = getenv('DB_PREFIX') ? getenv('DB_PREFIX') : 'ir_';

/*----------------------------------------------------*/
// Authentication unique keys and salts
/*----------------------------------------------------*/
/**
 * @link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service 
 */
define('AUTH_KEY',         'pjGO8UYP#t|NJJp6>~-<Ds|6<sRsdm.E2si=>ZiZOg)Fj=&Ed+q|n|-:3%E2|+uD');
define('SECURE_AUTH_KEY',  '^VurK8;JL`4g:cV[VqRH|Zy2=]EzEXe5hz[RPyd&oW{T(T _mX_-?@1==J-I&d`!');
define('LOGGED_IN_KEY',    'x+*!=>j8yX-j;4Mb9]u<R0><V m><ux|H8rGXN,QFdZLG&s,D/Mmjr:$-P?nmF]A');
define('NONCE_KEY',        '%^Dbndd2c;#5ou`K#fVnRCf9t|mF~0BTQj-iUy$~QlK]b`@1iCi )|eiwXzB1t7P');
define('AUTH_SALT',        'bst.u-0-{3wHDjzjt]PV@&78s>oG1|5[xx=>eU>OI>mbcgwp{L+c4<:_]|6;*_Hx');
define('SECURE_AUTH_SALT', '(XsSyjcdSOU}}-n|B4_Nc,*@?4l);%#p9WCRPb(kE2|4zj*]az;NL#oeTaaslR.k');
define('LOGGED_IN_SALT',   'RB/y_|K9c)zzmytP$G_0I/l(GLKVGC]wnJ-%w| <-jo!G*.2XWQ^>9u:{yqL/~D%');
define('NONCE_SALT',       'vU/dFt|e*X4JMStrSs| m!+A1vhA>Xq:g[3~AA:5u-C7w6[^l:6|huMe Gn97= G');

/*----------------------------------------------------*/
// Custom settings
/*----------------------------------------------------*/
define('WP_AUTO_UPDATE_CORE', false);
define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy blogging. */
define('WP_ALLOW_MULTISITE', true);
// define('MULTISITE', true);
// define('SUBDOMAIN_INSTALL', false);
// define('DOMAIN_CURRENT_SITE', 'pantheon.dev');
// define('PATH_CURRENT_SITE', '/');
// define('SITE_ID_CURRENT_SITE', 1);
// define('BLOG_ID_CURRENT_SITE', 1);

