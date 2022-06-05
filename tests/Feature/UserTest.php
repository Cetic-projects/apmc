<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

it('can registe a User', function () {
    $attributes = ['first_name'=>'youcef','last_name'=>'nadour','email'=>'group13info@gmail.com','password'=>'12345678'];
    $response = $this->postJson('/api/v1/register', $attributes);
    $response->assertStatus(201)->assertJson(['message' => 'User has been created']);
    //$this->assertDatabaseHas('users', $attributes);
});

