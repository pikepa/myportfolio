<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Category;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageCategoriesTests extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        
        $response = $this->get('/category');

        $response->assertStatus(200);
    }
}
