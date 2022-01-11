<?php

namespace TestCode;

use Tests\TestCase;
use RefreshDatabase;

class JerseyTest extends TestCase
{
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_Upload()
    {
        $response = $this->call('POST','/uploadjersey', [
            'image' => 'imageFile',
            'imagename'=> 'Name of the image',
            'title'=> 'Brazil',
            'price' => '10',
            'description'=> 'EPL',
        ]);

        $response->assertStatus($response->status(), 302);

    }

    public function test_DeleteMenu()
    {
        $response = $this->call('GET','/deletemenu', [
            'data' => 'Selected Jerseys',
        ]);

        $response->assertStatus($response->status(), 302);

    }
    public function test_Update()
    {
        $response = $this->call('GET','/update', [
            'image' => 'NewImageFile',
            'imagename'=> 'New Name of the image',
            'title'=> 'Argentina',
            'price' => '12',
            'description'=> 'LA Liga',
        ]);

        $response->assertStatus($response->status(), 302);

    }
}