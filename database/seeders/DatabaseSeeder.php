<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\Cities;
use App\Models\Posts;
use App\Models\Currency;
use App\Models\Messages;
use App\Models\Reviews;
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
        Messages::factory()->count(5)->create();
        Reviews::factory()->count(5)->create();
        Posts::factory()->count(5)->create();
        Categories::factory()->count(5)->create();
        Currency::factory()->count(5)->create();
        Cities::factory()->count(5)->create();
        User::factory(['email'=>'test@example.com'])->create();
        User::factory()->count(5)->create();




        if (config('variables.WITH_FAKER')) {
            // FAKE data
        }
    }
}
