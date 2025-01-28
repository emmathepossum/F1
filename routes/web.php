<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;


Route::get('/', [DriverController::class, 'all']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
