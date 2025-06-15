<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home-pages');
});
Route::get('/projects', function () {
    return view('pages.project');
});
