<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
uses(Tests\TestCase::class);

it('can fetch all Categories in tree', function () {
    $response = $this->getJson('/api/v1/tree-categories');
    $response->assertStatus(200)->assertJson(['message' => 'Categories have been fetched']);

});
it('can fetch all categories', function () {
    $response = $this->getJson('/api/v1/categories');
    $response->assertStatus(200)->assertJson(['message' => 'Categories have been fetched']);

});
