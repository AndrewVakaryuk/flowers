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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'flowers' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a.gXi El,fN4=K$d)=Cp~EIj%K-^x2 PA?L-lvC3(S%w+j#/Ho~i`Q-c@3-pdR[K' );
define( 'SECURE_AUTH_KEY',  '(nM>$Vt6{RyY~Ce6/9mm&<ezX0@`iVsZjXIWj4FzEBYR9R@s%0*GS_DN,3E?;ucL' );
define( 'LOGGED_IN_KEY',    '&`d:C~N4Txq3rTu+AfYOv.2M|0|7hE%0LLp^wVTA)IXSofn-OQz`Y!>gVpe=REFp' );
define( 'NONCE_KEY',        'Y2CA}Di=0rZ!|}DiWtxLI).R~0]#A,UaE{{(E f:,9viHRGz,onVA9M&~;;%k!W5' );
define( 'AUTH_SALT',        'B1>Vy3B#*][0{SR~|)3/mlAoe)h6T@]UFLMlQM$LD^3_v{J!OC={?G4?Njz^ge*4' );
define( 'SECURE_AUTH_SALT', 'KNY%-+c!*1Z`h<8{T])ficO6%mzA`=j~a)a]-=I_5JnuAn`AYJk;/V>!aF:JjDyd' );
define( 'LOGGED_IN_SALT',   ']8@t2kU3ux`tI,_Z}FEoO^?xWFZiZ,|]v)|74dDUN3>aC?,[{(i]C$qLhy<m3#b2' );
define( 'NONCE_SALT',       'm`_Ck@=,*KiA(maV#T-QKV+j]cAp8W}*#ca3ZYi>/Rv_}%SA@EQPDTj[MjLXv47D' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
