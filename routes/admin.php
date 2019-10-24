<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::delete('permissions/destroy', [PermissionsController::class,'massDestroy'])->name('permissions.massDestroy');

    Route::resource('permissions', PermissionsController::class);

    Route::delete('roles/destroy', [RolesController::class,'massDestroy'])->name('roles.massDestroy');

    Route::resource('roles', RolesController::class);

    Route::delete('users/destroy', [UsersController::class,'massDestroy'])->name('users.massDestroy');

    Route::resource('users', UsersController::class);
});
