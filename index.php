<?php
define('APP_PATH', __DIR__); //глобальная константа, чтобы не исп выходы назад в пути файла ../

require_once APP_PATH.'/vendor/autoload.php';

use App\App;
$app = new App();
$app->run();


