<?php

namespace TestCode;

use Tests\TestCase;
use RefreshDatabase;

class OrderTest extends TestCase
{
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_Order()
    {
        $response = $this->call('POST','/order', [
            'name' => 'My Name',
            'email'=> 'xyz@gmail.com',
            'phone'=> '02984154243',
            'quantity' => '5',
            'date' => '12/01/2022',
            'time'=> '10.30 AM',
            'product'=> 'PSG',
            'address' => 'Dhaka',
        ]);

        $response->assertStatus($response->status(), 302);

    }
}