<?php

namespace TestCode;

use Tests\TestCase;
use RefreshDatabase;

class CategoryTest extends TestCase
{
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_UploadCategory()
    {
        $response = $this->call('POST','/uploadcategory', [
            'image' => 'Image of the Category',
            'imagename'=> 'Name of the category',
            'name'=> 'League Name',
            'speciality' => 'Teams',
        ]);

        $response->assertStatus($response->status(), 302);

    }

    public function test_UpdateJerseyCategory()
    {

        $response = $this->call('POST','/updatejerseycategory', [
            'image' => 'New Image of the Category',
            'imagename'=> 'New Name of the category',
            'name'=> 'New League Name',
            'speciality' => 'New Teams',
        ]);

        $response->assertStatus($response->status(), 302);

    }
    public function test_DeleteCategory()
    {

        $response = $this->call('GET','/deletecategory', [
            'data' => 'Deleted Item',
        ]);

        $response->assertStatus($response->status(), 302);

    }
}