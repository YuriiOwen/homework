<?php

use Homework\Route;
use \app\Controller\DefaultController;
use \app\Controller\UserController;

Route::get('/', [DefaultController::class, 'homepage']);
Route::get('/about', [DefaultController::class, 'about']);
Route::get('/contacts', [DefaultController::class, 'contacts']);

Route::get('/users/create', [UserController::class, 'create']);