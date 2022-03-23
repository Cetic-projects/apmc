<?php

namespace Database\Seeders;

use App\Models\Currency;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // $this->call(users::class);
        Currency::factory()->count(5)->create();
        User::factory(['email'=>'test@example.com'])->create();
        User::factory()->count(5)->create();



        if (config('variables.WITH_FAKER')) {
            // FAKE data
        }
    }
}
