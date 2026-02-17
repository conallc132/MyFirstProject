<?php

use Illuminate\Support\Facades\Route;

class Job {
    public static function all():array
    {
        return [
            [    
                'id' => 1,
                'title' => 'Manager',
                'Salary' => '50,000'
            ],
            [    
                'id' => 2,
                'title' => 'Engineer',
                'Salary' => '40,000'
            ],
            [    
                'id' => 3,
                'title' => 'Technician',
                'Salary' => '32,000'
            ]

            
        ];
    }
}

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs',  [
        'jobs' => Job::all()
    ]);
    
});

Route::get('/jobs/{id}', function ($id) use ($jobs) {

 $jobs=\Illuminate\Support\Arr::first($jobs, fn($job) => $job['id']);
    return view('job', ['job' => $job]);
}

Route::get('/contact', function () {
    return view('contact');
});