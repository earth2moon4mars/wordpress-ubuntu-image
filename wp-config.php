<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', '' );

/** MySQL数据库用户名 */
define( 'DB_USER', '' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', '');

/** MySQL主机 */
define( 'DB_HOST', '');

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-NrK|?j0~UNzPF|n4V0*u[PP$-VoXRrD_sODF:,<L?+hn#h,-}eT;wO}mR@yyQtt');
define('SECURE_AUTH_KEY',  'AB%UYYlu?ayG+gYq8)D|_-lvWYPJ-G{kMk9hSL_{,5+jcZ2?z+P N3P2PloXih.Y');
define('LOGGED_IN_KEY',    'R7fXMMYTA4Kn-sXk4xSaV^7FinN=^u**LF$[_~c9FoG@LgK5CI5]S,y;.YwigsH^');
define('NONCE_KEY',        'hrl/n/3i/{n`C{$l-SqB:U;a<sq_a|c)n:rvgk_[M]5NV#ky)P=&3!Ey|F-Fkk:v');
define('AUTH_SALT',        '2vAN4/w@$sj~G:Fq[rHElYw`i*#cUB`|UzlMNQq]asDfgcoa#jXXc$E^5N}|6E8L');
define('SECURE_AUTH_SALT', '{p0FZqh9CXt#wi&0h6J1k))4--h,jHJh^`N4*hd9Eby%)?qu/t:6|B]?Mon?zDa;');
define('LOGGED_IN_SALT',   ',eVNm_!hBc3z,jIiR)/smCuKe{W4D9vxMK{9vc|dd=:Fw0+ir$,Zf`40@ @qQk@V');
define('NONCE_SALT',       '1eme?ot9OJvv>WFQv1JyOzl!}G$0%IN&Rn|!=1tS_|T%9P+?.gxw&*l_BEc|;Q]u');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
