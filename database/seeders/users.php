<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $data = [];

        for ($i = 1; $i <= 1 ; $i++) {
            array_push($data, [
                'name'     => 'nadour sabrina',
                'email'    => 'test@example.com',
                'password' => bcrypt('123456'),
                'address'     => $faker->address(),
                'phone'     => $faker->phoneNumber(),
            ]);
        }

        User::insert($data);

    }
}
