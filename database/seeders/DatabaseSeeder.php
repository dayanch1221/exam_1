<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Registration;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com'
            $this->call([
                CourseSeeder::class,
                LoccationSeeder::class,
                SeasonSeeder::class,
            ])
        ]);
        Lesson::factory(30)->create();
        Registration::factory(200)->create();
        Student::factory(100)->create();
        Teacher::factory(10)->create();

    }
}
