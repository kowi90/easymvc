<?php

include '.\helpers\Route.php';

Route::add('', 'MainController', 'index');
Route::add('articles', 'MainController', 'articles');
