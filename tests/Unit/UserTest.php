<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
uses(Tests\TestCase::class);
it('can registe a User', function () {
    $faker = \Faker\Factory::create();
    $email=$faker->email;
    $attributes = ['name'=>'hdi youcef','email'=>$email,'phone'=>"1234567890",'password'=>'12345678'];
    $response = $this->postJson('/api/v1/register', $attributes);
    $response->assertStatus(201)->assertJson(['message' => 'User has been created']);
    //$this->assertDatabaseHas('users', $attributes);
});
it('does not login a to-do without fill fields',function(){
    $response = $this->postJson('/api/v1/login', []);
    $response->assertStatus(422);
});

it('can login ', function () {
    $faker = \Faker\Factory::create();
    $users=User::pluck('email');
    $email=$faker->randomElement($users);
    $attributes = ['email'=>$email,'password'=>'12345678'];
    $response = $this->postJson('/api/v1/login', $attributes);
    $response->assertStatus(200);
});
it('can logout ', function () {
    $id=User::pluck('id')->first();
    $user=User::find($id);
    $token = $user->createToken('auth_token')->plainTextToken;
    $response=$this->withHeaders(['Authorization' => 'Bearer '.$token])->getJson('/api/v1/auth/logout');
    $response->assertStatus(200);
 });
 it('can not send reset password link ', function () {
    $attributes = [];
    $response = $this->postJson('/api/v1/send-reset-link-response', $attributes);
    $response->assertStatus(422);

});
it('can send reset password link ', function () {
    $faker = \Faker\Factory::create();
    $users=User::pluck('email');
    $email=$faker->randomElement($users);
    $attributes = ['email'=>$email];
    $response = $this->postJson('/api/v1/send-reset-link-response', $attributes);
    $response->assertStatus(200);

});
it('can not send reset password response ', function () {
    $attributes = [];
    $response = $this->postJson('/api/v1/send-reset-response', $attributes);
    $response->assertStatus(422);

});
it('can send reset password response ', function () {
    $faker = \Faker\Factory::create();
    $users=User::pluck('email');
    $email=$faker->randomElement($users);
    $attributes = ['token'=>'kjkkjnlnkjnjknnjn','email'=>$email,'password'=>"1234567890",'password_confirmation'=>"1234567890"];
    $response = $this->postJson('/api/v1/send-reset-response', $attributes);
    $response->assertStatus(200);

});
it('can not verify user email', function () {
    $faker = \Faker\Factory::create();
    $users=User::pluck('email');
    $email=$faker->randomElement($users);
    $id=User::where('email',$email)->first()->id;
    $attributes = ["expires"=>"1647442436","hash"=>"0819f09aaf6ad9a75cad77f5cc5dced982a55da4","signature"=>"8e9c9cacb0c6904a827f66054673978af3881bb65abccc4160055f7be45bad09"];
    $response = $this->getJson('/api/v1/email/verify/'.$id, $attributes);
    $response->assertStatus(401);
});

it('can resend verify user email', function () {
    $faker = \Faker\Factory::create();
    $users=User::pluck('email');
    $email=$faker->randomElement($users);
    $user=User::where('email',$email)->first();
    $token = $user->createToken('auth_token')->plainTextToken;

    $response = $this->withHeaders(['Authorization' => 'Bearer '.$token])->getJson('/api/v1/auth/email/resend');
    $response->assertStatus(200);
});
it('can fetch the authentificated user ', function () {
    $id=User::pluck('id')->first();
    $user=User::find($id);
    $token = $user->createToken('auth_token')->plainTextToken;
    $response=$this->withHeaders(['Authorization' => 'Bearer '.$token])->getJson('/api/v1/auth/myprofile');
    $response->assertStatus(200);
});

 it('can fetch  a user ', function () {
     $id=User::pluck('id')->first();
    $response=$this->getJson('/api/v1/users/'.$id.'/user')->assertJson(['message'=>'User has been fetched']);
    $response->assertStatus(200);
 });
 it('can not fetch a user ', function () {
    $id=8000;
   $response=$this->getJson('/api/v1/users/'.$id.'/user')->assertJson(['message'=>'User has not been fetched']);
   $response->assertStatus(404);
});
it('can update user information ', function () {
    $faker = \Faker\Factory::create();
    $id=User::pluck('id')->first();
    $user=User::find($id);
    $token = $user->createToken('auth_token')->plainTextToken;
    $attributes=[
        "name"=>"youcef hdi",
        "password"=>"12345678",
        "email"=>$user->email,
        "about"=>"hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii",
        "phone"=>$faker->numerify('##########'),
    ];
    $response=$this->withHeaders(['Authorization' => 'Bearer '.$token])->putJson('/api/v1/auth/user/update',$attributes);
    $response->assertStatus(200)->assertJson(['message' => 'User has been updated']);
 });


 it('can delete user  ', function () {
    $id=User::pluck('id')->first();
    $user=User::find($id);
    $token = $user->createToken('auth_token')->plainTextToken;
    $response=$this->withHeaders(['Authorization' => 'Bearer '.$token])->deleteJson('/api/v1/auth/user/delete');
    $response->assertStatus(200)->assertJson(['message' => 'User has been deleted']);
 });




