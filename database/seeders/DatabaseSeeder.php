<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'tes',
            'email' => 'tes@gmail.com',
            'password' => bcrypt('password')
        ]);

        Task::create([
            'user_id' => 1,
            'title' => 'title',
            'description' => 'description description descriptiondescriptiondescriptiondescription',
            'status' => 'done',
            'deadline' => Carbon::now()
        ]);
        
        Task::create([
            'user_id' => 1,
            'title' => 'title2',
            'description' => 'description description descriptiondescriptiondescriptiondescription',
            'status' => 'in_progress',
            'deadline' => Carbon::now()
        ]);
        
    Task::create([
            'user_id' => 1,
            'title' => 'title3',
            'description' => 'description description descriptiondescriptiondescriptiondescription',
            'status' => 'done',
            'deadline' => Carbon::now()
        ]);
        
        Task::create([
            'user_id' => 1,
            'title' => 'title4',
            'description' => 'description description descriptiondescriptiondescriptiondescription',
            'status' => 'in_progress',
            'deadline' => Carbon::now()
        ]);
        
        Task::create([
            'user_id' => 1,
            'title' => 'title5',
            'description' => 'description description descriptiondescriptiondescriptiondescription',
            'status' => 'done',
            'deadline' => Carbon::now()
        ]);
        
        Task::create([
            'user_id' => 1,
            'title' => 'title6',
            'description' => 'description description descriptiondescriptiondescriptiondescription',
            'status' => 'in_progress',
            'deadline' => Carbon::now()
        ]);
    }
}