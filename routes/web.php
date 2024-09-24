<?php

use App\Models\Post;
use Illuminate\Support\Arr;
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

Route::get('/posts', function () {
    return view('posts', ['title' => 'Latest', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
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