<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

route::get("/about", fn() => view("about", ["title" => "About"]));

Route::get("/contact" , fn() => view("contact", ["title" => "Contact"]));

Route::get("/posts", fn() => view("posts", ["title" => "Posts"]));

Route::get("/post/{id}", function($id) {
    $data = [
        ["id" => "satu", "nama" => "Chelsea"],
        ["id" => "dua", "nama" => "Madrid"],
        ["id" => "tiga", "nama" => "Barcelona"],
    ];

    $data = Arr::first($data, function($el) use ($id) {
        return $el["id"] == $id;
    });
    return $data ? $data : "Erorr";
});