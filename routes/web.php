<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\F1Page;

Route::get("/", F1Page::class);


Route::group(['prefix' => 'admin'], function () {
  Voyager::routes();
});
