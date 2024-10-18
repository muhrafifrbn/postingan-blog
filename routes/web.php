<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home Page"]);
});

route::get("/about", fn() => view("about", ["title" => "About Page"]));

Route::get("/contact" , fn() => view("contact", ["title" => "Contact Page"]));

Route::get("/blog", fn() => view("blog", ["title" => "Blog Page"]));