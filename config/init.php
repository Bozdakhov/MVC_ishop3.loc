<?php

define("DEBUG", 1); //РЕЖИМ: РАЗРАБОТКА 1, ПРОДАКШН 0. dev 1/prod 0
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/ishop/core');
define("LIBS", ROOT . '/vendor/ishop/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'Luxury watches');

//  http://ishop3.loc/public/index.php
$app_path="http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

//  http://ishop3.loc/public/
$app_path=preg_replace("#[^/]+$#", '', $app_path);

//  http://ishop3.loc
$app_path=str_replace('/public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';