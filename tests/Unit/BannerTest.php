<?php

use App\Models\Category;
use App\Models\Position;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
uses(Tests\TestCase::class);

it('can fetch a Banner by position id', function () {
    $faker = \Faker\Factory::create();
    $id=$faker->randomElement(Position::pluck('id'));
    $response = $this->getJson('/api/v1/position/'.$id.'/banner');
    $response->assertStatus(200)->assertJson(['message' => "Banner has been fetched"]);

});
