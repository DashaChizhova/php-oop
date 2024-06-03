<?php

use App\Router\Route;

return [
Route::

    '/home' => function (){
        include_once APP_PATH.'/views/pages/home.php';
    },
    '/movies' => function (){
        include_once APP_PATH.'/views/pages/movies.php';
    }
];