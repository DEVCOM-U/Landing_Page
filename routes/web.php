<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('livewire.admin');
});

// Route::get('/info', function () {
//     dd(phpinfo());
// });
