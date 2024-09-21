<?php

<<<<<<< HEAD
use App\Models\Post;
use Illuminate\Support\Arr;
=======
>>>>>>> 0e6a8043923a592997e1441b26d73f89cf505de1
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

<<<<<<< HEAD
Route::get('/posts', function () {
    return view('posts', ['title' => 'Latest', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {

    $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
=======
Route::get('/latest', function () {
    return view('latest', ['title' => 'Latest']);
>>>>>>> 0e6a8043923a592997e1441b26d73f89cf505de1
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