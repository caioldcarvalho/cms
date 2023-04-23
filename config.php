<?php

$config = include_once "config/config.php";

define("DB_HOST", $config['db_info']['hostname']);
define("DB_NAME", $config['db_info']['database']);
define("DB_USER", $config['db_info']['username']);
define("DB_PASS", $config['db_info']['password']);

// EOF
