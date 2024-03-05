<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserApiTest extends TestCase
{
    // The $seed variable and trait will refresh the database
    // and reseed before tests run.
    protected $seed = true;
    use RefreshDatabase;

    public function test_database_has_seeded_4_default_users()
    {
        $this->assertDatabaseCount('users', 4);

        $this->assertDatabaseHas('users', [
            'id' => 1,
            'name' => 'User 1',
        ]);

        $this->assertDatabaseHas('users', [
            'id' => 4,
            'name' => 'User 4',
        ]);
    }

    public function test_get_all_users_returns_successful_response_with_4_users(): void
    {
        $response = $this->get('/api/users');
        $response->assertStatus(200);
        $response->assertJsonCount(4);
    }

    public function test_get_user_1_returns_successful_response(): void
    {
        $response = $this->get('/api/users/1');
        $response->assertStatus(200);
        $response->assertExactJson(['id' => 1, 'name' => 'User 1']);

    }

    public function test_get_nonexistent_user_id_100_returns_empty_response(): void
    {
        $response = $this->get('/api/users/100');
        $response->assertStatus(200);
        $response->assertExactJson([]);
    }

    public function test_post_new_user_5_adds_a_new_user_to_database(): void
    {
        $response = $this->postJson('/api/users', [
            'name' => 'User 5',
        ]);

        $this->assertJson($response->getContent());

        $response->assertStatus(201);

        $this->assertDatabaseHas('users', [
            'id' => 5,
            'name' => 'User 5',
        ]);
    }

    public function test_put_user_4_updates_username(): void
    {
        $response = $this->putJson('/api/users/4', [
            'name' => 'Modified User 4',
        ]);

        $this->assertJson($response->getContent());

        $response->assertStatus(200);

        $this->assertDatabaseHas('users', [
            'id' => 4,
            'name' => 'Modified User 4',
        ]);
    }

    public function test_delete_user_4_deletes_user_from_datatbase(): void
    {
        $response = $this->delete('/api/users/4');
        $response->assertStatus(204);

        $this->assertDatabaseMissing('users', ['id' => 4]);
    }

}
