<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'About Page';
});

Route::get('/report', function () {
    return 'Report Page';
});

Route::get('/info', function () {
    return 'Info page';
});
