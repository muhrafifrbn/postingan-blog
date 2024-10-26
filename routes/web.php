<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

route::get("/about", fn() => view("about", ["title" => "About"]));

Route::get("/contact" , fn() => view("contact", ["title" => "Contact"]));

Route::get("/posts", fn() => view("posts", ["posts" => Post::all(), "title" => "Posts"]));

Route::get("/post/{post:slug}", function(Post $post) {
  
   return view("post", ["post" => $post, "title" => "Single Posts"]);
});

Route::get('/author/{user:username}', function(User $user) {
    return view("posts", ["posts" => $user->posts, "title" => count($user->posts). " Article By ".$user->name]);
});

Route::get('/category/{category:slug}', function(Category $category) {
    return view("posts", ["posts" => $category->posts, "title" => count($category->posts). " Article By ".$category->name]);
});

Route::get("/tester", fn() =>  Post::all());