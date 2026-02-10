<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs',  [
        'jobs' => [
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

            ]
        ]);
    
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        1 => [
            'id' => 1,
            'title' => 'Manager',
            'Salary' => '50,000',
    
        ],
        2 => [
            'id' => 2,
            'title' => 'Engineer',
            'Salary' => '40,000',
            
        ],
        3 => [
            'id' => 3,
            'title' => 'Technician',
            'Salary' => '32,000',
            
        ]

        ];
    $jobs=\Illuminate\Support\Arr::first($jobs, function ($job) use ($id) {
        return $job['id'] == $id;
    });
    return view('job', ['job' => $jobs]);
});

Route::get('/contact', function () {
    return view('contact');
});