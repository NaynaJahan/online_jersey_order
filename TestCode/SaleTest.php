<?php

namespace TestCode;

use Tests\TestCase;
use RefreshDatabase;

class SaleTest extends TestCase
{
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_OrderConfirm()
    {
        $response = $this->call('POST','/orderconfirm', [
            'jerseyname' => 'JerseyName',
            'price'=> '20',
            'quantity'=> '4',
            'name' => 'MyName',
            'phone'=> '10023',
            'address'=> 'Dhaka',
        ]);

        $response->assertStatus($response->status(), 302);

    }
}