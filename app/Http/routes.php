<?php

Route::get('/', function() {
    $users = factory(App\User::class, 5)->make();
    return view('pages.home', compact('users'));
});

Route::get('about', function() {
    return view('pages.about');
});

Route::get('contact', function() {
    return view('pages.contact');
});