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

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'mysql' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '6Px.-2?$TCpk6g0G$!(zQ2.tY,q/Ech8z>aG{ON t2-7aVnIvh&)vsX|hel~;#qy' );
define( 'SECURE_AUTH_KEY',  'FG$d`qOd:fgEGwfwJe:uv}CY#ZlT=?^E94he 3?hC6}ijg=H^VG]N$l<@X:Yx5,?' );
define( 'LOGGED_IN_KEY',    '1h,i&;K= %ibaiiu18U5#3s&OLQZ11{OsFC&ILZ<L+x(D>Dd.T}j`0>TMY w)N@2' );
define( 'NONCE_KEY',        'rw~tO6|]o0F5=JMf&fJ[/+zDKChqmva[a4,trEL_hc0e;&PfXe8O{0TjFjV_eCa7' );
define( 'AUTH_SALT',        '+y;G|]b9@{flc?9Ufc77>*5pdS^BE;sF6[ch0tHsMU&L<wBqt>xs(k`is@(i3K^?' );
define( 'SECURE_AUTH_SALT', 's-$6#nD]IKZ9GW&[?-eh+<MuepztYIe=Qg9Dl}#mMYL~B+yE:mHER82( *X}FxM;' );
define( 'LOGGED_IN_SALT',   '%UH2?:*~qJXd1W%[yg.Yx0BA&04s@0fx-x`Hi-k nho[|WS88</7!<f^rqD}lMI=' );
define( 'NONCE_SALT',       'QK?V1pC.|xBPW( >Ia AI1*p=h[|.leDt:;x*iH6gt7dr$^Gjs1Eme$ WE6Wdkfi' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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
