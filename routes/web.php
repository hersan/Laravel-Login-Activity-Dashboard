<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::redirect('/home', '/admin');

Auth::routes();
