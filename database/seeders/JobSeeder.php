<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        // Create 100 jobs
        Job::factory()->count(100)->create();
    }
}

