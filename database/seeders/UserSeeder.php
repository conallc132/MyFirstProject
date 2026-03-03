<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create a few users (matches your columns: first_name + last_name)
        User::factory()->count(10)->create();
    }
}
