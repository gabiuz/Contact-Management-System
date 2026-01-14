<?php

use Illuminate\Support\Facades\Route;

Route::get("/register", function () {
    return view("auth.register");
})->name("register");

Route::post("/register", function () {
    return redirect()->route("login");
});

Route::get("/login", function () {
    return view("auth.login");
})->name("login");

Route::post("/login", function () {
    return redirect()->route("dashboard");
});

Route::get("/dashboard", function () {
    return view("dashboard");
})->name("dashboard");
