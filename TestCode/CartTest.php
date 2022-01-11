<?php

namespace TestCode;

use Tests\TestCase;
use RefreshDatabase;

class CartTest extends TestCase
{
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_AddCart()
    {
        $response = $this->call('POST','/addcart', [
            'user_id' => '1',
            'jersey_id'=> '2',
            'quantity'=> '4',
        ]);

        $response->assertStatus($response->status(), 302);

    }

    public function test_RemoveFromCart()
    {

        $response = $this->call('GET','/remove', [
            'data' => 'removedItem',
        ]);

        $response->assertStatus($response->status(), 302);

    }
}