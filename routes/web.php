<?php

Route::get('/', function () {
    return view('lab.index');
})->name('lab.index');

Route::get('/contact', function () {
    return view('other.contact');
})->name('other.contact');



