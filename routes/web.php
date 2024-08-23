<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/blog-details-only', function () {
    return view('blog-details-only');
});