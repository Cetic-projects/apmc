<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
uses(Tests\TestCase::class);
it('can fetch order of a post', function () {
    $faker = \Faker\Factory::create();
    $users=User::pluck('email');
    $email=$faker->randomElement($users);
    $user=User::where('email',$email)->first();
    $token = $user->createToken('auth_token')->plainTextToken;
    $response = $this->withHeaders(['Authorization' => 'Bearer '.$token])->getJson('/api/v1/auth/orders');
    $response->assertStatus(200)->assertJson(['message' => 'Orders have been fetched']);
});

it('can store an order ', function () {
    $faker = \Faker\Factory::create();
    $users=User::pluck('email');
    $email=$faker->randomElement($users);
    $user=User::where('email',$email)->first();
    $token = $user->createToken('auth_token')->plainTextToken;
    $post=$faker->randomElement(Post::where('amount','!=',0)->get());
    $body=[
    "amount"=>$faker->numberBetween(1,$post->amount),
    "post_id"=>$post->id];
     $response = $this->withHeaders(['Authorization' => 'Bearer '.$token])->postJson('/api/v1/auth/order/create',$body);
     $response->assertStatus(200);
});
it('can\'t store an order ', function () {
    $faker = \Faker\Factory::create();
    $users=User::pluck('email');
    $email=$faker->randomElement($users);
    $user=User::where('email',$email)->first();
    $token = $user->createToken('auth_token')->plainTextToken;
    $post=$faker->randomElement(Post::all());
    $body=[
    "amount"=>$faker->numberBetween(1+$post->amount,10000000000),
    "post_id"=>$post->id];
     $response = $this->withHeaders(['Authorization' => 'Bearer '.$token])->postJson('/api/v1/auth/order/create',$body);
     $response->assertStatus(422);
});
it('can update an order ', function () {
    $faker = \Faker\Factory::create();
    $users=User::has('orders')->pluck('email');
    $email=$faker->randomElement($users);
    $user=User::where('email',$email)->first();
    $token = $user->createToken('auth_token')->plainTextToken;
    $order=$user->orders->first();
    $body=[
    "amount"=>$faker->numberBetween(1,$order->post->amount),
    ];
     $response = $this->withHeaders(['Authorization' => 'Bearer '.$token])->putJson('/api/v1/auth/order/'.$order->id.'/update',$body);
     $response->assertStatus(200);
});
it('can\'t update an order ', function () {
    $faker = \Faker\Factory::create();
    $users=User::has('orders')->pluck('email');
    $email=$faker->randomElement($users);
    $user=User::where('email',$email)->first();
    $token = $user->createToken('auth_token')->plainTextToken;
    $order=$user->orders->first();
    $body=[
    "amount"=>$faker->numberBetween(1+$order->post->amount,10000000000),
    ];
     $response = $this->withHeaders(['Authorization' => 'Bearer '.$token])->putJson('/api/v1/auth/order/'.$order->id.'/update',$body);
     $response->assertStatus(422);
});


it('can cancel an order ', function () {
    $faker = \Faker\Factory::create();
    $users=User::has('orders')->pluck('email');
    $email=$faker->randomElement($users);
    $user=User::where('email',$email)->first();
    $token = $user->createToken('auth_token')->plainTextToken;
    $order=$user->orders->first();

     $response = $this->withHeaders(['Authorization' => 'Bearer '.$token])->putJson('/api/v1/auth/order/'.$order->id.'/cancel');
     $response->assertStatus(200);
});
it('can\'t cancel an order ', function () {
    $faker = \Faker\Factory::create();
    $users=User::has('orders')->pluck('email');
    $email=$faker->randomElement($users);
    $user=User::where('email',$email)->first();
    $token = $user->createToken('auth_token')->plainTextToken;
    $another=User::has('orders')->where('email','!=',$email)->first();
    $order=$another->orders->first();
    $response = $this->withHeaders(['Authorization' => 'Bearer '.$token])->putJson('/api/v1/auth/order/'.$order->id.'/cancel');
    $response->assertStatus(404);
});

