<?php
require_once __DIR__ . '/dotenv.php';
require_once __DIR__ . '/whoops.php';

$routes = require_once __DIR__ . '/../routes/web.php';
$route = new \Core\Route($routes);

function dd($dump)
{
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';
    die;
}
