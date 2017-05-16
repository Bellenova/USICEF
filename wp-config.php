<?php
# Database Configuration
define( 'DB_NAME', 'wp_usicef' );
define( 'DB_USER', 'usicef' );
define( 'DB_PASSWORD', 'clp6k51LtmxInLSad8DY' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '(f;HL0+v-_`5WtpEl%;r3QUrB@Agd^I>O5xnF$@P{Yv4 l7<>2qLv ?|)v T1>}c');
define('SECURE_AUTH_KEY',  'QZd|@F#e%!tzQiRd_3q-CZvi%WxE2y+eJu}]Shj{![- CC%m~c|5XG:W_B}yVpDR');
define('LOGGED_IN_KEY',    'W*#2D|;Q$%;W8l=qDiccIuN~+E/`Y1(7 E`NmD-@|c!?t8B:4~wf/(J5I,HkU0tu');
define('NONCE_KEY',        '!/Q/;Hbt<a#8k|<0#*xc$HI7^Z-A yPhFg-Gc+~D.;K&Ba#j``)Nx+B:FVU8G#Ug');
define('AUTH_SALT',        'FlL=XUt+(tg;wlwR;^<|](hAwu`pH*$vCaMtAgZTkmsgZQiP~.Ji(-|1#@m>/C$G');
define('SECURE_AUTH_SALT', 'Di^)hK#W|NLdt;3q&5lJ-5Aj1LkjE4n9uK-8{[)?TL6?gw4I<[9:-X,UFsoUx<F7');
define('LOGGED_IN_SALT',   'FE`<FmH4d_@+J?D%%8v5ajz-::Q(0a^Dk%30SJ;psl4/(D#Mj!zQ)U6nJV6%ZxK%');
define('NONCE_SALT',       'eVQBsApmiji|y67StLdG;x0~Za|PcX-SxVQC!Fe3K}b``W6g1`>`almx&,8k?n2c');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'usicef' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '6752552634ceb28aa413c0c147b76bb7a9e66488' );

define( 'WPE_CLUSTER_ID', '100400' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'usicef.wpengine.com', 1 => 'www.usicef.org', 2 => 'usicef.org', );

$wpe_varnish_servers=array ( 0 => 'pod-100400', );

$wpe_special_ips=array ( 0 => '104.198.107.187', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
