<?php

use Illuminate\Support\Facades\Route;
use App\Models\Driver;


Route::get('/', function () {
  return view('f1', ['drivers' => Driver::all()]);
});
