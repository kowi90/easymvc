<?php

include './helpers/Route.php';

Route::add('', 'MainController', 'index');
Route::add('blogs', 'MainController', 'blogs');
Route::add('articles', 'MainController', 'articles');
