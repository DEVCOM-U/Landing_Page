<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/activity', function () {
    return view('pages.activity-pages');
});

Route::get('/projects', function () {
    return view('pages.project-pages');
});