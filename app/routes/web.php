<?php

use app\lib\Route;
use app\controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/contacto', function() {
  return 'El contacto';
});

Route::get('/contacto/:id', function($id) {
  return 'El contacto con id ' . $id;
});

Route::dispatch();