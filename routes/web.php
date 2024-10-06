<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
    //$posts = Post::with(['author','category'])->latest()->get();
    $posts = Post::latest()->get();
    return view('posts', ['title' => 'Latest', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    //$posts = $user->posts->load('category', 'author');

    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    //$posts = $category->posts->load('category', 'author');
    return view('posts', ['title' => 'Articles in: ' . $category->name, 'posts' => $category->posts]);
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