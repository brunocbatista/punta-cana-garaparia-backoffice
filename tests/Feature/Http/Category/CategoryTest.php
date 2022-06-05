<?php

namespace Tests\Feature\Http\Category;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_auth_user_can_view_category_page()
    {
        // Prepare
        $this->seed();
        $user = User::factory()->create();

        // Act
        $response = $this->actingAs($user)
            ->get(route('get-categories'));

        // Assert
        $response->assertOk();
    }
}
