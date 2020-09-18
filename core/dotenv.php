<?php
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

var_dump(getenv('DB_CONNECTION'));
var_dump($_ENV);
die;

define('env', $_ENV);
