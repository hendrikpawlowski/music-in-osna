<?php

// use Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/submit-gig', function () {
    return view('submit-gig');
})->name('submit-gig');

Route::post('/submit-gig', function (Request $request) {
    dd($request->input('band'));
    // dd('lol');
})->name('submit-gig-post');