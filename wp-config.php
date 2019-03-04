<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'baza');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*H:5`aK]g*.Q$X>1m<SQ(H?/;>C*z6PGF0-HpaXTEfXHMl1OUknNVIlPt=9GK?`1');
define('SECURE_AUTH_KEY',  'axe+lv5SMOe-JD)|}c.xb{EsWUJVvjNKG;|l&yDxUow_xE<n+A-k-Kn-Tw![L){3');
define('LOGGED_IN_KEY',    'coD-^nlFeF|Z?_^^]3sI*W~$0qxe(_GW[,cGC-(84:1?ESx>7vaIIS/BIp9h,omH');
define('NONCE_KEY',        'w=_{{-9]B/_Ci^&QI1O|d5aO4)]7Wn~n`%E6`r!E0=p<M}Rg>ger=q/2|(%-8$Dn');
define('AUTH_SALT',        'Qv@)6LS,RV+p-8*y7A,oqLG%r+<8,)-cP?XXHeqn6Lvh@/MN6!5>r[CS`/U~)mjY');
define('SECURE_AUTH_SALT', '1oIMJHqZuCM)a{~_~B-Do-$)Q2VJ[OnsWR5je-1Fx6c3uV>i-Hz>6XDzLAAAIeLg');
define('LOGGED_IN_SALT',   'L/bf1LUT:$O{oi-rEL!)/<PE%Ef`prW,uJj=r}%SN?,%XQ/HlRoR%}/ES]}jWOzx');
define('NONCE_SALT',       'p1){UwZy}Pw+LBE09~y2~*R%+2`_X0LRF]6Yq`CQG~/cG4!GxU/Hx3y4%Sj8Y?-4');
/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
