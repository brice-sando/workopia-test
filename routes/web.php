<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    $title = 'Available Jobs';
    $jobs= [
        'Web Developer',
        'Database Admissn',
        'Software Engineer',
        'System Analyst', 
    ] ;

    return view('jobs.index',compact('jobs','title'));
})->name('jobs');

Route::get('/test', function (Request $request) {
    return [
        'method' => $request -> method(),
        'url' => $request -> url(),
        'header' => $request -> header(),
        'userAgent' => $request -> userAgent(),
    ];
})->name('test');
