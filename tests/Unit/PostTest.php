<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
uses(Tests\TestCase::class);

it('can fetch all Posts', function () {
    $response = $this->getJson('/api/v1/posts');
    $response->assertStatus(200)->assertJson(['message' => 'Posts have been fetched']);

});
it('can fetch promotinal Posts', function () {
    $response = $this->getJson('/api/v1/promotinal-posts');
    $response->assertStatus(200)->assertJson(['message' => 'Posts have been fetched']);

});
it('can fetch top ten Posts review', function () {
    $response = $this->getJson('/api/v1/top-10-posts');
    $response->assertStatus(200)->assertJson(['message' => 'Posts have been fetched']);

});
it('can fetch Posts by category', function () {
    $faker = \Faker\Factory::create();
    $category_id=$faker->randomElement(Category::pluck('id'));
    $response = $this->getJson('/api/v1/category/'.$category_id.'/posts');
    $response->assertStatus(200)->assertJson(['message' => 'Posts have been fetched']);

});
