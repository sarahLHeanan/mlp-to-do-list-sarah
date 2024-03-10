<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\factories\TaskFactory;
use App\Models\Task;

class TaskTest extends TestCase
{
    /**
     * Test that tasks are passed to the index view after creation.
     *
     * @return void
     */
    public function test_that_we_can_view_tasks()
    {
        $tasks = Task::factory()->create([
            'name' => 'test tesk',
        ]);

        $response = $this->get('/tasks');

        $response->assertStatus(200);

        $response->assertSeeText($tasks['name']);
    }
}
