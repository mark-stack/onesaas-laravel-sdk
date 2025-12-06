<?php

use Illuminate\Support\Facades\Route;
use OneSaas\SSO\Http\Controllers\LoginController;

Route::middleware('web')
    ->prefix('onesaas')
    ->group(function () {
        Route::get('login', [LoginController::class, 'handle'])->name('onesaas.login');
    });