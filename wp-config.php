<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
define('WP_HOME','http://thuonghieubinhdinh.com');
define('WP_SITEURL','http://thuonghieubinhdinh.com');
// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'zadmin_thuong3921');

/** Username của database */
define('DB_USER', 'zadmin_thuon135');

/** Mật khẩu của database */
define('DB_PASSWORD', 'jybu9e9us');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZhI2@@{/1[2x1MUSh2K7kLNbD|EHzUGgThCX7CJ8[-{D+&AVz8qY9s^u^?P|f0Oa');
define('SECURE_AUTH_KEY',  ')dXNv,McI+d@Q&MFa]cw{lwcYeNOIZSLZ(Y&qdi.E{A|>dKm)g#~%r^~0>`H/EO`');
define('LOGGED_IN_KEY',    'W{pyiiV;m(cU!r`90EhxNF7]LnRa6t2!M O0!.1DW(@O#X|u3f::Rg} z8j/%vfE');
define('NONCE_KEY',        'flcamRsi[treBL-$23LFYzX(&)ZW9O%w069nymg9fnHomz+cOHy[|GZH/S^3>M(d');
define('AUTH_SALT',        'x:[!ThnjF2U5Ai|E}wn.8.=!.n)7JhbYI^Ii:H;Dydjp0L+pv#vb]]Um:Y8#xG^)');
define('SECURE_AUTH_SALT', 'l^7@Ck>JP))Q;$5fIwQ3&M!kv|0!R~Y5[EN/G3zh?LaP5Vl1@$z3Ki@0Pplb+/nF');
define('LOGGED_IN_SALT',   'oSO0LocI0ESJXFg-^W%EwRi+KVH,s|V$HWz}b80X-W-.P4Uf?*StNlnnEF,vItq[');
define('NONCE_SALT',       ':K_N:!.YqVuNUiB6ab0,&[]nJP}mItVwmK.nJ#s5g.6`P up`>8:/ou)FdMfayeK');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'ab_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
