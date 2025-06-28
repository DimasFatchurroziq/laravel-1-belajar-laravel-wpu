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
    $posts = Post::all();
    $title = 'Blog Page';
    return view('posts', compact('posts', 'title'));
});

Route::get('/posts/{post:slug}', function (Post $post) {
    $title = 'Single Post';
    return view('post', compact('post', 'title'));
});

Route::get('/authors/{user:username}', function (User $user) {
    $posts = $user->posts; 
    $title = count($posts).' Article By '.$user->name;
    return view('posts', compact('posts', 'title'));    
});

Route::get('/categories/{category:slug}', function (Category $category) {
    $posts = $category->posts; 
    $title = 'Category : '.$category->name;
    return view('posts', compact('posts', 'title'));    
});

Route::get('/about', function () {
    $title = 'About Page';
    return view('about', compact('title'));
});

Route::get('/contact', function () {
    $title = 'Contact Page';
    return view('contact', compact('title'));
});
