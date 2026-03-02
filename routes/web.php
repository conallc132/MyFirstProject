<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {

    $jobs = [
        ['id' => 1, 'title' => 'Manager', 'salary' => '50,000'],
        ['id' => 2, 'title' => 'Engineer', 'salary' => '40,000'],
        ['id' => 3, 'title' => 'Technician', 'salary' => '32,000'],
    ];

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $jobs = [
        ['id' => 1, 'title' => 'Manager', 'salary' => '50,000'],
        ['id' => 2, 'title' => 'Engineer', 'salary' => '40,000'],
        ['id' => 3, 'title' => 'Technician', 'salary' => '32,000'],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    abort_if(!$job, 404);

    return view('job', [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
