<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'fedledsport_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UvB3T/u@+Qt] }CCyO[cnAoOP`(ee)5te*8MDSDW[~+%NJ`ioS$waI9cJ6u1ZF*+' );
define( 'SECURE_AUTH_KEY',  ';|7WYre|9NF!Mg~pP1U<+mN5bm{~nRfE/AP0BK!s3wZ.&!Wq<Az.hnv7UV2P{40^' );
define( 'LOGGED_IN_KEY',    '#2>1(r-DPK-pV4LLy$SI~u!GZM`fhfA?J(e9U!}QB606iRWi&}xFXQ[@UpCD+5sH' );
define( 'NONCE_KEY',        '_nU2@x2dvM?PQw*cSg#}1C&_f{i]CZ!>slXF_|S672%Uu tBnu.T~>5=t{SW(nnP' );
define( 'AUTH_SALT',        'S6W5i20@e#q]?~foUuu^S-_vJ<Ks:fM+(;NNIHe2(FyfuFo+8=z|u[}5}6)_q>s<' );
define( 'SECURE_AUTH_SALT', ']}2_gJzojKh O-6MXh~~6xO1_&j3<W9Y;h0ZyMJYSRar F6zfi<x-ljppG5,Q>(r' );
define( 'LOGGED_IN_SALT',   '*|}0TW#Y3T7OUS}#D8kA9Kj4kCMHN/#nMWYeB/5]OzPX>}GD:A~LS7JZW]5h<>cM' );
define( 'NONCE_SALT',       'E?g<<j~Y/MeHG}(1@>>xLtjH&UJ7]0@8br=Od^ :iIPrr,CrMxIa$ S2(Pp6oD>R' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
