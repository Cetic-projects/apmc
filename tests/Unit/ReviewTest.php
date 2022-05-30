<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
uses(Tests\TestCase::class);
it('can fetch reviews of a post', function () {
    $faker = \Faker\Factory::create();
    $post_id=$faker->randomElement(Post::pluck('id'));
    $response = $this->getJson('/api/v1/post/'.$post_id.'/reviews');
    $response->assertStatus(200)->assertJson(['message' => 'Reviews have been fetched']);

});

it('can upate or store a review ', function () {
    $faker = \Faker\Factory::create();
    $users=User::pluck('email');
    $email=$faker->randomElement($users);
    $user=User::where('email',$email)->first();
    $token = $user->createToken('auth_token')->plainTextToken;
    $body=["comment"=>$faker->sentence(4),
    "rating"=>$faker->numberBetween(0,5),
    "post_id"=>$faker->randomElement(Post::pluck('id'))];

    $response = $this->withHeaders(['Authorization' => 'Bearer '.$token])->postJson('/api/v1/auth/review/create-or-update',$body);
    $response->assertStatus(201);
});
it('can\'t upate or store a review ', function () {
    $faker = \Faker\Factory::create();
    $users=User::pluck('email');
    $email=$faker->randomElement($users);
    $user=User::where('email',$email)->first();
    $token = $user->createToken('auth_token')->plainTextToken;
    $body=[
    "post_id"=>$faker->randomElement(Post::pluck('id'))];

    $response = $this->withHeaders(['Authorization' => 'Bearer '.$token])->postJson('/api/v1/auth/review/create-or-update',$body);
    $response->assertStatus(422);
});
it('can delete a review ', function () {
    $faker = \Faker\Factory::create();
    $users=User::pluck('id');
    $user=User::find($faker->randomElement($users));
    $token = $user->createToken('auth_token')->plainTextToken;
    $id=$faker->randomElement($user->reviews->pluck('id'));
    $response = $this->withHeaders(['Authorization' => 'Bearer '.$token])->deleteJson('/api/v1/auth/review/'.$id.'/delete');
    $response->assertStatus(200);
});
it('can\'t delete a review ', function () {
    $faker = \Faker\Factory::create();
    $users=User::pluck('id');
    $user=User::find($faker->randomElement($users));
    $token = $user->createToken('auth_token')->plainTextToken;
    $id=$faker->numberBetween(1,5);
    $response = $this->withHeaders(['Authorization' => 'Bearer '.$token])->deleteJson('/api/v1/auth/review/'.$id.'/delete');
    $response->assertStatus(401);
});

