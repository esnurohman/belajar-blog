<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    // $posts = Post::with('author', 'category')->latest()->get();
    $posts = Post::query()
    ->latest()
    ->when(request('search'), function ($query) {
        $query->where('title', 'like', '%' . request('search') . '%');
    })
    ->get();
    
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    if (!$post) {
        abort(404);
    }
    // dd($post);
    return view('post', ['title' => $post['title'], "post" => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('author', 'category');
    $posts = $user->posts;
    return view('posts', ['title' => count($posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('author', 'category');
    $posts = $category->posts;
    return view('posts', ['title' => count($posts) . ' Articles in ' . $category->name . ' Category', 'posts' => $category->posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});