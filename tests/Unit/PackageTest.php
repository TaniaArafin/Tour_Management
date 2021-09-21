<?php

namespace Tests\Unit;

use Tests\TestCase;
//use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomepageTest extends TestCase
{
    /** @test */
    public function storeTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);

    }
    /** @test */
    public function showDetailTest() {
        $response = $this->get('/package/5');
        $response->assertStatus(200);
    }
}