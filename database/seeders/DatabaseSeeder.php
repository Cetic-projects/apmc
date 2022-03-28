<?php

namespace Database\Seeders;

use App\Models\AdminMail;
use App\Models\Banner;
use App\Models\Category;
use App\Models\City;
use App\Models\Post;
use App\Models\Currency;
use App\Models\Message;
use App\Models\Position;
use App\Models\Review;
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
        AdminMail::factory()->count(5)->create();
        Position::factory()->count(5)->create();
        Banner::factory()->count(2)->create()->each(function ($banner) {
            $banner->positions()->attach(Position::factory()->create());
        });
        Message::factory()->count(5)->create();
        Review::factory()->count(5)->create();
        Post::factory()->count(5)->create();
        Category::factory()->count(5)->create();
        Currency::factory()->count(5)->create();
        City::factory()->count(5)->create();
        User::factory(['email'=>'test@example.com'])->create();
        User::factory()->count(5)->create();




        if (config('variables.WITH_FAKER')) {
            // FAKE data
        }
    }
}
