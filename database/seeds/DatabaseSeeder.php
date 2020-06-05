<?php

use App\Lesson;
use App\Question;
use App\User;
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
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 15)->create();
        factory(Lesson::class, 5)->create();
        factory(Question::class, 20)->create();

    }
}

