<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     @test
     */
    function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
