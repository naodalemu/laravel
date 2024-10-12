<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\User;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', ['job' => Job::find($id)]);
});

Route::get('/contact', function () {
    return view("contact");
});

Route::get('/users', function () {
    return view("users", [
        'users' => User::all()
    ]);
});

Route::get('/users/{id}', function($id) {
    return view('user', ['user' => User::find($id)]);
});