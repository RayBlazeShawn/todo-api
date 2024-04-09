<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class TodoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_create_a_todo()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user, 'api');

        $response = $this->postJson('/api/todos', [
            'title' => 'Test ToDo',
            'description' => 'Test Description',
        ]);

        $response->assertStatus(201);

        $this->assertDatabaseHas('todos', [
            'title' => 'Test ToDo',
            'description' => 'Test Description',
            'user_id' => $user->id,
        ]);
    }
}
