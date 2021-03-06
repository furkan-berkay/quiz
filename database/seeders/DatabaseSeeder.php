<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UserSeeder::class,
            QuizSeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class,
            ResultSeeder::class
        ]);

        /*\App\Models\User::insert([
            'name' => 'Furkan Berkay',
            'email' => 'fb0990@hotmail.com',
            'email_verified_at' => now(),
            'type' => 'admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => \Illuminate\Support\Str::random(10)
        ]);*/

        // \App\Models\User::factory(5)->create();
        // \App\Models\Quiz::factory(10)->create();
    }
}
