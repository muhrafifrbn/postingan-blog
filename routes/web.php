<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

route::get("/about", fn() => view("about", ["title" => "About"]));

Route::get("/contact" , fn() => view("contact", ["title" => "Contact"]));

Route::get("/posts", fn() => view("posts", ["posts" => Post::all(), "title" => "Posts"]));

Route::get("/post/{post:slug}", function(Post $post) {
  
    return $post;
});

Route::get("/tester", fn() =>  Post::all());