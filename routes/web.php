<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/about/leadership', function () {
    return view('leadership', ['title' => 'Leadership Team']);
});

Route::get('/latest', function () {
    return view('latest', ['title' => 'Latest']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('profile', function () {
    return view('profile', ['title' => 'Your Profile']);
});

Route::get('/setting', function () {
    return view('setting', ['title' => 'Setting']);
});