<?php
/*
*
* Veritabanı bağlantısı için
* gerekli bağlantı bilgilerinin
* bulunduğu ayar dosyası.
*
*/

header('Content-Type: text/html; Charset=UTF-8');
date_default_timezone_set('Europe/Istanbul');

define('MYSQL_HOST',	'sdb-u.hosting.stackcp.net');
define('MYSQL_DB',		'iletisimdb-323131c586');
define('MYSQL_USER',	'iletisimdb-323131c586');
define('MYSQL_PASS',	'21Apple21');

include 'db.php';
