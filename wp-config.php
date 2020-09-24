<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'wordpress' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CAGpJ0_?Dq:eJRbH)T@dD]*kymr1do5loWido:Wz0nS3ZE,Mk<KOr<=rU9j7RJyf' );
define( 'SECURE_AUTH_KEY',  ':SnEau6N7FE:Tn~JxPqe.K@<XZ,0W.BD5#Wa&*u,SuQ2=UG$!dzI2*0mZ)leZZ@f' );
define( 'LOGGED_IN_KEY',    'hl-R{AG8c{nQD`XEt2h?b//B.9(6U0$jPU9qAwix}6?3=H+MenYU6?p;yG)O/pWS' );
define( 'NONCE_KEY',        '|$6qnt3T$}|/FGZ+b3>4w};io&NeA2ZFQ&azfBI-Q=l8eapGsFu:r9Uc)J4]vv?R' );
define( 'AUTH_SALT',        ';DLrPYtBJ)FoJ 5Nd=IXWAuM ;-p2hKU>tzZ0[?S{{:i:,1H}iY=q[8ysL|acY9A' );
define( 'SECURE_AUTH_SALT', '0}:VRQsEmz:{Gi0Bc;#9W*LU%R,I}1G;>#Km=z@;~!K^m^iG/1UdJIQ,:Xw?9]SF' );
define( 'LOGGED_IN_SALT',   '|_:ndah4+Hb[<t*aGOd*f.Y1$ATQJy(O KP6ZK[v,=y*_<EV>Y-RnnN)s&qb|ZD ' );
define( 'NONCE_SALT',       'Qx`I^2+Hmr 2-Mo=W`&JSm6*[eRBj.[$MM]n$?x4>c{9/?8pmRdt6/#NM;*02q|N' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';
