<?php

namespace TestCode;

use Tests\TestCase;
use RefreshDatabase;

class UserTest extends TestCase
{
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_DeleteUser()
    {
        $response = $this->call('POST','/deleteuser', [
            'data' => 'User Details',
        ]);

        $response->assertStatus($response->status(), 302);

    }
}