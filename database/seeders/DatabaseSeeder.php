<?php

namespace Database\Seeders;

use App\Models\AdminMail;
use App\Models\Banner;
use App\Models\Category;
use App\Models\City;
use App\Models\Post;
use App\Models\Currency;
use App\Models\Message;
use App\Models\Order;
use App\Models\Position;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        // $this->call(users::class);
        $this->call(role_permission::class);
        //AdminMail::factory()->count(5)->create();
       // Position::factory()->count(5)->create();
        Banner::factory()->count(2)->create()->each(function ($banner) {
           $banner->positions()->attach(Position::factory()->create());
        });
        //Message::factory()->count(5)->create();
        Category::factory()->count(5)->create();
       for($i=0;$i<30;$i++){
        Post::create([
            "title"=>$faker->name(),
            "category_id"=>$faker->randomElement(Category::pluck('id')),
            "description"=>$faker->sentence(10),
            "price"=>$faker->numberBetween(100,10000),

        ]);
    }


       // Currency::factory()->count(5)->create();
        City::factory()->count(5)->create();
        User::factory()->create(['first_name'=>'enadir','email'=> 'test@example.com'])->assignRole('super_admin');


        $users_id= User::pluck('id');
        $posts_id= Post::pluck('id');
        for ($i = 1; $i <= 10; $i++) {
            Review::create([
                'comment'     => $faker->sentence(),
                'rating'    => $faker->numberBetween(1,5),
                'user_id' => $faker->randomElement($users_id),
                'post_id'     => $faker->randomElement($posts_id),
                'status'=>0,
            ]);
        }
        $status=['New','In preparation','In dispatch','In delivering','Delivered','Failed'];
        for($j=0;$j<30;$j++){
            $post=$faker->randomElement(Post::all());
            $amount=$faker->numberBetween(1,$post->amount);
            Order::create(
                [
                    "amount"=>$amount,
                    "receipt"=>$amount*$post->price,
                    "status"=>$faker->randomElement($status),
                    "post_id"=>$post->id,
                    "user_id"=>$faker->randomElement(User::pluck('id')),
                    "trait_at"=>$faker->date(),
                ]
                );
        }

        if (config('variables.WITH_FAKER')) {
            // FAKE data
        }
    }
}
