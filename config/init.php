<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/ishop/core');
define("LIBS", ROOT . '/vendor/ishop/libs');
define("CASHE", ROOT . '/tmp/cadhe');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'default');

echo $app_path = "http://{$SERVER['HTTP_HOST']}{$SERVER["HTTP_SELF]}";
