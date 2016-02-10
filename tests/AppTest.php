<?php

namespace App\Tests;

use App\Entities\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Auth;

class AppTest extends TestCase
{
    /**
     * Test app base route.
     *
     * @return void
     */
    public function testBaseRoute()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }
}
