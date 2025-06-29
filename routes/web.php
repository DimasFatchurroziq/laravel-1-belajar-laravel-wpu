<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

Route::get('/', function () {
    $title = 'Home Page';
    return view('home', compact('title'));
});

Route::get('/posts', function () {
    $posts = Post::latest()->filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString();

    $title = 'Blog Page';
    return view('posts', compact('posts', 'title'));
});

Route::get('/posts/{post:slug}', function (Post $post) {
    $title = 'Single Post';
    return view('post', compact('post', 'title'));
});

Route::get('/about', function () {
    $title = 'About Page';
    return view('about', compact('title'));
});

Route::get('/contact', function () {
    $title = 'Contact Page';
    return view('contact', compact('title'));
});
