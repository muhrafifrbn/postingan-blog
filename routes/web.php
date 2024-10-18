<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

route::get("/about", fn() => view("about", ["title" => "About"]));

Route::get("/contact" , fn() => view("contact", ["title" => "Contact"]));

Route::get("/blog", fn() => view("blog", ["title" => "Blog"]));