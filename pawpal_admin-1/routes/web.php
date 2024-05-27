<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/coming-soon', function () {
    return view('coming-soon');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/empty-cart', function () {
    return view('empty-cart');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/my-account', function () {
    return view('my-account');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/shop-4-column', function () {
    return view('shop-4-column');
});

Route::get('/single-product-variable', function () {
    return view('single-product-variable');
});

Route::get('/single-product', function () {
    return view('single-product');
});

Route::get('/contact-list', function () {
    return view('contact-list');
});

Route::get('/shop-admin', function () {
    return view('shop-admin');
});

Route::get('/contact-list', function () {
    return view('contact-list');
});

Route::get('/edit-product', function () {
    return view('edit-product');
});

Route::get('/add-product', function () {
    return view('add-product');
});

